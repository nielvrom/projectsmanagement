<?php

use Illuminate\Database\Seeder;

// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;

class ProjectsTableSeeder extends Seeder
{
    public function run()
    {
        // Uncomment the below to wipe the table clean before populating
        DB::table('projects')->delete();

        $projects = array(
            ['id' => 1, 'name' => 'Project 1', 'slug' => 'project-1'],
            ['id' => 2, 'name' => 'Project 2', 'slug' => 'project-2'],
            ['id' => 3, 'name' => 'Project 3', 'slug' => 'project-3'],
        );

        // Uncomment the below to run the seeder
        DB::table('projects')->insert($projects);
    }
}
