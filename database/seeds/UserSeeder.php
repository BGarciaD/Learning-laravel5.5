<?php

use App\Models\User;
use App\Models\Profession;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // SQL Select Query
        // $profession = DB::select('SELECT id FROM professions WHERE title = ?', ['Full-Stack Developer']);
        //$profession = DB::table('professions')->select('id')->first();
        //$profession = DB::table('professions')->select('id')->where('title', '=', 'Full-Stack Developer')->first();
        /* Using Query Builder
            $profession = DB::table('professions')
            ->where('title', 'Full-Stack Developer')
            ->value('id'); */
        $profession = Profession::where('title', 'Full-Stack Developer')
            ->value('id');
        // Prints the result    
        //dd($profession);

        User::create([
            'name' => 'Rodolfo Chiquilicuatre',
            'email' => 'fuckingmasteroftheuniverse@god.com',
            'password' => bcrypt('laravel'),
            //'profession_id' => $profession[0]->id
            //'profession_id' => $profession->first()->id
            //'profession_id' => $profession->id
            'profession_id' => $profession
        ]);
    }
}
