<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccessibilityController extends Controller
{
    public function update(Request $request)
    {
        $data = $request->validate([
            'font_size' => ['required', 'integer', 'min:80', 'max:200'],
            'high_contrast' => ['required', 'boolean'],
            'screen_reader' => ['required', 'boolean'],
            'keyboard_nav' => ['required', 'boolean'],
            'voice_input' => ['required', 'boolean'],
        ]);

        if ($request->user()) {
            $request->user()->accessibilitySetting()->updateOrCreate(
                ['user_id' => $request->user()->id],
                $data
            );
        }

        return response()->json(['status' => 'ok']);
    }
}
