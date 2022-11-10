<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Testimonial extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'body', 'slug'];

    public function setSlugAttribute($value)
    {
        $this->attributes['slug'] = Str::slug( mb_substr($this->name, 0, 100) . "-" );
    }
    public function scopeAllPaginate($query, $numbers)
    {
        return $query->latest()->where('published', '1')->paginate($numbers);
    }
    public function getBodyPreview()
    {
        return Str::limit($this->body, 80);
    }
    public function createdAtForHumans()
    {
        return $this->created_at->diffForHumans();
    }
}
