<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Builder;
use Laravel\Jetstream\Jetstream;

/**
 * @property int $id
 * @property int $user_id
 * @property string $name
 * @property string $key
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @property Carbon $archived_at
 * @method Builder active
 * @method Builder archived
 */
class Projects extends Model
{
    use HasFactory;

    protected $table = 'projects';
    protected $fillable = [
        'user_id', 'name', 'key', 'archived_at'
    ];

    protected static function boot()
    {
        parent::boot();
        static::addGlobalScope('own_projects_only', function (Builder $builder) {
            if (Jetstream::hasTeamFeatures()) {
                $builder->whereIn('user_id', auth()->user()->currentTeam->allUsers()->pluck('id', 'id'));
                return;
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
        return $this->belongsTo(User::class, 'id', 'user_id');
    }

}
