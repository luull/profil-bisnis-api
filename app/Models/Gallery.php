<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;

    // Specify the table name if it's not the plural form of the model name
    protected $table = 'galleries';

    // Specify which attributes can be mass assignable
    protected $fillable = [
        'member_id',      // Foreign key to the members table
        'image_path',     // Path to the image file
        'description',    // Description of the image (optional)
    ];

    // Define the relationship with the Member model
    public function member()
    {
        return $this->belongsTo(Member::class);
    }
}
