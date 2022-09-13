<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        //
        Permission::query()->create([
            'permission' => 'Create',
        ]);

        Permission::query()->create([
            'permission' => 'Update',
        ]);

        Permission::query()->create([
            'permission' => 'Delete',
        ]);

        Permission::query()->create([
            'permission' => 'View',
        ]);
    }
}
