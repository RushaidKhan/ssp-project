<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venue extends Model
{
    use HasFactory;

    protected $primaryKey = 'venue_id'; // Specify the primary key name
    protected $fillable = [
        'name',
        'description',
        'location',
        'max_guest',
        'price',
        'image1',
        'image2',
        'image3',
        'image4',
        'image5',
        'user_id',
    ];

        // User realationship
        public function user()
        {
            return $this->belongsTo(User::class);
        }
}
