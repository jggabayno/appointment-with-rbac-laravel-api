<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\RoleAccess;

class RoleAccessTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        RoleAccess::truncate();

        $employeeAccesses = [
            [
                "portal" => "employee",
                "feature" => "working hours",
                "access" => [
                    ["type" => "view", "label" => "View"],
                    ["type" => "create", "label" => "Create"],
                    ["type" => "edit", "label" => "Edit"],
                    ["type" => "update", "label" => "Update"],
                ]
            ],
            [
                "portal" => "employee",
                "feature" => "appointments",
                "access" => [
                    ["type" => "view", "label" => "View"],
                    ["type" => "create", "label" => "Create"],
                    ["type" => "edit", "label" => "Edit"],
                    ["type" => "update", "label" => "Update"],
                ]
            ],
        ];

        // $clientAccesses = [
        //     [
        //         "portal" => "client",
        //         "feature" => "schedule",
        //         "access" => [
        //             ["type" => "view", "label" => "View"],
        //             ["type" => "create", "label" => "Create"],
        //             ["type" => "edit", "label" => "Edit"],
        //         ]
        //     ]
        // ];

        foreach ($employeeAccesses as $access) {
            RoleAccess::create($access);
        }

        // foreach ($clientAccesses as $access) {
        //     RoleAccess::create($access);
        // }

    }
}
