<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ukkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('ukks')->insert([
            'nama' => 'nyot',
            'jurusan' => 'rpl',
            'kelas' => 12,
        ]);
    }
}
