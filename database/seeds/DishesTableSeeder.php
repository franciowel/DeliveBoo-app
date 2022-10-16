<?php

use Illuminate\Database\Seeder;
use App\Admin\Dish;

class DishesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dishes = [
            // ITALIANA
            [
                'name' => 'Capricciosa',
                'description' => 'La pizza capricciosa è una pizza tipica della cucina italiana caratterizzata da un condimento di pomodoro, mozzarella, prosciutto cotto, olive verdi e nere, e carciofini e spesso uova.',
                'ingredients' => 'mozzarella, carciofi, funghetti, uova, olive, prosciutto cotto, olio, sale, pepe e pomodoro',
                'price' => 8.00,
                'available' => 1,
                'dish_cover' => null,
                'user_id' => 3,
            ],
            [
                'name' => 'Bolognese',
                'description' => 'La pizza capricciosa è una pizza tipica della cucina italiana caratterizzata da un condimento di mortadella, burrata, granella di Pistacchio e glassa balsamica.',
                'ingredients' => 'mortadella, burrata, granella di Pistacchio, glassa balsamica',
                'price' => 9.00,
                'available' => 1,
                'dish_cover' => null,
                'user_id' => 3,
            ],
            [
                'name' => 'Capocollo e Stracciatella',
                'description' => 'La pizza Capocollo e Stracciatella è una pizza tipica della cucina italiana caratterizzata da un condimento di mozzarella fiordilatte , capocollo, stracciatella, pomodori secchi sott’olio e noci.',
                'ingredients' => 'mozzarella fiordilatte , capocollo, stracciatella, pomodori secchi sott’olio e noci.',
                'price' => 10.00,
                'available' => 1,
                'dish_cover' => null,
                'user_id' => 3,
            ],
            [
                'name' => 'Diavola',
                'description' => 'La pizza diavola è una pizza tipica della cucina italiana caratterizzata da un condimento di mozzarella fiordilatte e salame piccante',
                'ingredients' => 'mozzarella fiordilatte , salame piccante, e pomodoro.',
                'price' => 6.00,
                'available' => 1,
                'dish_cover' => null,
                'user_id' => 3,
            ],
            [
                'name' => 'Margherita',
                'description' => 'La pizza margherita è una pizza tipica della cucina italiana caratterizzata da un semplicissimo condimento di mozzarella fiordilatte e pomodoro',
                'ingredients' => 'mozzarella fiordilatte  e pomodoro.',
                'price' => 4.50,
                'available' => 1,
                'dish_cover' => null,
                'user_id' => 3,
            ],
            // AMERICANA
            [
                'name' => 'Patatine Fritte Dolci',
                'description' => 'Le Patate Dolci Fritte sono una deliziosa variante delle classiche Patatine Fritte che si prepara utilizzando le Patate Americane.',
                'ingredients' => 'patatata dolce e olio',
                'price' => 5.00,
                'available' => 1,
                'dish_cover' => null,
                'user_id' => 1,
            ],
            [
                'name' => 'Polletti Fritti',
                'description' => 'Gustoso pollo fritto in stile Kentacki.',
                'ingredients' => 'mortadella, burrata, granella di Pistacchio, glassa balsamica',
                'price' => 11.00,
                'available' => 1,
                'dish_cover' => null,
                'user_id' => 1,
            ],
            [
                'name' => 'Il Porchissimo',
                'description' => 'Un gustoso hamburger da 250g con sopra bacon e una montagna di pulled pork avvolto da una gustosa salsa BBQ il tutto dentro un Bun artigianale.',
                'ingredients' => 'hamburger, bacon, pulled pork, salsa BBQ.',
                'price' => 15.00,
                'available' => 1,
                'dish_cover' => null,
                'user_id' => 1,
            ],
            [
                'name' => 'The Double',
                'description' => 'Un gustoso hamburger composto da 2 patty di carne da 250gr, con doppio stato di bacon, doppio stato di cheddar, doppio strato di salsa burger e insalatina rinforzante.',
                'ingredients' => 'hamburger, bacon, cheddar, salsa burger sott’olio e insalata.',
                'price' => 18.00,
                'available' => 1,
                'dish_cover' => null,
                'user_id' => 1,
            ],
            [
                'name' => 'Il Classicone',
                'description' => 'Un gustoso hamburger da 250gr con bacon, salsa cheddar, pomodori, insalata e salsa burger.',
                'ingredients' => 'hamburger, bacon, salsa cheddar, pomodori, salsa burger e insalata.',
                'price' => 13.00,
                'available' => 1,
                'dish_cover' => null,
                'user_id' => 1,
            ],
            // ASIATICA
            [
                'name' => 'Nigiri',
                'description' => '3pz di pallette di riso con appogiato sopra un pezzo di tonno e 3pz di pallette di riso con appogiato sopra un pezzo di salmone.',
                'ingredients' => 'salmone, tonno, alga e riso',
                'price' => 8,
                'available' => 1,
                'dish_cover' => null,
                'user_id' => 2,
            ],
            [
                'name' => 'Onigiri',
                'description' => '3 pz di triangolini di riso con cuore di tonno scottato.',
                'ingredients' => 'alga, riso e tonno.',
                'price' => 11,
                'available' => 1,
                'dish_cover' => null,
                'user_id' => 2,
            ],
            [
                'name' => 'Sashimi',
                'description' => '4pz si salmone abbatutto servito con salsa di soia.',
                'ingredients' => 'salmone e salsa di soia.',
                'price' => 8,
                'available' => 1,
                'dish_cover' => null,
                'user_id' => 2,
            ],
            [
                'name' => 'Sashimi Special',
                'description' => '5pz di salmone abbatutto servito con salsa di soia e semi di sesamo.',
                'ingredients' => ' di .',
                'price' => 12,
                'available' => 1,
                'dish_cover' => null,
                'user_id' => 2,
            ],
            [
                'name' => 'Temaki',
                'description' => 'Un cono di alga rimepito di riso condito con vari ingredienti.',
                'ingredients' => 'salmone crudo, alga nori, cetriolo, riso, aceto di riso, sale, zucchero.',
                'price' => 8,
                'available' => 1,
                'dish_cover' => null,
                'user_id' => 2,
            ],
            // DESSERT
            [
                'name' => 'Torta di mele',
                'description' => 'Classica torta di mele.',
                'ingredients' => 'uova, burro, zucchero a velo e mela.',
                'price' => 10,
                'available' => 1,
                'dish_cover' => null,
                'user_id' => 4,
            ],
            [
                'name' => 'Mille Creps',
                'description' => 'Millefoglie con crep chantilly.',
                'ingredients' => 'uova, burro, e crema chantilly.',
                'price' => 6,
                'available' => 1,
                'dish_cover' => null,
                'user_id' => 4,
            ],
            [
                'name' => 'Millefoglie',
                'description' => 'è un dolce tipico della pasticceria francese; composta da tre strati di Pasta sfoglia che si alternano a due strati di Crema pasticcera..',
                'ingredients' => ' uova, latte, vaniglia e panna.',
                'price' => 3,
                'available' => 1,
                'dish_cover' => null,
                'user_id' => 4,
            ],
            [
                'name' => 'Muffin',
                'description' => '4 muffin alla vaniglia con goccie di cioccolato fondente.',
                'ingredients' => 'burro, zucchero, uova, cioccolato fondente e vaniglia',
                'price' => 5,
                'available' => 1,
                'dish_cover' => null,
                'user_id' => 4,
            ],
            [
                'name' => '40 fetta a latte con poletto di rinforzo',
                'description' => '40 fetta a latte con poletto di rinforzo.',
                'ingredients' => '40 fetta a latte con poletto di rinforzo',
                'price' => 0.00000001,
                'available' => 1,
                'dish_cover' => null,
                'user_id' => 4,
            ],
            // VEGANA
            [
                'name' => 'Hummus di ceci e parpika',
                'description' => 'Hummus di ceci con spolverata di parika forte.',
                'ingredients' => 'vegetali.',
                'price' => 2,
                'available' => 1,
                'dish_cover' => null,
                'user_id' => 5,
            ],
            [
                'name' => 'Veggie burger',
                'description' => 'Hamburger di quinoa.',
                'ingredients' => 'vegetali.',
                'price' => 5,
                'available' => 1,
                'dish_cover' => null,
                'user_id' => 5,
            ],
            [
                'name' => 'Tortino del contadino',
                'description' => 'Torta salata con patate e cipolle.',
                'ingredients' => 'vegetali.',
                'price' => 7,
                'available' => 1,
                'dish_cover' => null,
                'user_id' => 5,
            ],
            [
                'name' => 'Zuccotti',
                'description' => 'zucca riempita con verdure miste.',
                'ingredients' => 'paparoni, pomodori, zucchine e carote',
                'price' => 3,
                'available' => 1,
                'dish_cover' => null,
                'user_id' => 5,
            ],
            [
                'name' => 'Crespellina',
                'description' => 'Crespellina di ceci.',
                'ingredients' => 'ceci, pomodori secchi, olive e bietola',
                'price' => 4,
                'available' => 1,
                'dish_cover' => null,
                'user_id' => 5,
            ],
            // GRECA
            [
                'name' => 'Saganaki',
                'description' => 'quadrato di groviera saltato in padella.',
                'ingredients' => 'groviera.',
                'price' => 2,
                'available' => 1,
                'dish_cover' => null,
                'user_id' => 6,
            ],
            [
                'name' => 'Souvlaki',
                'description' => 'Speidini di carne.',
                'ingredients' => 'agnello.',
                'price' => 5,
                'available' => 1,
                'dish_cover' => null,
                'user_id' => 6,
            ],
            [
                'name' => 'Polpette di zucca',
                'description' => 'Mega buonissime polpette di zucca.',
                'ingredients' => 'zucca.',
                'price' => 5,
                'available' => 1,
                'dish_cover' => null,
                'user_id' => 6,
            ],
            [
                'name' => 'Moussaka',
                'description' => 'Una parmigiana che non ci ha creduto abbastanza.',
                'ingredients' => 'melanzane, carne macinata e patate',
                'price' => 4,
                'available' => 1,
                'dish_cover' => null,
                'user_id' => 6,
            ],
            [
                'name' => 'Pita',
                'description' => 'piadina con carne cipolla e patate firtte.',
                'ingredients' => 'carne di maiale, pomodoro e cipolla',
                'price' => 5,
                'available' => 1,
                'dish_cover' => null,
                'user_id' => 6,
            ],
            // TURCA
            [
                'name' => 'Kebab Piadina',
                'description' => 'Piadina con carne, insalata, pomodori, salspa piccante e salsa bianca.',
                'ingredients' => 'carne, insalata, salsa bianca.',
                'price' => 5,
                'available' => 1,
                'dish_cover' => null,
                'user_id' => 8,
            ],
            [
                'name' => 'Kebab Panino',
                'description' => 'Panino con carne, insalata, pomodori, salspa piccante e salsa bianca.',
                'ingredients' => 'carne, insalata, salsa bianca.',
                'price' => 5,
                'available' => 1,
                'dish_cover' => null,
                'user_id' => 8,
            ],
            [
                'name' => 'Patatine Fritte',
                'description' => 'Patatine fritte con sale.',
                'ingredients' => 'patata e sale.',
                'price' => 2.50,
                'available' => 1,
                'dish_cover' => null,
                'user_id' => 8,
            ],
            [
                'name' => 'Pizza kebab',
                'description' => 'Pizza ricoperta con mozzarella e carne di kebab.',
                'ingredients' => 'carne e mozzarella',
                'price' => 5,
                'available' => 1,
                'dish_cover' => null,
                'user_id' => 8,
            ],
            // MESSICANA
            [
                'name' => 'Burrito',
                'description' => 'Piadina con carne, insalata, pomodori, riso.',
                'ingredients' => 'carne, insalata, pomodoru.',
                'price' => 5,
                'available' => 1,
                'dish_cover' => null,
                'user_id' => 7,
            ],
            [
                'name' => 'Churros',
                'description' => 'Doloce fritto ricoparto di zucchero.',
                'ingredients' => 'zucchero e burro.',
                'price' => 2,
                'available' => 1,
                'dish_cover' => null,
                'user_id' => 7,
            ],
            [
                'name' => 'Nachos',
                'description' => 'Patatine caratteristiche messicane.',
                'ingredients' => 'sale.',
                'price' => 2.50,
                'available' => 1,
                'dish_cover' => null,
                'user_id' => 7,
            ],
            [
                'name' => 'Tacos',
                'description' => 'parte di piadina croccante con insalata, carne e pomodori',
                'ingredients' => 'carne e mozzarella',
                'price' => 5,
                'available' => 1,
                'dish_cover' => null,
                'user_id' => 7,
            ],
            // FRANCESE
            [
                'name' => 'Omelette',
                'description' => "that's disgusting.",
                'ingredients' => 'uova sbattute.',
                'price' => 0,
                'available' => 1,
                'dish_cover' => null,
                'user_id' => 9,
            ],
            [
                'name' => 'Macarons',
                'description' => "that's disgusting.",
                'ingredients' => 'base di meringhe, farina di mandorle, e zucchero.',
                'price' => 0,
                'available' => 1,
                'dish_cover' => null,
                'user_id' => 9,
            ],
            [
                'name' => 'Fonduta di formaggio',
                'description' => "that's disgusting.",
                'ingredients' => 'formaggio',
                'price' => 0,
                'available' => 1,
                'dish_cover' => null,
                'user_id' => 9,
            ],
            [
                'name' => 'Escargo',
                'description' => "that's disgusting.",
                'ingredients' => 'lumcache.',
                'price' => 0,
                'available' => 1,
                'dish_cover' => null,
                'user_id' => 9,
            ],
        ];

        foreach($dishes as $dish) {

            $new_dish = new Dish();

            $new_dish->name = $dish['name'];
            $new_dish->description = $dish['description'];
            $new_dish->ingredients = $dish['ingredients'];
            $new_dish->price = $dish['price'];
            $new_dish->available = $dish['available'];
            $new_dish->dish_cover = $dish['dish_cover'];
            $new_dish->user_id = $dish['user_id'];
            
            $new_dish->save();
        }
    }
}
