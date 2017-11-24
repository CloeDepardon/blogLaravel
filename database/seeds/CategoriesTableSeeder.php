<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->command->info('Disable Foreign Key');
        Schema::disableForeignKeyConstraints();

        $this->command->info('Truncate Foreign Key');
        DB::table('categories')->truncate();

        $this->command->info('Enable foreign key');
        Schema::enableForeignKeyConstraints();

        factory(App\Category::class, 10)->create();
        $this->command->info('Categories seeding completed');
    }
}
