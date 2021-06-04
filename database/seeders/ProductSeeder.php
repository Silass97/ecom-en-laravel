<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            [
            'name'=>'LG mobile W41pro',
            'price'=>'200',
            'description'=>'A smartphone with 4gb ram and much more feature',
            'category'=>'mobile',
            'gallery'=>'https://www.lg.com/in/images/mobile-phones/md07523391/gallery/LMK610IM-D-01.jpg',
        ],
    
            [
            'name'=>'LG mobile W41plus',
            'price'=>'300',
            'description'=>'A smartphone with 4gb ram 128gb rom and much more feature',
            'category'=>'mobile',
            'gallery'=>'https://www.lg.com/in/images/mobile-phones/md07523371/gallery/LMK610IM-D-01.jpg'
            ],
        
        [
            'name'=>'LG nanocell tv',
            'price'=>'400',
            'description'=>'A news generation tv',
            'category'=>'tv',
            'gallery'=>'https://www.lg.com/in/images/tvs/md07519763/gallery/43NANO79TND-DZ-01.jpg'
        ],


        [
            'name'=>'samsung mobile galaxy A52',
            'price'=>'500',
            'description'=>'A smartphone with 128gb rom and much more feature',
            'category'=>'mobile',
            'gallery'=>'https://images.samsung.com/is/image/samsung/p6pim/africa_fr/sm-a525fzkdxfe/gallery/africa-fr-galaxy-a52-a525-377897-sm-a525fzkdxfe-410259429?$720_576_PNG$'
        ],
    

        [
            'name'=>'samsung mobile galaxy A20 ',
            'price'=>'600',
            'description'=>'A smartphone with 128gb rom and much more feature',
            'category'=>'mobile',
            'gallery'=>'https://images.samsung.com/africa_fr/smartphones/galaxy-s20/galaxy-s20-fe/images/galaxy-s20_fe_infinity-display.jpg'
        ],
    
        [
            'name'=>'samsung tv ',
            'price'=>'500',
            'description'=>'A tv with much more feature',
            'category'=>'mobile',
            'gallery'=>'https://images.samsung.com/is/image/samsung/africa-fr-qled8k-q950ts-qa85q950tsuxke-front--black-278833360?$684_547_PNG$'
        ]
    
        ]
    );
    }
}
