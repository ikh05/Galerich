<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\User;
use App\Models\SocialMediaPlatfrom;

class SocialMedia extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function platform(){
        return $this->belongsTo(SocialMediaPlatfrom::class, 'social_media_platform_id');
    }
}
