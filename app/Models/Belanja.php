<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Belanja extends Model
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $table = "Pendapatan";
    protected $guarded = ['id'];
    protected $fillable = [
        'no_jurnal',
        'tgl_jurnal',
        'dokumen_sumber',
        'no_dokumen',
        'tgl_dokumen',
        'uraian',
    ];
}
