<?php

use Illuminate\Database\Seeder;

use App\User;
use Faker\Generator as Faker;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $user = new User;
        $user->name = "Cristian Buoncompagni";
        $user->email = "c.buoncompagni.98@gmail.com";
        $user->password = Hash::make('password');
        $user->save();

        for($i=0; $i<4; $i++) {
            $user = new User;
            $user->name = $faker->name();
            $user->email = $faker->email();
            $user->password = Hash::make('password');
            $user->save();
        }
    }
}
