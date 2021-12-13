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
            'desc' => '<p><a href="https://en.cf-vanguard.com/products/dlbt02/"> CARDFIGHT!! VANGUARD overDress Lyrical Booster Pack 02: Lyrical Monasterio It’s a New School Term!</a> akan dirilis pada <b>1 April 2022</b>. Terima kasih atas dukungan dan kesabaran Anda yang berkelanjutan.</p><br><p>Karena Covid-19, kami sangat menyarankan pemain untuk menghubungi <a href="https://en.cf-vanguard.com/shop/">toko game lokal</a> Anda untuk mengonfirmasi ketersediaan produk dan mengatur pengiriman, dan untuk memprioritaskan keselamatan pribadi dan keselamatan orang-orang di sekitar Anda di atas segalanya.</p><br>'
        ]);

        Post::create([
            'bannerlink' => 'https://s3-ap-northeast-1.amazonaws.com/en.cf-vanguard.com/wordpress/wp-content/uploads/RoR_top.jpg',
            'title' => 'Record Of Ragnarok',
            'category_id' => '1',
            'excerpt' => 'CARDFIGHT!! Vanguard overDress akan berkolaborasi dengan Record of Ragnarok!',
            'slug' => 'record-of-ragnarok',
            'desc' => '<p>Seperti yang diungkapkan pada Presentasi Strategi TCG Bushiroad, CARDFIGHT!! Vanguard overDress akan berkolaborasi dengan Record of Ragnarok!Title Trial Deck dan Title Booster akan dirilis untuk seri ini, dan versi bahasa Inggris dan Jepang akan dirilis secara bersamaan pada tanggal <b>22 April 2022</b>.</p><br><p>Title Trial Deck akan berisi deck pre-konstruksi yang dapat langsung digunakan untuk bermain, sedangkan Title Booster akan berisi kartu yang dapat digunakan untuk meningkatkan Trial Deck, dan membangun deck lainnya juga.</p>'
        ]);

        Post::create([
            'bannerlink' => 'https://s3-ap-northeast-1.amazonaws.com/en.cf-vanguard.com/wordpress/wp-content/uploads/BECA2021_top.jpg',
            'title' => 'Bushiroad English Conference Autumn 2021',
            'category_id' => '1',
            'excerpt' => 'Poin-poin dari livestream Bushiroad English Conference Autumn 2021',
            'slug' => 'bushiroad-english-conference-autumn-2021',
            'desc' => '<p style="text-align: center">Tonton siaran langsungnya <a href="https://youtu.be/JSuKszGGZXU">di sini!</a></p><br><br><p style="text-align: center"><b>Poin kunci untuk Vanguard dari streaming langsung!</b></p><p><b>1. Detail Koleksi V Clan Vol.3 dan Vol.4</b><br>Segera hadir pada <b>4 Maret 2022!</b></p><img src="https://s3-ap-northeast-1.amazonaws.com/en.cf-vanguard.com/wordpress/wp-content/uploads/dvs03_top.jpg" class="rounded mx-auto d-block img-fluid" alt="News" width="782" height="440"><br><img src="https://s3-ap-northeast-1.amazonaws.com/en.cf-vanguard.com/wordpress/wp-content/uploads/dvs04_top.jpg" class="rounded mx-auto d-block img-fluid" alt="News" width="782" height="440"><br><p><b>Intip box toppers yang akan datang!</b><br>Koleksi Klan V Vol.3</p><img src="https://s3-ap-northeast-1.amazonaws.com/en.cf-vanguard.com/wordpress/wp-content/uploads/dvs03_box_topper_1.jpg" class="rounded mx-auto d-block img-fluid" alt="News" width="782" height="440"><br><img src="https://s3-ap-northeast-1.amazonaws.com/en.cf-vanguard.com/wordpress/wp-content/uploads/dvs03_box_topper_2.jpg" class="rounded mx-auto d-block img-fluid" alt="News" width="782" height="440"><br><p>Koleksi Klan V Vol.4</p><img src="https://s3-ap-northeast-1.amazonaws.com/en.cf-vanguard.com/wordpress/wp-content/uploads/dvs04_box_topper_1.jpg" class="rounded mx-auto d-block img-fluid" alt="News" width="782" height="440"><br><img src="https://s3-ap-northeast-1.amazonaws.com/en.cf-vanguard.com/wordpress/wp-content/uploads/dvs04_box_topper_2.jpg" class="rounded mx-auto d-block img-fluid" alt="News" width="782" height="440"><br><p><b>2. Kartu Dunia Baru Asli!</b><br>Kartu World Original (WO) akan tersedia di <a href="https://en.cf-vanguard.com/products/dbt04/">Booster Pack 04: Awakening of Chakrabarthi.</a> <br>Menampilkan art yang <b>unik untuk Edisi Bahasa Inggris!</b><br>(Gambar di bawah) Soul Repose Pixy, Petronella (Heal Trigger) untuk Stoicheia!<br>Unit ini memiliki ras yang sama dengan Elegy Pixy!</p><img style="max-width: 300px" src="https://en.cf-vanguard.com/wordpress/wp-content/images/cardlist/dbt04/dbt04_wo01.png" class="rounded mx-auto d-block img-fluid" alt="News" width="100%"><br><p><b>Ikhtisar rilis mendatang</b></p><img src="https://s3-ap-northeast-1.amazonaws.com/en.cf-vanguard.com/wordpress/wp-content/uploads/BECA2021_product_schedule.jpg" class="rounded mx-auto d-block img-fluid" alt="News" width="782" height="440"><br>'
        ]);

        Post::create([
            'bannerlink' => 'https://s3-ap-northeast-1.amazonaws.com/en.cf-vanguard.com/wordpress/wp-content/uploads/DBT04-Tournament-Store-Exclusive-Booster-Release-Campaign_top.jpg',
            'title' => 'Awakening Of Chakrabathi Promo',
            'category_id' => '1',
            'excerpt' => 'CARDFIGHT!! VANGUARD overDress Booster Pack 04: Kebangkitan Chakrabarthi, kami akan mengadakan Kampanye Rilis Booster eksklusif toko turnamen.',
            'slug' => 'awakening-of-chakrabathi-promo',
            'desc' => '<p>Kami dengan senang hati membagikannya sehubungan dengan perilisan CARDFIGHT!! VANGUARD overDress Booster Pack 04: Kebangkitan Chakrabarthi, kami akan mengadakan Kampanye Rilis Booster eksklusif toko turnamen.</p><br><p>Dengan setiap pembelian <b>10 paket</b> produk Vanguard Edisi Bahasa Inggris, Anda dapat menerima 1 paket PR gratis!<br>Ada 6 jenis kartu untuk dikumpulkan, dengan peluang mendapatkan foil paralel untuk setiap jenis! <br>※Selama persediaan masih ada, terbatas hanya di toko turnamen.</p><img src="https://s3-ap-northeast-1.amazonaws.com/en.cf-vanguard.com/wordpress/wp-content/uploads/D-Booster-Pack-04-Campaign-PR-Pack.jpg" class="rounded mx-auto d-block img-fluid" alt="News" width="1230" height="589"><a href="https://en.cf-vanguard.com/products/dbt04/">Klik di sini untuk info produk!</a><br><br><br><p>Karena Covid-19, kami sangat menyarankan pemain untuk menghubungi <a href="https://en.cf-vanguard.com/shop/">toko game lokal</a> Anda untuk mengonfirmasi ketersediaan produk dan mengatur pengiriman, dan untuk memprioritaskan keselamatan pribadi dan keselamatan orang-orang di sekitar Anda di atas segalanya.</p><br>'
        ]);

        Post::create([
            'bannerlink' => 'https://s3-ap-northeast-1.amazonaws.com/en.cf-vanguard.com/wordpress/wp-content/uploads/VG-if-_banner.jpg',
            'title' => 'Vanguard Animation Series',
            'category_id' => '2',
            'excerpt' => 'Kami dengan senang hati mengumumkan bahwa Cardfight baru kami!! Seri animasi Vanguard, Cardfight!!',
            'slug' => 'vanguard-animation-series',
            'desc' => '<p>Kami dengan senang hati mengumumkan bahwa Cardfight baru kami!! Seri animasi Vanguard, Cardfight!! Vanguard Extra Story -if-, akan tayang mulai 30 Mei 2020 (Sabtu)! Episode baru akan ditambahkan setiap minggu di saluran YouTube kami pada pukul 12:30 UTC!</p><br><p>Klik <a href="https://en.cf-vanguard.com/about-cardfight-vanguard/">di sini</a> untuk sinopsis serial ini.</p><br>'
        ]);

        Post::create([
            'bannerlink' => 'https://s3-ap-northeast-1.amazonaws.com/en.cf-vanguard.com/wordpress/wp-content/uploads/vg-beginner-top-banner.jpg',
            'title' => 'Tips Pemula dan Panduan Resmi tersedia sekarang!',
            'category_id' => '1',
            'excerpt' => 'Menampilkan kartu dari Seri Khusus 01: Koleksi Festival 2021, Klik disini untuk panduan!',
            'slug' => 'tips-pemula-dan-panduan-resmi-tersedia-sekarang!',
            'desc' => '<img src="https://s3-ap-northeast-1.amazonaws.com/en.cf-vanguard.com/wordpress/wp-content/uploads/dvs03_top.jpg" class="rounded mx-auto d-block img-fluid" alt="News" width="700" height="164"><br><p style="text-align: center">Menampilkan kartu dari Seri Khusus 01: Koleksi Festival 2021</p><br><p style="text-align: center"><a href="https://en.cf-vanguard.com/information/d_special_series_01_festival_collection_2021/">Klik disini untuk panduan!</a></p><br><br><img src="https://s3-ap-northeast-1.amazonaws.com/en.cf-vanguard.com/wordpress/wp-content/uploads/vgd-d-bt02-official-guide_top-v2.jpg" class="rounded mx-auto d-block img-fluid" alt="News" width="700" height="i64"><br><p style="text-align: center">Menampilkan kartu dari Booster Pack 02: A Brush with the Legends</p><br><p style="text-align: center"><a href="https://en.cf-vanguard.com/information/d_booster_pack_02_a_brush_with_the_legends/">Klik disini untuk panduan!</a></p><br><br><img src="https://s3-ap-northeast-1.amazonaws.com/en.cf-vanguard.com/wordpress/wp-content/uploads/Lyrical-Monatserio-Official-Guide_banner.jpg" class="rounded mx-auto d-block img-fluid" alt="News" width="700" height="i64"><br><p style="text-align: center">Menampilkan kartu dari Lyrical Trial Deck 01: Ahoy! Biara Liris!</p>
<p style="text-align: center">dan Paket Penguat Liris 01: Melodi Liris</p><br><p style="text-align: center"><a href="https://en.cf-vanguard.com/information/d_lyrical_booster_set_01_lyrical_melody/">Klik disini untuk panduan!</a></p><br>'
        ]);

        Post::create([
            'bannerlink' => 'https://s3-ap-northeast-1.amazonaws.com/en.cf-vanguard.com/wordpress/wp-content/uploads/V-EB15_after.jpg',
            'title' => 'Kesalahan dalam Produksi V-EB15 Twinkle Melody',
            'category_id' => '1',
            'excerpt' => 'Telah menjadi perhatian kami bahwa ada kesalahan dalam produksi V-EB15 Twinkle Melody yang menyebabkan V-EB15/020EN Glittery Baby, Lene tidak disertakan dalam beberapa tampilan.',
            'slug' => 'kesalahan-dalam-produksi-V-EB15-twinkle-melody',
            'desc' => '<p>Telah menjadi perhatian kami bahwa ada kesalahan dalam produksi <a href="https://en.cf-vanguard.com/products/veb15/">V-EB15 Twinkle Melody</a> yang menyebabkan <a href="https://en.cf-vanguard.com/cardlist/?cardno=V-EB15/020EN">V-EB15/020EN Glittery Baby, Lene</a> tidak disertakan dalam beberapa tampilan.</p><br><br><p>Untuk mengatasi masalah ini, kami akan menyediakan toko salinan V-EB15/020EN Glittery Baby, Lene untuk diberikan kepada pelanggan yang membeli tampilan V-EB15 Twinkle Melody. Kartu ini untuk sementara akan dikirimkan pada Maret 2021. Kami sangat menyarankan pemain untuk menghubungi <a href="https://en.cf-vanguard.com/shop/">toko game lokal<a/> Anda untuk mengonfirmasi detail koleksi.</p><br><br><p>Kami dengan tulus meminta maaf atas kelalaian ini dan ketidaknyamanan yang ditimbulkan, dan terima kasih atas dukungan Anda yang berkelanjutan.</p><br>'
        ]);

        Post::create([
            'bannerlink' => 'https://s3-ap-northeast-1.amazonaws.com/en.cf-vanguard.com/wordpress/wp-content/uploads/TRO_Announcement_VGD_202107.jpg',
            'title' => 'Touken Ranbu –ONLINE– rilis',
            'category_id' => '1',
            'excerpt' => 'Seperti yang terungkap di Anime Expo Lite, rilisan Touken Ranbu –ONLINE– yang sangat dinanti-nantikan akan menuju ke Cardfight Edisi Bahasa Inggris!! Pelopor di Januari 2022!',
            'slug' => 'touken-ranbu–online–rilis',
            'desc' => '<p>Seperti yang terungkap di Anime Expo Lite, rilisan Touken Ranbu –ONLINE– yang sangat dinanti-nantikan akan menuju ke Cardfight Edisi Bahasa Inggris!! Pelopor di Januari 2022!</p><br><br><p>Set kolaborasi untuk game browser populer ini dirilis pada tahun 2015 dan 2017 sebelumnya. Di dalamnya, pemain berperan sebagai seorang bijak yang dapat memanggil "touken danshi", pedang legendaris yang berbentuk manusia.</p><br><br><p>Title Trial Deck dan Title Booster akan dirilis untuk seri ini. Produk Trial Deck berisi dek pra-konstruksi yang dapat digunakan untuk bermain di rak, sementara produk Booster berisi kartu yang dapat digunakan untuk meningkatkan Trial Deck, dan juga membangun dek lainnya.</p><br><br><p>Informasi lebih lanjut akan diungkapkan di kemudian hari untuk produk ini, jadi pantau terus saluran resmi kami!</p><br>'
        ]);
    }
}
