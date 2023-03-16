<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use App\Models\Ressource;

class Bookmark extends Model
{
    use HasFactory;

    public $fillable = [
        "title", "description"
    ];

    public function ressource() : HasOne
    {
        return $this->hasOne(Ressource::class);
    }
}
