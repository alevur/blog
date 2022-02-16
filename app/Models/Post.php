<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $table = 'posts'; // name of table //явное название таблицы
    protected $guarded = false; // allow the change //разрешаем изменения в таблице
}
