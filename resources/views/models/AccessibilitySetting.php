<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AccessibilitySetting extends Model
{
    protected $fillable = ['user_id', 'font_size', 'high_contrast', 'screen_reader', 'keyboard_nav', 'voice_input'];

    protected $casts = [
        'high_contrast' => 'boolean',
        'screen_reader' => 'boolean',
        'keyboard_nav' => 'boolean',
        'voice_input' => 'boolean',
    ];
}
