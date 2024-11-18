<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductTag extends Model
{
    use HasFactory;

    // Разрешаем массовое заполнение для поля 'title'
    protected $fillable = [
        'title',
    ];
}
