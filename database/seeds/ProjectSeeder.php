<?php

use Illuminate\Database\Seeder;
use App\Project;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // array of projects to populate the database
        $projects = [
            [
                'id' => 1,
                'name' => 'Hotel booking application',
                'description' => 'A web app that allows you to easily book a hotel room in the area that you\'re going to',
                'status' => 1
            ],
            [
                'id' => 2,
                'name' => 'React chatroom',
                'description' => 'This chatroom, similar to slack, is going to allow our clients to chat on the website',
                'status' => 3
            ]
        ];

        foreach ($projects as $project) {
            Project::create(array(
                'id' => $project['id'],
                'name' => $project['name'],
                'description' => $project['description'],
                'status' => $project['status']
            ));
        }
    }
}
