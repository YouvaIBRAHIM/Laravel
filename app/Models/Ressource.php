<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Bookmark;

class Ressource extends Model
{
    use HasFactory;

    public $fillable = [
        "url", "online", "bookmark_id"
    ];

    public function bookmark() : BelongsTo
    {
        return $this->belongsTo(Bookmark::class);
    }
}
