<?php

use Illuminate\Database\Seeder;

class ShoeTables extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //$Tables = DB::select('show tables');
        $Tables = DB::connection()->getDoctrineSchemaManager()->listTableNames();

        dd($Tables);
        // foreach($Tables as $table)
        //     {
        //         echo $table->Tables_in_db_name;
        //     }
    }
}
