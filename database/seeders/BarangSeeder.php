<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'Kode_Barang' => 1,
                'Nama_Barang' => 'Indomie 25',
                'Kategori_Barang' => 'Makanan',
                'Harga' => '3000',
                'Qty' => '100'
            ],
            [
                'Kode_Barang' => 2,
                'Nama_Barang' => 'Pocari Sweet',
                'Kategori_Barang' => 'Minuman',
                'Harga' => '6000',
                'Qty' => '150'
            ],
            [
                'Kode_Barang' => 3,
                'Nama_Barang' => 'Silverqueen',
                'Kategori_Barang' => 'Snack',
                'Harga' => '12500',
                'Qty' => '45'
            ],
            [
                'Kode_Barang' => 4,
                'Nama_Barang' => 'Buku tulis',
                'Kategori_Barang' => 'ATK',
                'Harga' => '4000',
                'Qty' => '80'
            ],
            [
                'Kode_Barang' => 5,
                'Nama_Barang' => 'Nugget',
                'Kategori_Barang' => 'Makanan',
                'Harga' => '24000',
                'Qty' => '85'
            ],
            [
                'Kode_Barang' => 6,
                'Nama_Barang' => 'Nu Green Tea',
                'Kategori_Barang' => 'Minuman',
                'Harga' => '6000',
                'Qty' => '85'
            ],
            [
                'Kode_Barang' => 7,
                'Nama_Barang' => 'Good Time',
                'Kategori_Barang' => 'Snack',
                'Harga' => '10000',
                'Qty' => '69'
            ],
            [
                'Kode_Barang' => 8,
                'Nama_Barang' => 'Penggaris',
                'Kategori_Barang' => 'ATK',
                'Harga' => '5000',
                'Qty' => '100'
            ],
            [
                'Kode_Barang' => 9,
                'Nama_Barang' => 'La Fonte',
                'Kategori_Barang' => 'Makanan',
                'Harga' => '23000',
                'Qty' => '60'
            ],
            [
                'Kode_Barang' => 10,
                'Nama_Barang' => 'Teh Kotak',
                'Kategori_Barang' => 'Minuman',
                'Harga' => '4000',
                'Qty' => '85'
            ],
            [
                'Kode_Barang' => 11,
                'Nama_Barang' => 'Choco Pie',
                'Kategori_Barang' => 'Snack',
                'Harga' => '15000',
                'Qty' => '100'
            ],
            [
                'Kode_Barang' => 12,
                'Nama_Barang' => 'Bolpoin Hitec',
                'Kategori_Barang' => 'ATK',
                'Harga' => '32000',
                'Qty' => '34'
            ],
            [
                'Kode_Barang' => 13,
                'Nama_Barang' => 'Mie Oven',
                'Kategori_Barang' => 'Makanan',
                'Harga' => '2300',
                'Qty' => '55'
            ],
            [
                'Kode_Barang' => 14,
                'Nama_Barang' => 'Fruit Tea',
                'Kategori_Barang' => 'Minuman',
                'Harga' => '6000',
                'Qty' => '98'
            ],
            [
                'Kode_Barang' => 15,
                'Nama_Barang' => 'Monde Biscuit Genji',
                'Kategori_Barang' => 'Snack',
                'Harga' => '10500',
                'Qty' => '10'
            ],
            [
                'Kode_Barang' => 16,
                'Nama_Barang' => 'Stabilo',
                'Kategori_Barang' => 'ATK',
                'Harga' => '14000',
                'Qty' => '34'
            ],
            [
                'Kode_Barang' => 17,
                'Nama_Barang' => 'Mie Lemonilo',
                'Kategori_Barang' => 'Makanan',
                'Harga' => '6000',
                'Qty' => '23'
            ],
            [
                'Kode_Barang' => 18,
                'Nama_Barang' => 'Susu Kurma',
                'Kategori_Barang' => 'Minuman',
                'Harga' => '10000',
                'Qty' => '36'
            ],
            [
                'Kode_Barang' => 19,
                'Nama_Barang' => 'Piatos',
                'Kategori_Barang' => 'Snack',
                'Harga' => '10500',
                'Qty' => '78'
            ],
            [
                'Kode_Barang' => 20,
                'Nama_Barang' => 'Kotak Pensil',
                'Kategori_Barang' => 'ATK',
                'Harga' => '25000',
                'Qty' => '40'
            ],
        ];
        DB::table('barangs')->insert($data);
    }
}
