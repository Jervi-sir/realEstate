<?php

namespace App\Models;

use App\Models\Tag;
use App\Models\User;
use App\Models\Announcetype;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Announce extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function type()
    {
        return $this->belongsTo(Announcetype::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'announce_tag');
    }

    public function wilaya()
    {
        return $this->belongsTo(Wilaya::class);
    }

}
