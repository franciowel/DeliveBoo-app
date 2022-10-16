<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Category;
use App\User;

class CategoryController extends Controller
{
    public function index() {

    $categories = Category::all();

    foreach($categories as $user) {
        if($user->user_cover) {
            $user->user_cover = asset('storage/' . $user->user_cover);
        }
    }

    $data = [
        'success' => true,
        'results' => $categories
    ];

    return response()->json($data);
    
    }

    public function showSingleCategory($id) {
        $singleCategory = Category::findOrFail($id)->users()->with(['categories'])->get();

        if($singleCategory) {
            $data = [
                'success' => true,
                'results' => $singleCategory
            ];
        } else {
            $data = [
                'success' => false,
            ];
        }
        
        return response()->json($data);
    }

    public function getFilteredCategories(Request $request){

        //recupero la lista degli id  dalla query
        $ids = $request->input('list_of_ids');
        //li riformatto ed estraggo alcuni dati che mi servono per dopo
        $ids_Where = str_replace('[','(',$request->input('list_of_ids'));
        $ids_Where = str_replace(']',')',$ids_Where);

        //converto la stringa in array
        $ids = explode(',', $ids);
        //calcolo la lunghezza dell'array
        $arrayLength = count($ids);

        //raw SQL 
        $raw_query = '
        SELECT users.id AS user_id, users.name AS user_name, users.address AS user_address, users.slug AS user_slug, users.user_cover AS user_cover
        FROM users 
        JOIN category_user 
        ON users.id = category_user.user_id 
        JOIN categories 
        ON categories.id = category_user.category_id
        WHERE category_id IN (' . $ids_Where . ')
        GROUP BY users.id
        HAVING COUNT(category_id) = ' . $arrayLength ;

        //la passo a Laravel
        $users = DB::select($raw_query);

        //dd($users);
        foreach($users as $user){
            //Recupero l'id di ogni utente
            $user_id = $user->user_id;
            
            //recupero le categorie di ogni utente
            $category_query = '
                SELECT categories.name
                FROM categories
                JOIN category_user
                ON categories.id = category_user.category_id
                WHERE category_user.user_id = ' . $user_id;
            
            $user_categories = DB::select($category_query);
            //aggiungo l'elenco delle categorie all'utente
            $user->user_categories = $user_categories;
        }

        if($users) {
            $data = [
                'success' => true,
                'results' => $users
            ];
        } else {
            $data = [
                'success' => false,
            ];
        }
        
        return response()->json($data);
    }
}