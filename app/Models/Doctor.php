<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Doctor extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'speciality', 'img', 'content', 'description', 'slug'];

    public function setSlugAttribute($value)
    {
        $this->attributes['slug'] = Str::slug(mb_substr($this->name, 0, 250) . "-");
    }

    public function getContentPreview()
    {
        return Str::limit($this->content, 100);
    }
}
