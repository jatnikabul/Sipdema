<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Images extends Model
{
    public $table = 'images';

    protected $dates = ['created_at', 'updated_at'];

    protected $fillable = ['image'];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'image_url'
    ];

    /**
     * Get the image's full url.
     *
     * @return string
     */
    public function getImageUrlAttribute()
    {
        return env('APP_URL') . Storage::url($this->attributes['image']);
    }


    public function users()
    {
        return $this->hasMany(User::class, 'avatar');
    }
}
