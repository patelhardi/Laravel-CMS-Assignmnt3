<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'content',
        'technology',
        'url1',
        'url2',
        'image',
        'user_id',
    ];


    public function user()
    {
        return $this->belongsTo(USer::class, 'user_id');
    }
    
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
