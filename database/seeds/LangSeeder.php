<?php

use Illuminate\Database\Seeder;

class LangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $langs = [
            'np' => 'Nepali',
            'en' => 'English',
        ];

        foreach($langs as $code => $lang) {

            \App\Models\Language::firstOrCreate([
                'iso_code' => $code,
                'name' => $lang
            ]);
        }

    }
}
