<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DetailProfileSedeer extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('detail_profile')->insert([
            'id' => '01',
            'address' => 'jember',
            'no_tlp' => '0823333',
            'ttl' => '2021-02-21',
            'foto' => 'png.jpg'
        ]);
    }
}
