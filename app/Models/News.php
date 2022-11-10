<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class News extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'content', 'img', 'slug'];

    public function setSlugAttribute($value)
    {
        $this->attributes['slug'] = Str::slug(mb_substr($this->title, 0, 100) . "-");
    }

    public function scopeAllPaginate($query, $numbers)
    {
        return $query->latest()->paginate($numbers);
    }
    public function getContentPreview()
    {
        return Str::limit($this->content, 120);
    }
    public function createdAtForHumans()
    {
        return $this->created_at->diffForHumans();
    }


}
