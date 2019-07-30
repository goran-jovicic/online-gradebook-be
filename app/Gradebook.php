<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gradebook extends Model
{
    public function professor() {
        return $this->belongsTo(Professor::class);
    }

    public function students() {
        return $this->hasMany(Student::class);
    }
}
