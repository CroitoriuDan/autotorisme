<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $guarded=[];
    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['search']??false, fn($query,$search) =>
            $query->where(fn($query)=>
                $query->where('name','like','%'.$search.'%')
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

}
