<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    public function member()
    {
        return $this->belongsTo(Member::class);
    }
}
