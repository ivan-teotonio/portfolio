<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;


class Project extends Model
{
    use HasFactory;

    protected $fillable =[
        'title',
        'description',
        'color',
        'icon_name'
    ];

    public static function getAvaliableTextColors()
    {
        $elements = json_decode(
            File::get(resource_path('json/costumization.json'))
        );
        return $elements->texts;
    }

    public static function getAvaliableIcons()
    {
        $elements = json_decode(
            File::get(resource_path('json/costumization.json'))
        );
        return $elements->icons;
    }
}
