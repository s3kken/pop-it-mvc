<?php

namespace Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class listGroup extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function ListStudents_view()
    {
        return $this->belongsTo(ListStudents::class, 'idGroup', 'idGroup');
    }
}
