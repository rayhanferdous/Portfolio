<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Support\Facades\Storage;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $setting = Setting::first();
        return view('admin.setting.index', compact('setting'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request)
    {
        $validated = $request->validate([
            'logo_header' => 'required|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'logo_footer' => 'required|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'footer_logo_text' => 'nullable',
            'fb_url' => 'nullable|url',
            'skype_url' => 'nullable|url',
            'linkedin_url' => 'nullable|url',
            'telegram_url' => 'nullable|url',
            'whatsapp_url' => 'nullable|url',
            'contact_mail' => 'required|email',
            'menu_link' => 'nullable|array',
        ]);

        // Transform menu_link into the desired format (array of objects with name and link)
        $menuLinks = [];
        if (isset($validated['menu_link'])) {
            foreach ($validated['menu_link']['name'] as $index => $name) {
                $menuLinks[] = [
                    'name' => $name,
                    'link' => $validated['menu_link']['link'][$index] ?? ''
                ];
            }
        }

        $data = [
            'footer_logo_text' => $validated['footer_logo_text'],
            'fb_url' => $validated['fb_url'] ?? null,
            'skype_url' => $validated['skype_url'] ?? null,
            'linkedin_url' => $validated['linkedin_url'] ?? null,
            'telegram_url' => $validated['telegram_url'] ?? null,
            'whatsapp_url' => $validated['whatsapp_url'] ?? null,
            'contact_mail' => $validated['contact_mail'],
            'menu_link' => $menuLinks
        ];
        $setting = Setting::first();

        if ($request->hasFile('logo_header')) {
            if ($setting && $setting->logo_header) {
                Storage::delete(str_replace('storage/', 'public/', $setting->logo_header));
            }

            $logoHeaderPath = $request->file('logo_header')->store('public/logos');
            $data['logo_header'] = str_replace('public/', 'storage/', $logoHeaderPath);
        }

        if ($request->hasFile('logo_footer')) {
            if ($setting && $setting->logo_footer) {
                Storage::delete(str_replace('storage/', 'public/', $setting->logo_footer));
            }

            $logoFooterPath = $request->file('logo_footer')->store('public/logos');
            $data['logo_footer'] = str_replace('public/', 'storage/', $logoFooterPath);
        }


        Setting::updateOrCreate(
            ['id' => 1],
            $data
        );

        return redirect()->route('admin.setting.index')->with('message', 'Data Updated');
    }
}
