<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    // Указание, какие поля можно заполнять через массовое назначение
    protected $fillable = ['group_id', 'surname', 'name'];

    // Обратное отношение "многие к одному" к модели Group
    public function group()
    {
        return $this->belongsTo(Group::class);
    }
}
