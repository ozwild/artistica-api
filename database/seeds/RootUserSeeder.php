<?php

use Illuminate\Database\Seeder;
use App\User;

class RootUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $appName = config('app.name');
        User::create([
            'name' => config('app.root.last_name', 'System'),
            'email' => config('app.root.email', "system@{$appName}"),
            'password' => config('app.root.password', Hash::make('123456789'))
        ]);

        //@todo add root role

    }
}
