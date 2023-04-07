<?php

namespace Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class listStudents extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = [
        'idStudent',
        'surname',
        'name',
        'patronymic',
        'gender',
        'dateOfBirth',
        'address',
        'idGroup'
    ];

    public function groups(): belongsTo
    {
        return $this->belongsTo(listGroup::class, 'idGroup', 'idGroup');
    }
}
