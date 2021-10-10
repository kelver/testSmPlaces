<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InterestSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $arrInterest = [
            'Ler',
            'Comprar',
            'Vender',
            'Lido',
            'Comprado',
            'Vendido',
        ];
        foreach ($arrInterest as $i){
            DB::table('type_interest')->insert([
                'texto' => $i
            ]);
        }
    }
}
