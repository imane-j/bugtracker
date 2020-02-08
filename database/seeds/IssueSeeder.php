<?php

use Illuminate\Database\Seeder;
use App\Issue;

class IssueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // array of issues to populate the database
        $issues = [
            [
                'id' => 1,
                'name' => 'ERD design',
                'description' => 'Create an ERD diagram in order to better understand the database of the hotel booking app',
                'project' => 1,
                'user' => 1,
                'status' => 2,
                'type' => 3,
                'priority' => 3
            ],
            [
                'id' => 2,
                'name' => 'Research which technologies are better suited for the app',
                'description' => 'Do an in depth research of the various programming languages and frameworks that are ideal for this type of app',
                'project' => 1,
                'user' => 2,
                'status' => 2,
                'type' => 3,
                'priority' => 2
            ],
            [
                'id' => 3,
                'name' => 'Design the views',
                'description' => 'Create wireframes for the different views of our chat',
                'project' => 2,
                'user' => 1,
                'status' => 2,
                'type' => 3,
                'priority' => 1
            ],
        ];

        foreach ($issues as $issue) {
            Issue::create(array(
                'id' => $issue['id'],
                'name' => $issue['name'],
                'description' => $issue['description'],
                'project' => $issue['project'],
                'user' => $issue['user'],
                'status' => $issue['status'],
                'type' => $issue['type'],
                'priority' => $issue['priority']
            ));
        }
    }
}
