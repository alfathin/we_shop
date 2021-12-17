<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Role = [
            [
                'id' => 1,
                'name' => 'admin'
            ],
            [
                'id' => 2,
                'name' => 'seller'
            ],
            [
                'id' => 3,
                'name' => 'supplier'
            ]
        ];
        Role::insert($Role);
    }
}
