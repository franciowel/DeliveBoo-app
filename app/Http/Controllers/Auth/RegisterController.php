<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'address' => ['required', 'string', 'max:255'],
            'VAT_number' => ['required', 'string', 'max:11', 'min:11','unique:users'],
            'user_cover' => ['mimes:jpeg,jpg,png', 'max:1024'],
            'categories' => ['required'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     * 
     */
    protected function create(array $data)
    {      

        if(isset($data['user_cover'])){

            $img_path = Storage::put('user-covers', $data['user_cover']);

            $user = User::create([
                'name' => $data['name'],
                'email' => $data['email'],
                'address' => $data['address'],
                'VAT_number' => $data['VAT_number'],
                'slug' => $this->getSlug($data['name']),
                'user_cover' => $img_path,
                'password' => Hash::make($data['password']),
            ]);
        } else {
            $user = User::create([
                'name' => $data['name'],
                'email' => $data['email'],
                'address' => $data['address'],
                'VAT_number' => $data['VAT_number'],
                'slug' => $this->getSlug($data['name']),
                'password' => Hash::make($data['password']),
            ]);
        }
            
        $user->categories()->sync($data['categories']);

        return $user;
    }

    public function showRegistrationForm()
    {
        $categories = \App\Category::all();
        $data = [
            'categories' => $categories
        ];
        return view('auth.register', $data);
    }

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
