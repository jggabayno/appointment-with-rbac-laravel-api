<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Carbon\Carbon;
use App\Models\Appointment;

class AppointmentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $currentTime = Carbon::now();

        $appointments = [
            [
                'employee_id' => 2,
                'client_id' => 3,
                'comments' => 'This is first appointment',
                 "start_time" => '9:00 AM',
                "finish_time" => '6:00 PM',
                'created_at' => $currentTime->toDateTimeString(),
                'updated_at' => $currentTime->toDateTimeString(),
            ],
            [
                'employee_id' => 2,
                'client_id' => 3,
                'comments' => 'This is second appointment',
                "start_time" => '9:00 AM',
                "finish_time" => '6:00 PM',
                'created_at' => $currentTime->toDateTimeString(),
                'updated_at' => $currentTime->toDateTimeString(),
            ]
        ];


        foreach($appointments as $appointment) {
            Appointment::create([
                'employee_id' => $appointment['employee_id'],
                'client_id' => $appointment['client_id'],
                'comments' => $appointment['comments'],
                'start_time' => $appointment['start_time'],
                'finish_time' => $appointment['finish_time'],
                'created_at' => $appointment['created_at'],
                'updated_at' => $appointment['updated_at'],
            ]);
        }
    }
}
