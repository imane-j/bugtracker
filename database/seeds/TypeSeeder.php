<?php

use Illuminate\Database\Seeder;
use App\Type;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // array of types to populate the database
        $types = [
            [
                'id' => 1,
                'name' => 'Bug'
            ],
            [
                'id' => 2,
                'name' => 'Enhancement'
            ],
            [
                'id' => 3,
                'name' => 'New feature'
            ]
        ];

        foreach ($types as $type) {
            Type::create(array(
                'id' => $type['id'],
                'name' => $type['name']
            ));
        }
    }
}
