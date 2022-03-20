<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Laravel\Jetstream\Jetstream;

/**
 * @property-read int $id
 * @property int $user_id
 * @property string $name
 * @property string $key
 * @property string $version_php
 * @property string $version_laravel
 * @property-read  Carbon $created_at
 * @property-read  Carbon $updated_at
 * @property Carbon $archived_at
 * @property-read int $logs_count
 * @property-read Carbon lastEntryDate
 * @method Builder active()
 * @method Builder archived()
 */
class Projects extends Model
{
    use HasFactory;

    protected $table = 'projects';
    protected $fillable = [
        'user_id', 'name', 'key', 'archived_at'
    ];
    protected $appends = [
        'last_entry_date',
    ];
    protected $withCount = [
        'logs',
    ];

    protected static function boot()
    {
        parent::boot();
        static::addGlobalScope('own_projects_only', function (Builder $builder) {
            if (Jetstream::hasTeamFeatures()) {
                /** @var Team $team */
                $team = auth()->user()->currentTeam;
                if ($team !== null) {
                    $builder->whereIn('user_id', $team->allUsers()->pluck('id', 'id'));
                    return;
                }
            }
            $builder->where('user_id', '=', auth()->id());
        });
    }

    public function scopeActive(Builder $query): Builder
    {
        return $query->whereNull('archived_at');
    }

    public function scopeArchived(Builder $query): Builder
    {
        return $query->whereNotNull('archived_at');
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function logs(): HasMany
    {
        return $this->hasMany(Logs::class, 'project_id', 'id');
    }

    public function getLastEntryDateAttribute()
    {
        return $this->logs()->max('logged_at');
    }

}
