<?php

use Illuminate\Database\Seeder;
use App\Project;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Project::create([
            'name' => 'Projecto A',
            'description' => 'Desarrollar un sitio web moderno'
        ]);

        Project::create([
            'name' => 'Projecto B',
            'description' => 'Desarrollar una aplicacion Android'
        ]);




        
    }
}
