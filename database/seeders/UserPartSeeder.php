<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use App\Models\UserPart;
class UserPartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        UserPart::truncate();
        $items = [
            ['id' => 1, 'user_part' => 'admin'],
            ['id' => 2, 'user_part' => 'employee'],
            
        ];
        //inserts data in items to database
        foreach($items as $item)
        {
            UserPart::create($item);
        }
    }
}
