<?php

class ItemsTableSeeder extends Seeder {
    
public function run() {
        DB::table('items')->delete();
        
        $items = array(
            array(
                'owner_id' => 1,
                'name' => 'Finish Todo app',
                'done' => false
        ),
            array(
                'owner_id' => 1,
                'name' => 'Be Smart :)',
                'done' => true
                ),
            array(
                'owner_id' => 1,
                'name' => 'Eat soup with Michal',
                'done' => false
                ),
    );
        
        DB::table('items')->insert($items);
    }
}