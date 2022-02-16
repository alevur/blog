<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;
    protected $table = 'tags'; // name of table //явное название таблицы
    protected $guarded = false; // allow the change //разрешаем изменения в таблице
}
