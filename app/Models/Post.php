<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Autoturism;

class Post extends Model
{
    use HasFactory;
    protected $with = ['autoturism'];
    protected $guarded=[];
    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['search']??false, fn($query,$search) =>
            $query->where(fn($query)=>
                $query->where('title','like','%'.$search.'%')
                    ->orWhere('body','like','%'.$search.'%')
            )
        );

        $query->when($filters['kilometers']??false, fn($query,$kilometers) =>
            $query->where(fn($query)=>
                $query->where('kilometers','like','%'.$kilometers.'%')
                    // ->orWhere('body','like','%'.$search.'%')
            )
        );

        // $query->when($filters['kilometers']??false,fn($query,$autoturism)=>
        //     $query->whereHas('kilometers',fn($query)=>
        //         $query->where('autoturism_id',$autoturism)

        //     )
        // );
    }

    public function autoturism()
    {
        return $this->belongsTo(Autoturism::class);
    }
    public function kilometers()
    {
        return $this->belongsTo(Autoturism::class)->kilometers;
    }
}
