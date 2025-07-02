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
                'name' => 'Mascara',
                'category_id' => 1,
                'subcategory_id' => 1,
                'location' => 'Meja Makeup',
                'note' => 'Ini punyanya mama bukan punya si Felis ya',
                // 'expiration_id' => 15,
                'user_id' => 1
            ],
            [
                'name' => 'Wardah Eyeliner',
                'category_id' => 1,
                'subcategory_id' => 1,
                'location' => 'Rak Dinding Ruang Tamu',
                'note' => 'Sisa dari hampers lebaran.',
                // 'expiration_id' => 6,
                'user_id' => 1
            ],
            [
                'name' => 'Make Over Foundation',
                'category_id' => 1,
                'subcategory_id' => 1,
                'location' => 'Lemari Obat',
                'note' => 'Dibeli waktu diskon besar-besaran.',
                // 'expiration_id' => 14,
                'user_id' => 1
            ],
            [
                'name' => 'Pixy Lip Cream',
                'category_id' => 1,
                'subcategory_id' => 1,
                'location' => 'Laci Kamar Mandi',
                'note' => 'Untuk cadangan saat kehabisan.',
                // 'expiration_id' => 1,
                'user_id' => 1
            ],
            [
                'name' => 'Nivea Body Lotion',
                'category_id' => 1,
                'subcategory_id' => 2,
                'location' => 'Rak Dinding Ruang Tamu',
                'note' => 'Dipakai saat pergi kondangan.',
                // 'expiration_id' => 1,
                'user_id' => 1
            ],
            [
                'name' => 'Scarlett Whitening',
                'category_id' => 1,
                'subcategory_id' => 2,
                'location' => 'Lemari Obat',
                'note' => 'Untuk stok darurat kalau hujan besar.',
                // 'expiration_id' => 6,
                'user_id' => 1
            ],
            [
                'name' => 'Vaseline Healthy White',
                'category_id' => 1,
                'subcategory_id' => 2,
                'location' => 'Lemari Obat',
                'note' => 'Buat tamu kalau menginap.',
                // 'expiration_id' => 2,
                'user_id' => 1
            ],
            [
                'name' => 'Garnier Micellar Water',
                'category_id' => 1,
                'subcategory_id' => 3,
                'location' => 'Bawah Wastafel',
                'note' => 'Untuk stok darurat kalau hujan besar.',
                // 'expiration_id' => 6,
                'user_id' => 1
            ],
            [
                'name' => 'Emina Face Wash',
                'category_id' => 1,
                'subcategory_id' => 3,
                'location' => 'Lemari Obat',
                'note' => 'Dipakai saat pergi kondangan.',
                // 'expiration_id' => 13,
                'user_id' => 1
            ],
            [
                'name' => 'Sariayu Face Mask',
                'category_id' => 1,
                'subcategory_id' => 3,
                'location' => 'Rak Kamar Tidur',
                'note' => 'Dipakai saat pergi kondangan.',
                // 'expiration_id' => 12,
                'user_id' => 1
            ],
            [
                'name' => 'Pantene Shampoo',
                'category_id' => 1,
                'subcategory_id' => 4,
                'location' => 'Rak Kulkas',
                'note' => 'Untuk stok darurat kalau hujan besar.',
                // 'expiration_id' => 5,
                'user_id' => 1
            ],
            [
                'name' => 'Sunsilk Conditioner',
                'category_id' => 1,
                'subcategory_id' => 4,
                'location' => 'Lemari Obat',
                'note' => 'Untuk stok darurat kalau hujan besar.',
                // 'expiration_id' => 10,
                'user_id' => 1
            ],
            [
                'name' => 'Natur Hair Tonic',
                'category_id' => 1,
                'subcategory_id' => 4,
                'location' => 'Rak Dinding Ruang Tamu',
                'note' => 'Dibeli waktu diskon besar-besaran.',
                // 'expiration_id' => 1,
                'user_id' => 1
            ],
            [
                'name' => 'Vitalis Body Spray',
                'category_id' => 1,
                'subcategory_id' => 5,
                'location' => 'Rak Kulkas',
                'note' => 'Dipakai saat pergi kondangan.',
                // 'expiration_id' => 4,
                'user_id' => 1
            ],
            [
                'name' => 'Dew It Parfum',
                'category_id' => 1,
                'subcategory_id' => 5,
                'location' => 'Laci Kamar Mandi',
                'note' => 'Hanya dipakai sebulan sekali.',
                // 'expiration_id' => 9,
                'user_id' => 1
            ],
            [
                'name' => 'Bradley Perfume',
                'category_id' => 1,
                'subcategory_id' => 5,
                'location' => 'Bawah Wastafel',
                'note' => 'Untuk stok darurat kalau hujan besar.',
                // 'expiration_id' => 6,
                'user_id' => 1
            ],
            [
                'name' => 'Charm Pembalut',
                'category_id' => 1,
                'subcategory_id' => 6,
                'location' => 'Lemari Dapur',
                'note' => 'Dibeli waktu diskon besar-besaran.',
                // 'expiration_id' => 8,
                'user_id' => 1
            ],
            [
                'name' => 'Sweety Silver Pants',
                'category_id' => 1,
                'subcategory_id' => 6,
                'location' => 'Lemari Obat',
                'note' => 'Dipakai saat pergi kondangan.',
                // 'expiration_id' => 13,
                'user_id' => 1
            ],
            [
                'name' => 'Softex Daun Sirih',
                'category_id' => 1,
                'subcategory_id' => 6,
                'location' => 'Lemari Dapur',
                'note' => 'Punya Mama, jangan dipakai sembarangan!',
                // 'expiration_id' => 5,
                'user_id' => 1
            ],
            [
                'name' => 'Pepsodent Pasta Gigi',
                'category_id' => 1,
                'subcategory_id' => 7,
                'location' => 'Lemari Obat',
                'note' => 'Favorit Felis waktu kecil.',
                // 'expiration_id' => 12,
                'user_id' => 1
            ],
            [
                'name' => 'Formula Sikat Gigi',
                'category_id' => 1,
                'subcategory_id' => 7,
                'location' => 'Rak Kamar Tidur',
                'note' => 'Punya Mama, jangan dipakai sembarangan!',
                // 'expiration_id' => 15,
                'user_id' => 1
            ],
            [
                'name' => 'LISTERINE Mouthwash',
                'category_id' => 1,
                'subcategory_id' => 7,
                'location' => 'Rak Dinding Ruang Tamu',
                'note' => 'Untuk cadangan saat kehabisan.',
                // 'expiration_id' => 2,
                'user_id' => 1
            ],
            [
                'name' => 'Indomie Goreng',
                'category_id' => 2,
                'subcategory_id' => 1,
                'location' => 'Lemari Dapur',
                'note' => 'Sisa dari hampers lebaran.',
                // 'expiration_id' => 10,
                'user_id' => 1
            ],
            [
                'name' => 'Sarimi Ayam Bawang',
                'category_id' => 2,
                'subcategory_id' => 1,
                'location' => 'Rak Kulkas',
                'note' => 'Favorit Felis waktu kecil.',
                // 'expiration_id' => 4,
                'user_id' => 1
            ],
            [
                'name' => 'Pop Mie Pedas',
                'category_id' => 2,
                'subcategory_id' => 1,
                'location' => 'Laci Kamar Mandi',
                'note' => 'Dipesan khusus dari marketplace.',
                // 'expiration_id' => 14,
                'user_id' => 1
            ],
            [
                'name' => 'Taro Net',
                'category_id' => 2,
                'subcategory_id' => 2,
                'location' => 'Rak Kamar Tidur',
                'note' => 'Untuk stok darurat kalau hujan besar.',
                // 'expiration_id' => 8,
                'user_id' => 1
            ],
            [
                'name' => 'Chitato Sapi Panggang',
                'category_id' => 2,
                'subcategory_id' => 2,
                'location' => 'Lemari Obat',
                'note' => 'Dipakai saat pergi kondangan.',
                // 'expiration_id' => 15,
                'user_id' => 1
            ],
            [
                'name' => 'Qtela Tempe',
                'category_id' => 2,
                'subcategory_id' => 2,
                'location' => 'Rak Dinding Ruang Tamu',
                'note' => 'Untuk cadangan saat kehabisan.',
                // 'expiration_id' => 4,
                'user_id' => 1
            ],
            [
                'name' => 'ABC Sardines',
                'category_id' => 2,
                'subcategory_id' => 3,
                'location' => 'Rak Kulkas',
                'note' => 'Dipesan khusus dari marketplace.',
                // 'expiration_id' => 5,
                'user_id' => 1
            ],
            [
                'name' => 'Pronas Kornet',
                'category_id' => 2,
                'subcategory_id' => 3,
                'location' => 'Bawah Wastafel',
                'note' => 'Hanya dipakai sebulan sekali.',
                // 'expiration_id' => 12,
                'user_id' => 1
            ],
            [
                'name' => 'SunBell Tuna',
                'category_id' => 2,
                'subcategory_id' => 3,
                'location' => 'Rak Kamar Tidur',
                'note' => 'Untuk stok darurat kalau hujan besar.',
                // 'expiration_id' => 14,
                'user_id' => 1
            ],
            [
                'name' => 'Nutella Spread',
                'category_id' => 2,
                'subcategory_id' => 4,
                'location' => 'Lemari Obat',
                'note' => 'Punya Mama, jangan dipakai sembarangan!',
                // 'expiration_id' => 5,
                'user_id' => 1
            ],
            [
                'name' => 'Energen Cereal',
                'category_id' => 2,
                'subcategory_id' => 4,
                'location' => 'Rak Dinding Ruang Tamu',
                'note' => 'Buat tamu kalau menginap.',
                // 'expiration_id' => 1,
                'user_id' => 1
            ],
            [
                'name' => 'Skippy Selai Kacang',
                'category_id' => 2,
                'subcategory_id' => 4,
                'location' => 'Rak Kulkas',
                'note' => 'Favorit Felis waktu kecil.',
                // 'expiration_id' => 11,
                'user_id' => 1
            ],
            [
                'name' => 'Indomilk UHT',
                'category_id' => 3,
                'subcategory_id' => 1,
                'location' => 'Lemari Dapur',
                'note' => 'Dibeli waktu diskon besar-besaran.',
                // 'expiration_id' => 13,
                'user_id' => 1
            ],
            [
                'name' => 'Ultra Milk Cokelat',
                'category_id' => 3,
                'subcategory_id' => 1,
                'location' => 'Rak Kamar Tidur',
                'note' => 'Untuk cadangan saat kehabisan.',
                // 'expiration_id' => 7,
                'user_id' => 1
            ],
            [
                'name' => 'Greenfields Full Cream',
                'category_id' => 3,
                'subcategory_id' => 1,
                'location' => 'Rak Kulkas',
                'note' => 'Sisa dari hampers lebaran.',
                // 'expiration_id' => 6,
                'user_id' => 1
            ],
            [
                'name' => 'Coca-Cola Kaleng',
                'category_id' => 3,
                'subcategory_id' => 2,
                'location' => 'Laci Kamar Mandi',
                'note' => 'Hanya dipakai sebulan sekali.',
                // 'expiration_id' => 10,
                'user_id' => 1
            ],
            [
                'name' => 'Sprite Botol',
                'category_id' => 3,
                'subcategory_id' => 2,
                'location' => 'Lemari Dapur',
                'note' => 'Favorit Felis waktu kecil.',
                // 'expiration_id' => 9,
                'user_id' => 1
            ],
            [
                'name' => 'Fanta Stroberi',
                'category_id' => 3,
                'subcategory_id' => 2,
                'location' => 'Rak Dinding Ruang Tamu',
                'note' => 'Dipesan khusus dari marketplace.',
                // 'expiration_id' => 15,
                'user_id' => 1
            ],
            [
                'name' => 'Kapal Api Special',
                'category_id' => 3,
                'subcategory_id' => 3,
                'location' => 'Lemari Dapur',
                'note' => 'Punya Mama, jangan dipakai sembarangan!',
                // 'expiration_id' => 3,
                'user_id' => 1
            ],
            [
                'name' => 'Good Day Cappuccino',
                'category_id' => 3,
                'subcategory_id' => 3,
                'location' => 'Bawah Wastafel',
                'note' => 'Untuk stok darurat kalau hujan besar.',
                // 'expiration_id' => 13,
                'user_id' => 1
            ],
            [
                'name' => 'Nutrisari Jeruk',
                'category_id' => 3,
                'subcategory_id' => 3,
                'location' => 'Rak Kamar Tidur',
                'note' => 'Dipakai saat pergi kondangan.',
                // 'expiration_id' => 2,
                'user_id' => 1
            ],
            [
                'name' => 'Sendok Stainless',
                'category_id' => 4,
                'subcategory_id' => 1,
                'location' => 'Rak Dinding Ruang Tamu',
                'note' => 'Backup cadangan untuk acara keluarga.',
                // 'expiration_id' => 8,
                'user_id' => 1
            ],
            [
                'name' => 'Piring Melamin',
                'category_id' => 4,
                'subcategory_id' => 1,
                'location' => 'Lemari Dapur',
                'note' => 'Dibawa saat piknik keluarga.',
                // 'expiration_id' => 12,
                'user_id' => 1
            ],
            [
                'name' => 'Gelas Takaran',
                'category_id' => 4,
                'subcategory_id' => 1,
                'location' => 'Rak Kulkas',
                'note' => 'Sisa dari kado arisan.',
                // 'expiration_id' => 1,
                'user_id' => 1
            ],
            [
                'name' => 'Garam Cap Kapal',
                'category_id' => 4,
                'subcategory_id' => 2,
                'location' => 'Lemari Dapur',
                'note' => 'Dibeli grosir untuk stok 3 bulan.',
                // 'expiration_id' => 6,
                'user_id' => 1
            ],
            [
                'name' => 'Royco Ayam',
                'category_id' => 4,
                'subcategory_id' => 2,
                'location' => 'Rak Kamar Tidur',
                'note' => 'Disimpan di kamar karena dapur penuh.',
                // 'expiration_id' => 4,
                'user_id' => 1
            ],
            [
                'name' => 'Sasa Tepung Bumbu',
                'category_id' => 4,
                'subcategory_id' => 2,
                'location' => 'Laci Kamar Mandi',
                'note' => 'Jangan tanya kenapa ini di sini.',
                // 'expiration_id' => 10,
                'user_id' => 1
            ],
            [
                'name' => 'Blue Band Margarine',
                'category_id' => 4,
                'subcategory_id' => 3,
                'location' => 'Rak Kulkas',
                'note' => 'Untuk bekal sekolah Felis.',
                // 'expiration_id' => 7,
                'user_id' => 1
            ],
            [
                'name' => 'Maizena Tepung',
                'category_id' => 4,
                'subcategory_id' => 3,
                'location' => 'Lemari Dapur',
                'note' => 'Sisa eksperimen masak kue gagal.',
                // 'expiration_id' => 3,
                'user_id' => 1
            ],
            [
                'name' => 'Coklat Bubuk Van Houten',
                'category_id' => 4,
                'subcategory_id' => 3,
                'location' => 'Rak Kamar Tidur',
                'note' => 'Untuk baking project liburan nanti.',
                // 'expiration_id' => 15,
                'user_id' => 1
            ],
            [
                'name' => 'Minyak Bimoli',
                'category_id' => 4,
                'subcategory_id' => 4,
                'location' => 'Bawah Wastafel',
                'note' => 'Stok cadangan bulan puasa.',
                // 'expiration_id' => 5,
                'user_id' => 1
            ],
            [
                'name' => 'Gula Pasir Gulaku',
                'category_id' => 4,
                'subcategory_id' => 4,
                'location' => 'Lemari Dapur',
                'note' => 'Dibeli pas harga turun.',
                // 'expiration_id' => 9,
                'user_id' => 1
            ],
            [
                'name' => 'Kecap ABC',
                'category_id' => 4,
                'subcategory_id' => 4,
                'location' => 'Rak Dinding Ruang Tamu',
                'note' => 'Disimpan sembarangan oleh adik.',
                // 'expiration_id' => 2,
                'user_id' => 1
            ],
            [
                'name' => 'So Klin Pewangi',
                'category_id' => 5,
                'subcategory_id' => 1,
                'location' => 'Lemari Obat',
                'note' => 'Jangan tertukar dengan obat tetes!',
                // 'expiration_id' => 11,
                'user_id' => 1
            ],
            [
                'name' => 'Wipol Karbol',
                'category_id' => 5,
                'subcategory_id' => 1,
                'location' => 'Lemari Dapur',
                'note' => 'Dipakai hanya saat bersih-bersih besar.',
                // 'expiration_id' => 13,
                'user_id' => 1
            ],
            [
                'name' => 'Bayclin Pemutih',
                'category_id' => 5,
                'subcategory_id' => 1,
                'location' => 'Bawah Wastafel',
                'note' => 'Jauhkan dari jangkauan anak-anak.',
                // 'expiration_id' => 8,
                'user_id' => 1
            ],




        ]);
    }
}