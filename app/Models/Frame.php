<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Frame extends Model
{
    use HasFactory;

    public function colors()
    {
        return $this->belongsToMany(Color::class, 'color_f_s','cid', 'fid');
    }
}
