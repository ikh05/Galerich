<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\SocialMedia;

class SocialMediaPlatfrom extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function akun(){
        return $this->hasMany(SocialMedia::class, 'social_media_platform_id');
    }
}
