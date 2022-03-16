<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Worker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $insertData = [
            ['name' => 'Akos', 'city' => 'Budapest', 'birthdate' => '1972-05-17', 'salary' => '222222'],
            ['name' => 'Miklos', 'city' => 'Pecel', 'birthdate' => '1996-08-29', 'salary' => '333333'],
            ['name' => 'Petra', 'city' => 'Fot', 'birthdate' => '1983-02-03', 'salary' => '444444'],
            ['name' => 'Szilvia', 'city' => 'Salgotarjan', 'birthdate' => '1967-12-12', 'salary' => '555555'],
            ['name' => 'Karoly', 'city' => 'Miskolc', 'birthdate' => '1966-11-04', 'salary' => '666666'],
        ];

        foreach ($insertData as $workerData) {
            Worker::create($workerData);
        }
    }
}
