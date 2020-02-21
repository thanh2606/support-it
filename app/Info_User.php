<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Info_User extends Model
{
    protected $fillable = [
        'user_id','full_name', 'image', 'address', 'email', 'gender'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function getAll()
    {
        return $this->latest()->paginate(5);
    }
}
