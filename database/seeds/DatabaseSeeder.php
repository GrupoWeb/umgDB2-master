<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        $Tables = DB::select('show tables');
        //$Tables2 = DB::table('show tables')->select()->get();

        dd($Tables[0]->Tables_in_ejemplo);
        //dd($Tables2);
    }
}
