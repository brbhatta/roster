<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            'Admin' => true,
            'User' => false,
            'Actor' => false,
            'Speaker' => false,
            'Coder' => false,
            'Someone' => false,
        ];
        $allRoles = collect();

        foreach ($roles as $role => $isInternal) {
            $allRoles->push(\App\Models\Role::firstOrCreate([
                'name' => $role,
                'is_internal' => $isInternal,
            ]));
        }

        factory(\App\Models\User::class, 10)->create()->each(function ($user) use($allRoles){

           $user->roles()->sync([$allRoles->random()->id]);
        });
    }
}
