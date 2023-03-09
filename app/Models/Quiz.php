<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Carbon\Carbon;
use Cviebrock\EloquentSluggable\Sluggable;


class Quiz extends Model
{
    use Sluggable;

    use HasFactory;

    protected $fillable = ['title' ,'description','finished_at', 'status', 'slug'];

    protected $dates = ['finished_at'];

    public function getFinishedAtAttribute($date){
        return  $date ? Carbon::parse($date) : null;
    }

    public function questions(){
        return $this->hasMany('App\Models\Question');
    }


    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable(): array
    {
        return [
            'slug' => [
                'onUpdate' => true,
                'source' => 'title'
            ]
        ];
    }
}
