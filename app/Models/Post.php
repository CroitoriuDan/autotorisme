<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\Comment;

class Post extends Model
{
    use HasFactory;
    //protected $fillable = ['title','excerpt','body','id'];

    protected $with = ['category','author'];

    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['search']??false, fn($query,$search) =>
            $query->where(fn($query)=>
                $query->where('title','like','%'.$search.'%')
                    ->orWhere('body','like','%'.$search.'%')
            )
        );

        $query->when($filters['location']??false, fn($query,$location) =>
            $query->where(fn($query)=>
                $query->where('location','like','%'.$location.'%')
            )
        );

        $query->when($filters['brand']??false, fn($query,$brand) =>
            $query->where(fn($query)=>
                $query->where('brand','like','%'.$brand.'%')
            )
        );

        $query->when($filters['kilometers']??false, fn($query,$kilometers) =>
            $query->where(fn($query)=>
                $query->whereBetween('kilometers',[$kilometers/1.2,$kilometers*1.2])
            )
        );

        $query->when($filters['price']??false, fn($query,$price) =>
            $query->where(fn($query)=>
                $query->whereBetween('price',[$price/1.2,$price*1.2])
            )
        );


    }

    public function comments()   //user_id
    {
        return $this->hasMany(Comment::class);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function category()
    {
        //hasOne,hasMany,belongsTo,belongsToMany
        return $this->belongsTo(Category::class);
    }

    public function author()   //user_id
    {
        return $this->belongsTo(User::class,'user_id');
    }
}
