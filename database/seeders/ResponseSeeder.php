<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Response;
use App\User;
use Illuminate\Support\Str;

class ResponseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //factory(App\Response::class, 10)->create();
        $response = Response::factory()->count(10)->create();
        /*$user = new User();
        $response->account()->associate($user);
        $response->save();
        /*$response->associate($user);*/

       /* $response = Response::join('users', 'users.id', '=', 'responses.id')
       ->select('responses.*')
       ->get();*/
       
    }
}
