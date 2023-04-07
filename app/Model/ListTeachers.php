<?php

namespace Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class listTeachers extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'id_teacher',
        'surname',
        'name',
        'patronymic'
    ];
}
