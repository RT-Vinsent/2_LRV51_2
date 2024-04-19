<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;

    /**
     * Список атрибутов, которые можно массово назначать.
     *
     * @var array
     */
    protected $fillable = ['title', 'start_from', 'is_active'];

    /**
     * Список атрибутов, которые должны быть преобразованы к датам.
     *
     * @var array
     */
    protected $dates = ['start_from'];

    /**
     * Отношение "один ко многим" с моделью Student.
     * Одна группа может содержать много студентов.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function students()
    {
        return $this->hasMany(Student::class);
    }
}
