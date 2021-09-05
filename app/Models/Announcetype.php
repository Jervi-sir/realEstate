<?php

namespace App\Models;

use App\Models\Announce;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Announcetype extends Model
{
    use HasFactory;

    public function announces()
    {
        return $this->belongsTo(Announce::class);
    }

}
