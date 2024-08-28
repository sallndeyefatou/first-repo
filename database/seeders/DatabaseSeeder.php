<?php

namespace Database\Seeders;

<<<<<<< HEAD
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
=======
>>>>>>> e91f59c283c6219770903b857baa0eadd074c946
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
<<<<<<< HEAD
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
=======
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
>>>>>>> e91f59c283c6219770903b857baa0eadd074c946
    }
}
