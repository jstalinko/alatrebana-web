<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create();
        
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Administrator',
            'email' => 'admin@alatrebana.com',
            'password' => bcrypt('password123'),

        ]);
        \App\Models\WebSetting::factory()->create([
            'name' => 'Alatrebana',
            'slogan' => 'Al Ahyar Percussion Jepara',
            'domain' => 'alatrebana.com',
            'email' => 'admin@alatrebana.com',
            'phone' => '081234567890',
            'address' => 'Rengging Breo RT 15/03, Rw. 1, Rengging, Kec. Pecangaan, Kabupaten Jepara, Jawa Tengah 59462',
            'gmaps_url' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3962.7539904695086!2d110.71423127593185!3d-6.677371093317795!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e70df33be2f61cf%3A0xb0476f4fcabc222c!2sPUSAT%20HADROH%20AL-AHYAR%20JEPARA!5e0!3m2!1sid!2sid!4v1716135915290!5m2!1sid!2sid',
            'favicon' => $faker->imageUrl(),
            'logo' => $faker->imageUrl(),
            'about' => $faker->text,
            'active' => true
        ]);
        \App\Models\Category::factory(10)->create();
        \App\Models\Product::factory(100)->create();
        \App\Models\Testimonial::factory(10)->create();
       \App\Models\Banner::factory(5)->create();

        $social = [
            'facebook' => 'https://facebook.com',
            'instagram' => 'https://instagram.com',
        ];
        foreach($social as $key => $value) {
            \App\Models\SocialMedia::factory()->create([
                'type' => $key,
                'url' => $value,
                'active' => true
            ]);
        }

    }
}
