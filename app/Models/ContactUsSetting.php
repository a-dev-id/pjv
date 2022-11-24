<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactUsSetting extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'subtitle',
        'slug',
        'excerpt',
        'description',
        'banner_image',
        'meta_title',
        'meta_description',
        'phone_no',
        'phone_icon',
        'address_text',
        'address_icon',
        'email_text',
        'email_icon',
        'whatsapp_no',
        'whatsapp_text',
        'whatsapp_icon',
        'general_text',
        'general_email',
        'media_text',
        'media_email',
        'google_map',
        'status',
    ];
}
