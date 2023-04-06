<?php

namespace Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class listGroup extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function students()
    {
        return $this->hasMany(ListStudents::class, 'idGroup', 'idGroup');
    }
}
