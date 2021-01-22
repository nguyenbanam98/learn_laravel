<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Subject;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $data = [
            [
                'id' => 1,
                'name' => 'Front End',
                'userId' => 1,
                'created_at' => now(),
            ],
            [
                'id' => 2,
                'name' => 'Back End',
                'userId' => 1,
                'created_at' => now(),
            ],
            [
                'id' => 3,
                'name' => 'Fullstack',
                'userId' => 1,
                'created_at' => now(),
            ],
            [
                'id' => 4,
                'name' => 'Python',
                'userId' => 2,
                'created_at' => now(),
            ],
            [
                'id' => 5,
                'name' => 'Golang',
                'userId' => 2,
                'created_at' => now(),
            ]
        ];
        Subject::insert($data);
    }
}
