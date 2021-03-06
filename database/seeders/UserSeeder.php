<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        User::truncate();
        $items = [
            [
                'name'=>'admin', 
                'email' => 'admin@admin.com', 
                'password' => bcrypt('hello123'), 
                'user_part_id' => 1,
                
                ]
        ];

        foreach($items as $item){
            User::create($item);
        }
    }
}
