<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;
    protected $fillable = [
        'username',
        'password',
   
    ];

    protected $hidden = [
        'password',
    ];
    
    public function news()
    {
        return $this->hasMany(News::class);
    }

    public function galleries()
    {
        return $this->hasMany(Gallery::class);
    }

    public function landingPages()
    {
        return $this->hasMany(LandingPage::class);
    }
}
