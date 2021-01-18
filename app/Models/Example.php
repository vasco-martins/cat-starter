<?php


namespace App\Models;


use Cat\Models\Model;

class Example extends Model
{

    protected static string $table = 'example';

    protected static array $fillable = [
        'id',
        'name',
    ];


}