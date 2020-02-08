<?php

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
        // $this->call(UsersTableSeeder::class);

        $this->call(IssueSeeder::class);
        $this->call(PrioritySeeder::class);
        $this->call(ProjectSeeder::class);
        $this->call(StatusSeeder::class);
        $this->call(TypeSeeder::class);
        $this->call(UserSeeder::class);
    }
}
