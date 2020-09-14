<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Baby extends Model
{
    public function doctors(){
        return $this->belongsToMany(Doctor::class);
    }

    public function mothers(){
        return $this->belongsToMany(Mother::class);
    }
}
