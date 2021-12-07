<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Section;
use DB;

class SectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        Section::truncate();
        $items = [
            ['id' => 1, 'section' => 'User Management'],
            ['id' => 2, 'section' => 'user_Part Management'],
            ['id' => 3, 'section' => 'Permission'],
            ['id' => 4, 'section' => 'section'],
        ];

        foreach($items as $item)
        {
            Section::create($item);
        }
    }

}
