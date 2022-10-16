<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            [
                'name' => 'Italiana',
                'category_cover' => 'https://media.discordapp.net/attachments/1022424025974177805/1025332470016639046/pizza-margherita.jpg?width=601&height=400'
            ],
            [
                'name' => 'Asiatica',
                'category_cover' => 'https://media.discordapp.net/attachments/1022424025974177805/1025332469538500619/cuina-giapponese.jpg?width=600&height=400'
            ],
            [
                'name' => 'Messicana',
                'category_cover' => 'https://images-ext-2.discordapp.net/external/ouZBO4jklTiXmx-J-_JRfAg0FbYijI2pSRErM4R-1xA/https/www.viaggiaregratis.eu/wp-content/uploads/2020/11/Cucina-Messicana.webp?width=711&height=400'
            ],
            [
                'name' => 'Francese',
                'category_cover' => 'https://images-ext-1.discordapp.net/external/zuBmOoyRWBoznmQGFRPN8Qm9LSiA6rUXKkDuWuvWHrM/http/www.brindisitg24.it/wp-content/uploads/cucina-francese.jpg?width=711&height=400'
            ],
            [
                'name' => 'Americana',
                'category_cover' => 'https://media.discordapp.net/attachments/1022424025974177805/1025332469794349147/kfc-faxafeni.jpg'
            ],
            [
                'name' => 'Greca',
                'category_cover' => 'https://images-ext-2.discordapp.net/external/6OgOEBPS1ULXxBfbrkGh6mb_bZdwzotXLsrsUtW5Tqg/https/thefoodellers.com/wp-content/uploads/2019/06/Octopus-1024x682.jpg?width=601&height=400'
            ],
            [
                'name' => 'Turca',
                'category_cover' => 'https://media.discordapp.net/attachments/1022424025974177805/1025333841096884284/Kebab.jpg?width=600&height=400'
            ],
            [
                'name' => 'Vegana',
                'category_cover' => 'https://cdn.discordapp.com/attachments/1022424025974177805/1025332717082124340/antipasto-vegano.jpg'
            ],
            [
                'name' => 'Dessert',
                'category_cover' => 'https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ftse4.mm.bing.net%2Fth%3Fid%3DOIP.cSZDIxBQ-MZCzD_ViE31ogHaFj%26pid%3DApi&f=1&ipt=472c9355a2b485ace824017c285502bb52179ffed65690afc369fdeac7063645&ipo=images'
            ],
        ];

        foreach($categories as $category) {
            $new_category = new Category(); 
            $new_category->name = $category['name'];
            $new_category->category_cover = $category['category_cover'];
            $new_category->save();
        }
    }
}
