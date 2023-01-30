<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('primary_categories')->insert([
            [
                'name' => '財布・ケース',
                'sort_order' => 1,
            ],
            [
                'name' => '眼鏡・サングラス',
                'sort_order' => 2,
            ],
            [
                'name' => '革・レザーケア用品',
                'sort_order' => 3,
            ],
        ]);

        DB::table('secondary_categories')->insert([
            [
                'name' => '財布',
                'sort_order' => 1,
                'primary_category_id' => 1,
            ],
            [
                'name' => 'キーケース',
                'sort_order' => 2,
                'primary_category_id' => 1,
            ],
            [
                'name' => '名刺入れ',
                'sort_order' => 3,
                'primary_category_id' => 1,
            ],
            [
                'name' => 'サングラス',
                'sort_order' => 4,
                'primary_category_id' => 2,
            ],
            [
                'name' => '眼鏡',
                'sort_order' => 5,
                'primary_category_id' => 2,
            ],
            [
                'name' => '眼鏡小物',
                'sort_order' => 6,
                'primary_category_id' => 2,
            ],
            
        ]);
    }
}
