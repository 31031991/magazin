<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // Разрешаем массовое заполнение для поля 'title'
    protected $fillable =
        ['title', 'description', 'content', 'price', 'old price', 'count', 'category_id', 'preview_image'] ;
                                                                                                                //після цього ті дані які є тут внеслися в базу даних таблицю Products

    public function category() //звязок між  моделями Category і Products
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    public function getImageUrlAttribute(){    //шлях до картинки апсолютний

      return url('storage/'. $this->preview_image);

    }


}

