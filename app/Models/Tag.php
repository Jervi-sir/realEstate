<?php

namespace App\Models;

use App\Models\Announce;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tag extends Model
{
    use HasFactory;

    public function announces()
    {
        return $this->belongsToMany(Announce::class, 'announce_tag');
    }
}
