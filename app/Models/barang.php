<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class barang extends Model
{
    use HasFactory;
    protected $table = "barangs";
    protected $primaryKey = "id";
    protected $fillable = [
        'nama',
        'jenis',
        'harga',
        'alamat',
        'deskripsi',
        'gambar',
        'penjual',
        'user_id'
    ];
    public function allData()
    {
        return barang::simplePaginate(6);
    }
    public function latestProduct()
    {
        return barang::orderBy('created_at', 'DESC')->get()->take(6);
    }
    public function daftarJual()
    {
        return DB::table('barangs')->where('penjual', Auth::user()->username)->get();
    }
    public function detailP($id)
    {
        return DB::table('barangs')->where('id', $id)->first();
    }
}
