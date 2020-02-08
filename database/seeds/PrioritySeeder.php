<?php

use Illuminate\Database\Seeder;
use App\Priority;

class PrioritySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // array of priorities to populate the database
        $priorities = [
            [
                'id' => 1,
                'name' => 'Low'
            ],
            [
                'id' => 2,
                'name' => 'Normal'
            ],
            [
                'id' => 3,
                'name' => 'High'
            ]
        ];

        foreach ($priorities as $priority) {
            Priority::create(array(
                'id' => $priority['id'],
                'name' => $priority['name']
            ));
        }
    }
}
