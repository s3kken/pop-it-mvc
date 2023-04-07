<?php

namespace Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class statement extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = [
        'idStudent',
        'id_control',
        'idDisciplineGroup',
        'grade'
    ];

    public function titleStudents()
    {
        return $this->belongsTo(ListStudents::class, 'idStudent', 'idStudent');
    }

    public function titleControl()
    {
        return $this->belongsTo(Control::class, 'id_control', 'id_control');
    }

}
