<?php

use Illuminate\Database\Seeder;

class EducationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $educations = [
            [
                'name' => 'High School' ,
                'category' => 'Science',
                'sub_category' => 'Physics'
            ],
        ];


        foreach ($educations as $education) {
            \App\Models\Education::firstOrCreate($education);
        }

    }
}
