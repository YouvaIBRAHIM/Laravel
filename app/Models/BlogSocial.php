<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\BlogPost;

class BlogSocial extends Model
{
    use HasFactory;

    
    public function post(): BelongsTo
    {
        return $this->belongsTo(BlogPost::class);
    }
}
