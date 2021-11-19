<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TblmhsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *php artisan db:seed --TblmhsSeeder
     * @return void
     */
    public function run()
    {
        DB::table('tbl_mhs')->insert([
            'nim' => '12001',
            'namamhs' => 'Puji Septiyana ',
            'jk' => 'P',
            'alamat' => 'Talokwohmojo',
            'kota' => 'Blora',
            'email' => 'puji.01@gmail.com',
        ]);
    }
}
