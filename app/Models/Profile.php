<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = [];

    public function profileImage() {
        $imagePath = ($this->image) ? $this->image : 'profile/FnQm1OwHuX34fDIE9ggcj0QeHC3zFtOvJjrcT6v5.jpg';
        return '/storage/' . $imagePath;
    }

    public function followers()
    {
        // it belongs to many users (followers)
        return $this->belongsToMany(User::class);
    }

    public function user() 
    {
        // It belongs to an user (profile owner)
        return $this->belongsTo(User::class);
    }
}
