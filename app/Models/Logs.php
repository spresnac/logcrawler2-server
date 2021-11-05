<?php

namespace App\Models;

use DateTime;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Carbon;

/**
 * @property-read  int $id
 * @property int $project_id
 * @property string $ident
 * @property int $level
 * @property string $level_name
 * @property string $channel
 * @property Carbon $logged_at
 * @property string $message
 * @property string $formatted
 * @property int $size
 * @property-read Carbon $created_at
 * @property-read Carbon $updated_at
 */
class Logs extends Model
{
    use HasFactory;

    protected $table = 'logs';

    protected $fillable = [
        'project_id', 'ident', 'level', 'level_name', 'channel', 'logged_at', 'message', 'formatted', 'size',
    ];

    public function project(): BelongsTo
    {
        return $this->belongsTo(Projects::class, 'id', 'project_id');
    }
}
