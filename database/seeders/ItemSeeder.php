<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('items')->insert([
            [
                'name' => 'Wardah Eyeliner',
                'slug' => 'wardah-eyeliner',
                'category_id' => 1,
                'subcategory_id' => 1,
                'location' => 'Meja Makeup',
                'note' => 'Ini punyanya mama bukan punya si Felis ya. Jangan dipake sembarangan!',
                'user_id' => 1
            ],
            [
                'name' => 'Scarlett Whitening',
                'slug' => 'scarlett-whitening',
                'category_id' => 1,
                'subcategory_id' => 2,
                'location' => 'Rak Dinding Ruang Tamu',
                'note' => 'Untuk dipake malem hari, biar kulit glowing terus.',
                'user_id' => 1
            ],
            [
                'name' => 'Emina Face Wash',
                'slug' => 'emina-face-wash',
                'category_id' => 1,
                'subcategory_id' => 3,
                'location' => 'Rak Kamar Mandi',
                'note' => 'Ini kemarin baru beli pas promo, bagus buat wajah.',
                'user_id' => 1
            ],
            [
                'name' => 'Pantene Conditioner',
                'slug' => 'pantene-conditioner',
                'category_id' => 1,
                'subcategory_id' => 4,
                'location' => 'Rak Kamar Mandi',
                'note' => 'Cocok buat si Adik, rambutnya jadi halus.',
                'user_id' => 1
            ],
            [
                'name' => 'Mykonos Slow Living Parfum',
                'slug' => 'mykonos-slow-living-parfum',
                'category_id' => 1,
                'subcategory_id' => 5,
                'location' => 'Meja Kerja',
                'note' => 'Wangi banget! Bakal pake tiap hari ah.',
                'user_id' => 1
            ],
            [
                'name' => 'Charm Pembalut',
                'slug' => 'charm-pembalut',
                'category_id' => 1,
                'subcategory_id' => 6,
                'location' => 'Lemari Bawah',
                'note' => 'Buat jaga-jaga kalo kondisi darurat.',
                'user_id' => 1
            ],
            [
                'name' => 'Pepsodent Pasta Gigi',
                'slug' => 'pepsodent-pasta-gigi',
                'category_id' => 1,
                'subcategory_id' => 7,
                'location' => 'Rak Kamar Mandi',
                'note' => 'Harus beli lagi soalnya udah mau abis.',
                'user_id' => 1
            ],
            [
                'name' => 'Indomie Goreng Cabe Ijo',
                'slug' => 'indomie-goreng-cabe-ijo',
                'category_id' => 2,
                'subcategory_id' => 8,
                'location' => 'Lemari Dapur',
                'note' => 'Kemarin dikasih Revata, dia bawa dari Bandung.',
                'user_id' => 1
            ],
            [
                'name' => 'Chitato Sapi Panggang',
                'slug' => 'chitato-sapi-panggang',
                'category_id' => 2,
                'subcategory_id' => 9,
                'location' => 'Meja Ruang Keluarga',
                'note' => 'Favorit Felis waktu kecil.',
                'user_id' => 1
            ],
            [
                'name' => 'ABC Sardines Kaleng',
                'slug' => 'abc-sardines-kaleng',
                'category_id' => 2,
                'subcategory_id' => 10,
                'location' => 'Rak Kulkas',
                'note' => 'Buat jaga-jaga kalo ga ada makanan, masak ini aja kata Mama.',
                'user_id' => 1
            ],
            [
                'name' => 'Nutella Spread',
                'slug' => 'nutella-spread',
                'category_id' => 2,
                'subcategory_id' => 11,
                'location' => 'Meja Makan',
                'note' => 'Buat bikin roti kalo lagi pengen sarapan sebelum berangkat kuliah.',
                'user_id' => 1
            ],
            [
                'name' => 'Greenfields Full Cream',
                'slug' => 'greenfields-full-cream',
                'category_id' => 3,
                'subcategory_id' => 12,
                'location' => 'Rak Kulkas',
                'note' => 'Sisa dari hampers lebaran.',
                'user_id' => 1
            ],
            [
                'name' => 'Coca-Cola 330ml Kaleng',
                'slug' => 'coca-cola-330ml-kaleng',
                'category_id' => 3,
                'subcategory_id' => 13,
                'location' => 'Rak Kulkas',
                'note' => 'Buat kalo pengen aja, jangan kebanyakan soalnya nanti diabetes.',
                'user_id' => 1
            ],
            [
                'name' => 'Kapal Api Special',
                'slug' => 'kapal-api-special',
                'category_id' => 3,
                'subcategory_id' => 14,
                'location' => 'Lemari Dapur',
                'note' => 'Kemarin beli buat si Papa ngopi.',
                'user_id' => 1
            ],
            [
                'name' => 'Piring Melamin',
                'slug' => 'piring-melamin',
                'category_id' => 4,
                'subcategory_id' => 15,
                'location' => 'Lemari Dapur',
                'note' => 'Dibawa saat piknik keluarga. Kemarin dapet dari kado arisan.',
                'user_id' => 1
            ],
            [
                'name' => 'Royco Ayam',
                'slug' => 'royco-ayam',
                'category_id' => 4,
                'subcategory_id' => 16,
                'location' => 'Laci Kamar',
                'note' => 'Jangan tanya ini kenapa ada di sini. Intinya dapur penuh, pusing deh.',
                'user_id' => 1
            ],
            [
                'name' => 'Maizena Tepung',
                'slug' => 'maizena-tepung',
                'category_id' => 4,
                'subcategory_id' => 17,
                'location' => 'Lemari Dapur',
                'note' => 'Sisa eksperimen masak kue gagal.',
                'user_id' => 1
            ],
            [
                'name' => 'Minyak Bimoli',
                'slug' => 'minyak-bimoli',
                'category_id' => 4,
                'subcategory_id' => 18,
                'location' => 'Bawah Wastafel',
                'note' => 'Stok cadangan bulan puasa. Kemarin beli pas harga turun, pakenya dikit-dikit ya!',
                'user_id' => 1
            ],
            [
                'name' => 'Wipol Karbol',
                'slug' => 'wipol-karbol',
                'category_id' => 5,
                'subcategory_id' => 19,
                'location' => 'Lemari Dapur',
                'note' => 'Dipakai hanya saat bersih-bersih besar. Jangan diminum woi!',
                'user_id' => 1
            ],
            [
                'name' => 'Baterai AA Alkaline',
                'slug' => 'baterai-aa-alkaline',
                'category_id' => 5,
                'subcategory_id' => 20,
                'location' => 'Laci Meja Gudang',
                'note' => 'Kemarin beli buat ganti baterai senter sama remote',
                'user_id' => 1
            ],
            [
                'name' => 'Stella Pengharum Jeruk',
                'slug' => 'stella-pengharum-jeruk',
                'category_id' => 5,
                'subcategory_id' => 21,
                'location' => 'Lemari Perlengkapan',
                'note' => 'Hanya dipakai kalo ada bau tidak enak seperti bau bangkai.',
                'user_id' => 1
            ],
            [
                'name' => 'Baygon Obat Nyamuk',
                'slug' => 'baygon-obat-nyamuk',
                'category_id' => 5,
                'subcategory_id' => 22,
                'location' => 'Lemari Perlengkapan',
                'note' => 'Jauhkan dari jangkauan anak-anak.',
                'user_id' => 1
            ],
            [
                'name' => 'Panadol Merah Paracetamol',
                'slug' => 'panadol-merah-paracetamol',
                'category_id' => 6,
                'subcategory_id' => 23,
                'location' => 'Lemari Obat',
                'note' => 'Nyetok soalnya suka pusing-pusing apalagi kalo lagi kerjain project.',
                'user_id' => 1
            ],
            [
                'name' => 'HolistiCare Ester Vitamin C',
                'slug' => 'holisticare-ester-vitamin-c',
                'category_id' => 6,
                'subcategory_id' => 24,
                'location' => 'Lemari Obat',
                'note' => 'Buat vitamin penyemangat kalo lagi cape.',
                'user_id' => 1
            ],
            [
                'name' => 'Masker Wajah KF90',
                'slug' => 'masker-wajah-kf90',
                'category_id' => 6,
                'subcategory_id' => 25,
                'location' => 'Lemari Perlengkapan',
                'note' => 'Buat stok kemarin waktu pandemi sengaja beli banyak, eh pandeminya udahan.',
                'user_id' => 1
            ],
            [
                'name' => 'Dettol Cairan Antiseptik',
                'slug' => 'dettol-cairan-antiseptik',
                'category_id' => 6,
                'subcategory_id' => 26,
                'location' => 'Lemari Perlengkapan',
                'note' => 'Buat mandi kalo kulit lagi iritasi, biasanya dicampur air hangat.',
                'user_id' => 1
            ],
        ]);
    }
}
