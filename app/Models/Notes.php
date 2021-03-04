<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use Te7aHoudini\LaravelTrix\Traits\HasTrixRichText;

class Notes extends Model
{
    use HasFactory;
    use HasTrixRichText;

    /**
     * Fields that can not be mass assigned
     * 
     * @var array
     */
    protected $guarded = ['id'];


    /**
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'id', 'user_id');
    }
}
