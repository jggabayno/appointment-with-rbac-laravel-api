<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Carbon\Carbon;
use App\Models\WorkingHour;

class WorkingHourTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $currentTime = Carbon::now();

        $workinghours = [
            [
                'employee_id' => 2,
                "date" => $currentTime->toDateString(),
                "start_time" => '9:00 AM',
                "finish_time" => '6:00 PM',
                'created_at' => $currentTime->toDateTimeString(),
                'updated_at' => $currentTime->toDateTimeString(),
            ]
        ];

        foreach($workinghours as $workinghour) {
            WorkingHour::create([
                'employee_id' => $workinghour['employee_id'],
                'date' => $workinghour['date'],
                'start_time' => $workinghour['start_time'],
                'finish_time' => $workinghour['finish_time'],
                'created_at' => $workinghour['created_at'],
                'updated_at' => $workinghour['updated_at'],
            ]);
        }
    }
}
