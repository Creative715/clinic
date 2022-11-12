<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class News extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'content', 'description', 'img', 'slug'];

    public function setSlugAttribute($value)
    {
        $this->attributes['slug'] = Str::slug(mb_substr($this->title, 0, 200) . "-");
    }

    public function scopeAllPaginate($query, $numbers)
    {
        return $query->latest()->paginate($numbers);
    }
    public function getTitlePreview()
    {
        return Str::limit($this->title, 40);
    }
    public function getContentPreview()
    {
        return Str::limit($this->content, 80);
    }
    public function createdAtForHumans()
    {
        return $this->created_at->diffForHumans();
    }


}
