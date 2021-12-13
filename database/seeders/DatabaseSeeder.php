<?php

namespace Database\Seeders;

use App\Models\Post;
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
        // User::create([
        //     'username' => 'admin',
        //     'email' => 'admin123@gmail.com',
        //     'password' => bcrypt('admin123')
        // ]);

        // Category::create([
        //     'name' => 'Event',
        //     'slug' => 'event'
        // ]);

        // Category::create([
        //     'name' => 'News',
        //     'slug' => 'news'
        // ]);

        // // event
        // Post::create([
        //     'title' => 'Tournament Rank UP',
        //     'category_id' => 1,
        //     'bannerlink' => 'https://media.discordapp.net/attachments/650172081434263581/919587615622197258/banner2.png',
        //     'slug' => 'T202000GH',
        //     'date' => '2021-12-01',
        //     'excerpt' => '',
        //     'description' => '<h5 class="card-title">Tournament Rank UP</h5><p class="card-text">Tournament ID T202000GH</p><h5><i class="bi bi-shop"> Organizer </i>: Velocity BSD</h5><h5><i class="bi bi-calendar-event"> Tournament Date </i>: 10 Jan 2022</h5><h5><i class="bi bi-clock"></i> Start Time </i>: 15:00 (GMT +7)</h5><h5><i class="bi bi-person-badge"></i> Format </i>: V-Premium</h5>'
        // ]);
        // Post::create([
        //     'date' => '2021-12-10',
        //     'title' => 'Card Battle Multitoys Event',
        //     'category_id' => 1,
        //     'bannerlink' => 'https://media.discordapp.net/attachments/650172081434263581/919604440707792896/bannerod.jpg?width=960&height=360',
        //     'slug' => 'T222200GH',
        //     'excerpt' => '',
        //     'description' => '<h5 class="card-title">Card Battle Multitoys Event</h5><p class="card-text">Tournament ID T222200GH</p><h5><i class="bi bi-shop"> Organizer </i>: MultiToys</h5><h5><i class="bi bi-calendar-event"> Tournament Date </i>: 13 Jan 2022</h5><h5><i class="bi bi-clock"></i> Start Time </i>: 09:00 (GMT +7)</h5><h5><i class="bi bi-person-badge"></i> Format </i>: D-Standard</h5>'
        // ]);

        // Post::create([
        //     'date' => '2021-12-17',
        //     'title' => 'Tournament National Event by VI',
        //     'bannerlink' => 'https://media.discordapp.net/attachments/650172081434263581/919604440707792896/bannerod.jpg?width=960&height=360',
        //     'category_id' => 1,
        //     'slug' => 'T222100GH',
        //     'excerpt' => '',
        //     'description' => '<h5 class="card-title">Tournament National Event by VI</h5><p class="card-text">Tournament ID T222100GH</p><h5><i class="bi bi-shop"> Organizer </i>: Vanguard Indonesia</h5><h5><i class="bi bi-calendar-event"> Tournament Date </i>: 01 Feb 2022</h5><h5><i class="bi bi-clock"></i> Start Time </i>: 12:00 (GMT +7)</h5><h5><i class="bi bi-person-badge"></i> Format </i>: D-Standard</h5>'
        // ]);

        // // news
        // Post::create([
        //     'date' => '2021-11-05',
        //     'bannerlink' => 'https://s3-ap-northeast-1.amazonaws.com/en.cf-vanguard.com/wordpress/wp-content/uploads/D-LBT02_top.jpg',
        //     'title' => 'Lyrical Booster 02',
        //     'category_id' => '2',
        //     'excerpt' => 'CARDFIGHT!! VANGUARD overDress Lyrical Booster Pack 02: Lyrical Monasterio It’s a New School Term! akan dirilis pada 1 April 2022.',
        //     'slug' => 'lyrical-booster-02',
        //     'description' => '<p>Kami senang untuk membagikannya <a href="https://en.cf-vanguard.com/products/dlbt02/"> CARDFIGHT!! VANGUARD overDress Lyrical Booster Pack 02: Lyrical Monasterio It’s a New School Term!</a> akan dirilis pada <b>1 April 2022</b>. Terima kasih atas dukungan dan kesabaran Anda yang berkelanjutan.</p><br><p>Karena Covid-19, kami sangat menyarankan pemain untuk menghubungi <a href="https://en.cf-vanguard.com/shop/">toko game lokal</a> Anda untuk mengonfirmasi ketersediaan produk dan mengatur pengiriman, dan untuk memprioritaskan keselamatan pribadi dan keselamatan orang-orang di sekitar Anda di atas segalanya.</p><br>'
        // ]);


        // Post::create([
        //     'date' => '2021-11-30',
        //     'bannerlink' => 'https://s3-ap-northeast-1.amazonaws.com/en.cf-vanguard.com/wordpress/wp-content/uploads/RoR_top.jpg',
        //     'title' => 'Record Of Ragnarok',
        //     'category_id' => '2',
        //     'slug' => 'record-of-ragnarok',
        //     'excerpt' => 'Seperti yang diungkapkan pada Presentasi Strategi TCG Bushiroad, CARDFIGHT!! Vanguard overDress akan berkolaborasi dengan Record of Ragnarok!',
        //     'description' => '<br><p>Seperti yang diungkapkan pada Presentasi Strategi TCG Bushiroad, CARDFIGHT!! Vanguard overDress akan berkolaborasi dengan Record of Ragnarok! Title Trial Deck dan Title Booster akan dirilis untuk seri ini, dan versi bahasa Inggris dan Jepang akan dirilis secara bersamaan pada tanggal <b>22 April 2022</b>.</p><br><p>Title Trial Deck akan berisi deck pra-konstruksi yang dapat digunakan untuk bermain di luar rak, sedangkan Title Booster akan berisi kartu yang dapat digunakan untuk meningkatkan Trial Deck, dan membangun deck lainnya juga.</p><br>'
        // ]);


        // Post::create([
        //     'date' => '2021-12-07',
        //     'title' => 'Awakening Of Chakrabathi Promo',
        //     'category_id' => '2',
        //     'slug' => 'dbt04p',
        //     'bannerlink' => 'https://s3-ap-northeast-1.amazonaws.com/en.cf-vanguard.com/wordpress/wp-content/uploads/DBT04-Tournament-Store-Exclusive-Booster-Release-Campaign_top.jpg',
        //     'excerpt' => 'Sehubungan dengan perilisan CARDFIGHT!! VANGUARD overDress Booster Pack 04: Kebangkitan Chakrabarthi, kami akan mengadakan kampanye rilis Booster eksklusif untuk turnamen toko.',
        //     'description' => '<br><p>Sehubungan dengan perilisan CARDFIGHT!! VANGUARD overDress Booster Pack 04: Kebangkitan Chakrabarthi, kami akan mengadakan kampanye rilis Booster eksklusif untuk turnamen toko.</p><br><p>Dengan setiap pembelian <b>10 paket</b> produk Vanguard Edisi Bahasa Inggris, Anda dapat menerima 1 paket PR gratis!<br>Ada 6 jenis kartu untuk dikumpulkan, dengan peluang mendapatkan foil paralel untuk setiap jenis! <br>※Selama persediaan masih ada, terbatas hanya di toko turnamen.</p><img src="https://s3-ap-northeast-1.amazonaws.com/en.cf-vanguard.com/wordpress/wp-content/uploads/D-Booster-Pack-04-Campaign-PR-Pack.jpg" class="rounded mx-auto d-block img-fluid" alt="News" width="1230" height="589"><a href="https://en.cf-vanguard.com/products/dbt04/">Klik di sini untuk info produk!</a><br><br><br><p>Karena Covid-19, kami sangat menyarankan pemain untuk menghubungi <a href="https://en.cf-vanguard.com/shop/">toko game lokal</a> Anda untuk mengonfirmasi ketersediaan produk dan mengatur pengiriman, dan untuk memprioritaskan keselamatan pribadi dan keselamatan orang-orang di sekitar Anda di atas segalanya.</p><br>'
        // ]);

        // Post::create([
        //     'date' => '2021-12-29',
        //     'title' => 'Bushiroad English Conference Autumn 2021',
        //     'category_id' => '2',
        //     'slug' => 'beac2021',
        //     'bannerlink' => 'https://s3-ap-northeast-1.amazonaws.com/en.cf-vanguard.com/wordpress/wp-content/uploads/BECA2021_top.jpg',
        //     'excerpt' => 'Poin utama untuk Vanguard dari live streaming Bushiroad English Conference Autumn 2021',
        //     'description' => '<p style="text-align: center">Tonton siaran langsungnya <a href="https://youtu.be/JSuKszGGZXU">di sini!</a></p><br><br><p style="text-align: center"><b>Poin utama untuk Vanguard dari Live streaming Bushiroad English Conference Autumn 2021</b></p><p><b>1. Detail Koleksi V Clan Vol.3 dan Vol.4</b><br>Segera hadir pada <b>4 Maret 2022!</b></p><img src="https://s3-ap-northeast-1.amazonaws.com/en.cf-vanguard.com/wordpress/wp-content/uploads/dvs03_top.jpg" class="rounded mx-auto d-block img-fluid" alt="News" width="782" height="440"><br><img src="https://s3-ap-northeast-1.amazonaws.com/en.cf-vanguard.com/wordpress/wp-content/uploads/dvs04_top.jpg" class="rounded mx-auto d-block img-fluid" alt="News" width="782" height="440"><br><p><b>Intip box toppers yang akan datang!</b><br>Koleksi Klan V Vol.3</p><img src="https://s3-ap-northeast-1.amazonaws.com/en.cf-vanguard.com/wordpress/wp-content/uploads/dvs03_box_topper_1.jpg" class="rounded mx-auto d-block img-fluid" alt="News" width="782" height="440"><br><img src="https://s3-ap-northeast-1.amazonaws.com/en.cf-vanguard.com/wordpress/wp-content/uploads/dvs03_box_topper_2.jpg" class="rounded mx-auto d-block img-fluid" alt="News" width="782" height="440"><br><p>Koleksi Klan V Vol.4</p><img src="https://s3-ap-northeast-1.amazonaws.com/en.cf-vanguard.com/wordpress/wp-content/uploads/dvs04_box_topper_1.jpg" class="rounded mx-auto d-block img-fluid" alt="News" width="782" height="440"><br><img src="https://s3-ap-northeast-1.amazonaws.com/en.cf-vanguard.com/wordpress/wp-content/uploads/dvs04_box_topper_2.jpg" class="rounded mx-auto d-block img-fluid" alt="News" width="782" height="440"><br><p><b>2. Kartu Dunia Baru Asli!</b><br>Kartu World Original (WO) akan tersedia di <a href="https://en.cf-vanguard.com/products/dbt04/">Booster Pack 04: Awakening of Chakrabarthi.</a> <br>Menampilkan karya seni yang <b>unik untuk Edisi Bahasa Inggris!</b><br>(Gambar di bawah) Soul Repose Pixy, Petronella (Heal Trigger) untuk Stoicheia!<br>Unit ini memiliki ras yang sama dengan Elegy Pixy!</p><img style="max-width: 300px" src="https://en.cf-vanguard.com/wordpress/wp-content/images/cardlist/dbt04/dbt04_wo01.png" class="rounded mx-auto d-block img-fluid" alt="News" width="100%"><br><p><b>Ikhtisar rilis mendatang</b></p><img src="https://s3-ap-northeast-1.amazonaws.com/en.cf-vanguard.com/wordpress/wp-content/uploads/BECA2021_product_schedule.jpg" class="rounded mx-auto d-block img-fluid" alt="News" width="782" height="440"><br>'
        // ]);

        Post::create([
            'date' => '2021-12-29',
            'title' => 'lorem',
            'category_id' => '2',
            'slug' => 'lorem',
            'bannerlink' => 'https://s3-ap-northeast-1.amazonaws.com/en.cf-vanguard.com/wordpress/wp-content/uploads/BECA2021_top.jpg',
            'excerpt' => 'lorem',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus ipsum possimus vero, sequi saepe ab esse dolore ex quas perferendis. Libero iusto quaerat nostrum asperiores quidem totam magni omnis at.'
        ]);
    }
}
