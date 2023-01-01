<?php

namespace Database\Seeders;

use App\Models\Belanja;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BelanjaData extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $blj = [
            [
                'no_jurnal' => '193901',
                'tgl_jurnal' => Carbon::parse('2022-12-12'),
                'dokumen_sumber' => 'manual',
                'no_dokumen' => '193901',
                'tgl_dokumen' => Carbon::parse('2022-12-12'),
                'uraian' => 'Belanja'
            ],
            [
                'no_jurnal' => '193902',
                'tgl_jurnal' => Carbon::parse('2022-12-13'),
                'dokumen_sumber' => 'manual',
                'no_dokumen' => '193902',
                'tgl_dokumen' => Carbon::parse('2022-12-13'),
                'uraian' => 'Belanja'
            ],
        ];

        foreach ($blj as $key => $value) {
            Belanja::create($value);
        }
    }
}
