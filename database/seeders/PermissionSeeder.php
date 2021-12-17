<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Permission = [
            [
                'id' => 1,
                'name' => 'user_access'
            ],
            [
                'id' => 2,
                'name' => 'product_access'
            ]
        ];
        Permission::insert($Permission);
    }
}
