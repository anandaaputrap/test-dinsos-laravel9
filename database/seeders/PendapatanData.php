<?php

namespace Database\Seeders;

use App\Models\Belanja;
use App\Models\Pendapatan;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PendapatanData extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pdt = [
            [
                'no_jurnal' => '193901',
                'tgl_jurnal' => Carbon::parse('2022-12-12'),
                'dokumen_sumber' => 'manual',
                'no_dokumen' => '193901',
                'tgl_dokumen' => Carbon::parse('2022-12-12'),
                'uraian' => 'Alhamdulillah'
            ],
            [
                'no_jurnal' => '193902',
                'tgl_jurnal' => Carbon::parse('2022-12-13'),
                'dokumen_sumber' => 'manual',
                'no_dokumen' => '193902',
                'tgl_dokumen' => Carbon::parse('2022-12-13'),
                'uraian' => 'Alhamdulillah'
            ],
        ];

        foreach ($pdt as $key => $value) {
            Pendapatan::create($value);
        }
    }
}
