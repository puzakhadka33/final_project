<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use App\Models\Permission;
use App\Models\UserPart;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        Permission::truncate();
        $items = [
            ['permission' => 'user-access', 'section_id' => 1],
            ['permission' => 'user_part-access', 'section_id' => 2 ],
            ['permission' => 'user_part-add', 'section_id' => 2 ],
            ['permission' => 'user_part-edit', 'section_id' => 2 ],
            ['permission' => 'user_part-view', 'section_id' => 2 ],
            ['permission' => 'user_part-delete', 'section_id' => 2 ],
            ['permission' => 'user_part-action', 'section_id' => 2 ],
            ['permission' => 'permission-access', 'section_id' => 3 ],
            ['permission' => 'permission-add', 'section_id' => 3 ],
            ['permission' => 'permission-edit', 'section_id' => 3 ],
            ['permission' => 'permission-view', 'section_id' => 3 ],
            ['permission' => 'permission-delete', 'section_id' => 3 ],
            ['permission' => 'permission-action', 'section_id' => 3 ],
            ['permission' => 'permission_comp_add', 'section_id' => 4]
        ];

        foreach ($items as $item) {
            Permission::create($item);
        }
        DB::table('user_part_permissions')->truncate();
        $permissions = Permission::all();

        // Populate the pivot table
        UserPart::all()->each(function ($user_part) use ($permissions) { 
            $user_part->permissions()->attach(
                $permissions
            ); 
        });
    }
}

