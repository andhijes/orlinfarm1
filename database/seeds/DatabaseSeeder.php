<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $user = factory(App\User::class)->create([
            'name' => 'Andhika Kartika Rahayu',
            'email' => 'ankarayu@gmail.com',
            'password' => bcrypt('andhika123'),
        ]);
    }
}
