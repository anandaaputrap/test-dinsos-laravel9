<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\Koreksi;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class KoreksiData extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $krs = [
            [
                'no_jurnal' => '193901',
                'tgl_jurnal' => Carbon::parse('2022-12-12'),
                'dokumen_sumber' => 'manual',
                'no_dokumen' => '193901',
                'tgl_dokumen' => Carbon::parse('2022-12-12'),
                'uraian' => 'Koreksi'
            ],
            [
                'no_jurnal' => '193902',
                'tgl_jurnal' => Carbon::parse('2022-12-13'),
                'dokumen_sumber' => 'manual',
                'no_dokumen' => '193902',
                'tgl_dokumen' => Carbon::parse('2022-12-13'),
                'uraian' => 'Koreksi'
            ],
        ];

        foreach ($krs as $key => $value) {
            Koreksi::create($value);
        }
    }
}
