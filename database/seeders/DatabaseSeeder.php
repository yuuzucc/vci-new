<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\Event;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'username' => 'admin',
            'email' => 'admin123@gmail.com',
            'password' => bcrypt('admin123')
        ]);

        Category::create([
            'name' => 'Product',
            'slug' => 'product'
        ]);
        Category::create([
            'name' => 'Anime',
            'slug' => 'anime'
        ]);

        // event
        //pola
        // Event::create([
        //     'title' => '',
        //     'bannerlink' => 'https://media.discordapp.net/attachments/650172081434263581/919587615622197258/banner2.png',
        //     'slug' => '',
        //     'date' => '2021-12-01',
        //     'format' => '',
        //     'desc' => '15:00 WIB'
        // ]);
        Event::create([
            'title' => 'Weekly Ogre Depok V',
            'bannerlink' => 'https://media.discordapp.net/attachments/650172081434263581/919587615622197258/banner2.png',
            'slug' => 'T211201OD',
            'date' => '2021-12-01',
            'time' => '15:00',
            'format' => 'V-Standard',
            'desc' => 'Ogre Depok at Golden Sport Center Unit C.204, Jl. Akses UI No.26, Tugu, Kec. Cimanggis, Kota Depok, Jawa Barat 16451'
        ]);

        Event::create([
            'title' => 'Weekly Mola Cardshop',
            'bannerlink' => 'https://media.discordapp.net/attachments/650172081434263581/919587615622197258/banner2.png',
            'slug' => 'T211223MO',
            'date' => '2021-12-23',
            'time' => '15:00',
            'format' => 'Premium',
            'desc' => 'Mola Cards at Ruko Graha Parkview Blok ZD/6, Jl. Boulevard Timur No.RT.12, RT.12/RW.10, Pegangsaan Dua, Kelapa Gading, North Jakarta City, Jakarta 14250'
        ]);

        Event::create([
            'title' => 'GT Ogre Lair Overdress',
            'bannerlink' => 'https://media.discordapp.net/attachments/650172081434263581/919587615622197258/banner2.png',
            'slug' => 'GT211219OL',
            'date' => '2021-12-19',
            'time' => '15:00',
            'format' => 'D-Standard',
            'desc' => 'Ogre Lair at Jalan Pesanggrahan Raya no 56b Lantai 3 dan 4 (diatas Snappy), Jakarta barat'
        ]);

        Event::create([
            'title' => 'Weekly Ogre Lair Overdress',
            'bannerlink' => 'https://media.discordapp.net/attachments/650172081434263581/919587615622197258/banner2.png',
            'slug' => 'T211212OL',
            'date' => '2021-12-12',
            'time' => '15:00',
            'format' => 'D-Standard',
            'desc' => 'Ogre Lair at Jalan Pesanggrahan Raya no 56b Lantai 3 dan 4 (diatas Snappy), Jakarta barat'
        ]);

        Event::create([
            'title' => 'Weekly Ogre Depok Premium',
            'bannerlink' => 'https://media.discordapp.net/attachments/650172081434263581/919587615622197258/banner2.png',
            'slug' => 'T211207OL',
            'date' => '2021-12-07',
            'time' => '19:00',
            'format' => 'Premium',
            'desc' => 'Ogre Depok at Golden Sport Center Unit C.204, Jl. Akses UI No.26, Tugu, Kec. Cimanggis, Kota Depok, Jawa Barat 16451'
        ]);

        // news
        Post::create([
            'bannerlink' => 'https://s3-ap-northeast-1.amazonaws.com/en.cf-vanguard.com/wordpress/wp-content/uploads/D-LBT02_top.jpg',
            'title' => 'Lyrical Booster 02',
            'category_id' => '1',
            'excerpt' => 'CARDFIGHT!! VANGUARD overDress Lyrical Booster Pack 02: Lyrical Monasterio It’s a New School Term! akan dirilis pada 1 April 2022.',
            'slug' => 'lyrical-booster-02',
            'desc' => '<p>Kami senang untuk membagikannya <a href="https://en.cf-vanguard.com/products/dlbt02/"> CARDFIGHT!! VANGUARD overDress Lyrical Booster Pack 02: Lyrical Monasterio It’s a New School Term!</a> akan dirilis pada <b>1 April 2022</b>. Terima kasih atas dukungan dan kesabaran Anda yang berkelanjutan.</p><br><p>Karena Covid-19, kami sangat menyarankan pemain untuk menghubungi <a href="https://en.cf-vanguard.com/shop/">toko game lokal</a> Anda untuk mengonfirmasi ketersediaan produk dan mengatur pengiriman, dan untuk memprioritaskan keselamatan pribadi dan keselamatan orang-orang di sekitar Anda di atas segalanya.</p><br>'
        ]);
    }
}
