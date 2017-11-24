<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {

    $this->command->info('Disable Foreign Key');
    // Permet de désactiver les clés étrangères
    Schema::disableForeignKeyConstraints();

    $this->command->info('Truncate Foreign Key');
    DB::table('users')->truncate();
    Schema::disableForeignKeyConstraints();

    DB::table('users')->insert([
      'firstname' => 'admin',
      'lastname' => 'admin',
      'email' => 'admin@gmail.com',
      'password' => bcrypt('0000'),
      'status' => 1,
    ]);

    $this->command->info('User admin create with password 0000');
    factory(App\User::class, 50)->create();
    $this->command->info('Users seeding completed');

    }
}
