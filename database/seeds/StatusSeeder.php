<?php

use Illuminate\Database\Seeder;
use App\Status;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // array of statuses to populate the database
        $statuses = [
            [
                'id' => 1,
                'name' => 'New'
            ],
            [
                'id' => 2,
                'name' => 'In progress'
            ],
            [
                'id' => 3,
                'name' => 'To test'
            ],
            [
                'id' => 4,
                'name' => 'Finished'
            ],
            [
                'id' => 5,
                'name' => 'Need more information'
            ],
            [
                'id' => 6,
                'name' => 'Rejected'
            ],
            [
                'id' => 7,
                'name' => 'Postponed'
            ]
        ];

        foreach ($statuses as $status) {
            Status::create(array(
                'id' => $status['id'],
                'name' => $status['name']
            ));
        }
    }
}
