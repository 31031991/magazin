<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;

    // Разрешаем массовое заполнение для поля 'title'
    protected $fillable = [
        'title',
    ];
    public function product()
    {
        return $this->hasMany(Product::class, 'group_id', 'id');
    }
}
