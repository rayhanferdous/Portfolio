<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;
    protected $fillable = [
        'id', 
        'footer_logo_text', 
        'fb_url', 
        'skype_url', 
        'linkedin_url', 
        'telegram_url', 
        'whatsapp_url', 
        'contact_mail', 
        'menu_link', 
        'logo_header', 
        'logo_footer', 
        'about_photo'
    ];

    protected $casts = [
        'menu_link' => 'array'
    ];
}
