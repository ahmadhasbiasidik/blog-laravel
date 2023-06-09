<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use Sluggable, HasFactory;
    
    // protected $fillable = ['title','excerpt','body',];
    
    protected $guarded=['id'];
    protected $with=['category','author'];

    public function scopeFilter($query, array $filters)
    {
        // query for search input
        // pakai callback
        $query->when($filters['search'] ?? false, function($query, $search) {
            return $query->where(function($query) use ($search) {
                $query->where('title', 'like', '%' . $search . '%')
                ->orWhere('body', 'like', '%' . $search . '%');
             });
         });

        //  query for + category
        // pakai callback
         $query->when($filters['category'] ?? false, function($query, $category){
            return $query->whereHas('category', function($query) use ($category){
                $query->where('slug', $category);
            });
         });

        //  query for + author
        // $query->when($filters['author'] ?? false, function($query, $author){
        //     return $query->whereHas('author', function($query) use ($author){
        //         $query->where('username', $author);
        //     });
        // });

        // pakai arrow function
        $query->when($filters['author'] ?? false, fn($query, $author) =>
            $query->whereHas('author', fn($query) =>
                $query->where('username', $author)
            )
        );
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title',
            ]
            ];
    }
}
