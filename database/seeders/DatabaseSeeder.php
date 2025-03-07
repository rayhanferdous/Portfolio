<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Setting::create([
            "logo_header" => "logo.png",
            "logo_footer" => "logo.png",
            "footer_logo_text" => "Yasser Elgammal",
            'fb_url' => 'https://www.facebook.com/yasser.elgammal/',
            "skype_url" => 'https://join.skype.com/invite/eqZ2Z2Z2Z2Z2',
            "linkedin_url" => 'https://www.linkedin.com/in/elgammal/',
            'telegram_url' => 'https://t.me/yasserelgammal',
            'whatsapp_url' => 'https://wa.me/201000000000',
            'contact_mail' => 'contact@mail.com',
            'menu_link' => '[]'
        ]);
        // \App\Models\User::factory(1)->create();

        \App\Models\User::factory()->create([
            'name' => 'Profile User',
            'email' => 'test@example.com',
            'password' => password_hash('password', PASSWORD_DEFAULT),
        ]);
    }
}
