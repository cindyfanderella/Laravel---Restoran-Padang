<?php

namespace Database\Seeders;

use App\Models\Menu;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $menus = [
            [
                'nama_menu' => 'Nasi Rendang Daging',
                'harga' => '21000',
                'deskripsi' => 'Nasi putih yang disajikan dengan rendang daging sapi yang dimasak dalam bumbu rempah khas Padang. Dagingnya empuk dan bumbunya meresap sempurna, memberikan rasa gurih dan pedas yang khas.',
                'foto' => 'storage/menu/nasi_rendang_daging.jpg',
                'kategori' => 'makanan',
                'ketersediaan' => '20',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_menu' => 'Nasi Rendang Ayam',
                'harga' => '18000',
                'deskripsi' => 'Nasi putih yang disajikan dengan rendang ayam. Ayam dimasak dengan bumbu rendang yang kaya akan rempah, menghasilkan  cita rasa yang kaya, gurih, dan menggugah selera.',
                'foto' => 'storage/menu/nasi_rendang_ayam.jpg',
                'kategori' => 'makanan',
                'ketersediaan' => '20',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_menu' => 'Nasi Gulai Tunjang',
                'harga' => '15000',
                'deskripsi' => 'Nasi putih yang disajikan dengan gulai tunjang (tulang kaki sapi) yang dimasak dalam kuah santan yang kental dan kaya akan rempah. Sehingga menghasilkan rasa yang gurih dan lezat.',
                'foto' => 'storage/menu/nasi_gulai_tunjang.jpg',
                'kategori' => 'makanan',
                'ketersediaan' => '20',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_menu' => 'Nasi Ayam Balado',
                'harga' => '17500',
                'deskripsi' => 'Nasi putih yang disajikan dengan ayam balado. Ayam digoreng dan kemudian dimasak dengan sambal balado yang pedas dan menggugah selera. Balado adalah bumbu pedas khas Indonesia yang terbuat dari cabai dan bawang.',
                'foto'  => 'storage/menu/nasi_ayam_balado.jpg',
                'kategori' => 'makanan',
                'ketersediaan' => '20',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_menu' => 'Sate Padang',
                'harga' => '25000',
                'deskripsi' => 'Sate khas Padang yang terbuat dari daging sapi atau ayam, disajikan dengan kuah kental yang terbuat dari tepung beras dan bumbu rempah. Memiliki cita rasa yang gurih dan sedikit pedas.',
                'foto' => 'storage/menu/sate_padang.jpg',
                'kategori' => 'makanan',
                'ketersediaan' => '20',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_menu' => 'Teh',
                'harga' => '5000',
                'deskripsi' => 'Minuman teh yang disajikan dengan hangat atau dicampurkan es batu serta tambahan gula.',
                'foto' => 'storage/menu/teh.jpg',
                'kategori' => 'minuman',
                'ketersediaan' => '25',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_menu' => 'Jeruk',
                'harga' => '6000',
                'deskripsi' => 'Minuman jeruk segar yang disajikan dengan hangat atau dicampurkan es batu serta tambahan gula.',
                'foto' => 'storage/menu/jeruk.jpg',
                'kategori' => 'minuman',
                'ketersediaan' => '25',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_menu' => 'Air Mineral',
                'harga' => '4000',
                'deskripsi' => 'Air putih segar yang tidak memiliki rasa atau tambahan apa pun.',
                'foto' => 'storage/menu/air_mineral.jpg',
                'kategori' => 'minuman',
                'ketersediaan' => '100',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_menu' => 'Soda Gembira',
                'harga' => '10000',
                'deskripsi' => 'Minuman dingin berkarbonasi dengan campuran es batu, susu, sirup, dan air soda yang memberikan sensasi segar dan efervesen di lidah.',
                'foto' => 'storage/menu/soda_gembira.jpg',
                'kategori' => 'minuman',
                'ketersediaan' => '25',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_menu' => 'Susu',
                'harga' => '8000',
                'deskripsi' => 'Minuman yang terbuat dari susu sapi yang kaya akan nutrisi.',
                'foto' => 'storage/menu/susu.jpg',
                'kategori' => 'minuman',
                'ketersediaan' => '25',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        Menu::insert($menus);
    }
}
