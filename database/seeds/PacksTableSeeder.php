<?php

use Illuminate\Database\Seeder;
use App\Pack;

class PacksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=1; $i <= 51; $i++){
            $newPack = new Pack();
            $newPack->name = 'pacchetto N°' . $i;
            $newPack->from = array_rand(array('Roma','Milano','Tokio','NewYork','Mosca'),1);
            $newPack->to = array_rand(array('Roma','Milano','Tokio','NewYork','Mosca'),1);
            $newPack->price = rand(1,65535);
            $newPack->n_travelers = rand(1,10);
            $newPack->description = 'loremLorem ipsum dolor, sit amet consectetur adipisicing elit. Harum suscipit ratione illum mollitia dolores labore quae voluptatibus tempora nemo maiores quisquam quos molestiae consequatur vero, nihil, voluptatem animi adipisci obcaecati?';
            $newPack->date_from = '2021/01/01';
            $newPack->date_to = '2021/05/23';
            $newPack->save();
            

            
        }
    }
}
