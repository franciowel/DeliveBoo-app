<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CategoriesTableSeeder::class);
    }


    //custom function
    protected function getSlug($title) {

        // creo lo slug da salvare aggiungendo tra le parole del titolo "-"
        $slug_to_save = Str::slug($title, '-');

        // salvo lo slug da salvare in una variabile
        $slug_base = $slug_to_save;

        // controllo che lo slug da salvare non esiste gia negli altri product
        $existing_slug_product = User::where('slug', '=', $slug_to_save)->first();

        // creo un counter per
        $counter = 1;

        // finche esiste nel db uno slug uguale a quello da salvare
        while($existing_slug_product) {

            // aggiungo allo slug da salvare '-' alla fine e il numero del counter
            $slug_to_save = $slug_base . '-' . $counter;

            // controllo che lo slug da salvare non esiste gia negli altri product
            $existing_slug_product = User::where('slug', '=', $slug_to_save)->first();

            // aumento di uno il counter
            $counter++;
        }

        // quando non ci sono più slug come il mio, me lo torno
        return $slug_to_save;
    }
}
