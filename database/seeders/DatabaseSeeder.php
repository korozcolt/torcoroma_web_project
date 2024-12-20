<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //DepartmentSeeder, SLASeeder and last SiteSeeder
        $this->call([
            //DepartmentSeeder::class,
            //SLASeeder::class,
            HomePageSeeder::class,
        ]);
    }
}
