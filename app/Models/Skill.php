<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;


class Skill extends Model
{
    use HasFactory;

    protected $fillable =[
        'title',
        'color'
    ];

    public static function getAvaliableBackgroundColors()
    {
        $elements = json_decode(
            File::get(resource_path('json/costumization.json'))
        );
        return $elements->backgrounds;
    }
}
