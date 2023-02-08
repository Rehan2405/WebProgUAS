<?php

namespace Database\Seeders;

use App\Models\Cart;
use App\Models\Item;
use App\Models\Welcome;
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
        // \App\Models\User::factory(10)->create();

        Welcome::create([
            'image' => 'https://www.static-src.com/wcsstore/Indraprastha/images/catalog/full//95/MTA-2433389/freshbox_freshbox_melon_hijau_buah_-1-5_-_2_kg-_full01_o95o011g.jpg',
            'name' => 'Melon',
            'desc' => 'Melon, Segar Lohhh!!!',
            'price' => 150000
        ]);
        Welcome::create([
            'image' => 'https://images.tokopedia.net/img/cache/500-square/VqbcmM/2021/10/1/f4483610-dddc-4d38-8bd8-a3722179876d.jpg',
            'name' => 'Mangga',
            'desc' => 'Siang Siang enaknya beli mangga aja',
            'price' => 50000
        ]);
        Welcome::create([
            'image' => 'https://cdn-brilio-net.akamaized.net/community/2018/09/12/13793/ayo-nikmati-apel-rebus-yang-ternyata-sangat-baik-untuk-kesehatan.jpg',
            'name' => 'Apel',
            'desc' => 'Apel enak banget tau mau di bikin jus atau di makan langsung, apa lagi di apelin',
            'price' => 120000
        ]);

        Welcome::create([
            'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/8/8a/Banana-Single.jpg/2324px-Banana-Single.jpg',
            'name' => 'Banana',
            'desc' => 'BA BA BA, BA BA NANA',
            'price' => 100000
        ]);

        Welcome::create([
            'image' => 'https://i0.wp.com/resepkoki.id/wp-content/uploads/2017/04/Red-grapes.jpg?fit=800%2C648&ssl=1',
            'name' => 'Banana',
            'desc' => 'Anggur Segar baru saja di ambil dari perkebunan yang seperti anak sendiri, ingat ya bukan anggur minuman',
            'price' => 300000
        ]);
        

        Cart::create([
            'image' => 'https://www.static-src.com/wcsstore/Indraprastha/images/catalog/full//95/MTA-2433389/freshbox_freshbox_melon_hijau_buah_-1-5_-_2_kg-_full01_o95o011g.jpg',
            'name' => 'Melon',
            'desc' => 'Melon, Segar Lohhh!!!',
            'price' => 150000
        ]);
        Cart::create([
            'image' => 'https://images.tokopedia.net/img/cache/500-square/VqbcmM/2021/10/1/f4483610-dddc-4d38-8bd8-a3722179876d.jpg',
            'name' => 'Mangga',
            'desc' => 'Siang Siang enaknya beli mangga aja',
            'price' => 50000
        ]);

        Cart::create([
            'image' => 'https://cdn-brilio-net.akamaized.net/community/2018/09/12/13793/ayo-nikmati-apel-rebus-yang-ternyata-sangat-baik-untuk-kesehatan.jpg',
            'name' => 'Apel',
            'desc' => 'Apel enak banget tau mau di bikin jus atau di makan langsung, apa lagi di apelin',
            'price' => 120000
        ]);

        Cart::create([
            'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/8/8a/Banana-Single.jpg/2324px-Banana-Single.jpg',
            'name' => 'Banana',
            'desc' => 'BA BA BA, BA BA NANA',
            'price' => 900000
        ]);

        Cart::create([
            'image' => 'https://i0.wp.com/resepkoki.id/wp-content/uploads/2017/04/Red-grapes.jpg?fit=800%2C648&ssl=1',
            'name' => 'Anggur',
            'desc' => 'Anggur Segar baru saja di ambil dari perkebunan yang seperti anak sendiri, ingat ya bukan anggur minuman',
            'price' => 100000
        ]);
        
        Item::create([
            'image' => 'https://www.static-src.com/wcsstore/Indraprastha/images/catalog/full//95/MTA-2433389/freshbox_freshbox_melon_hijau_buah_-1-5_-_2_kg-_full01_o95o011g.jpg',
            'name' => 'Melon',
            'desc' => 'Melon, Segar Lohhh!!!',
            'price' => 150000
        ]);

        Item::create([
            'image' => 'https://images.tokopedia.net/img/cache/500-square/VqbcmM/2021/10/1/f4483610-dddc-4d38-8bd8-a3722179876d.jpg',
            'name' => 'Mangga',
            'desc' => 'Siang Siang enaknya beli mangga aja',
            'price' => 50000
        ]);

        Item::create([
            'image' => 'https://cdn-brilio-net.akamaized.net/community/2018/09/12/13793/ayo-nikmati-apel-rebus-yang-ternyata-sangat-baik-untuk-kesehatan.jpg',
            'name' => 'Apel',
            'desc' => 'Apel enak banget tau mau di bikin jus atau di makan langsung, apa lagi di apelin',
            'price' => 120000
        ]);

        Item::create([
            'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/8/8a/Banana-Single.jpg/2324px-Banana-Single.jpg',
            'name' => 'Banana',
            'desc' => 'BA BA BA, BA BA NANA',
            'price' => 900000
        ]);
        Item::create([
            'image' => 'https://i0.wp.com/resepkoki.id/wp-content/uploads/2017/04/Red-grapes.jpg?fit=800%2C648&ssl=1',
            'name' => 'Anggur',
            'desc' => 'Anggur Segar baru saja di ambil dari perkebunan yang seperti anak sendiri, ingat ya bukan anggur minuman',
            'price' => 300000
        ]);
        Welcome::create([
            'image' => 'https://www.static-src.com/wcsstore/Indraprastha/images/catalog/full//95/MTA-2433389/freshbox_freshbox_melon_hijau_buah_-1-5_-_2_kg-_full01_o95o011g.jpg',
            'name' => 'Melon',
            'desc' => 'Melon, Segar Lohhh!!!',
            'price' => 150000
        ]);
        Welcome::create([
            'image' => 'https://images.tokopedia.net/img/cache/500-square/VqbcmM/2021/10/1/f4483610-dddc-4d38-8bd8-a3722179876d.jpg',
            'name' => 'Mangga',
            'desc' => 'Siang Siang enaknya beli mangga aja',
            'price' => 50000
        ]);
        Welcome::create([
            'image' => 'https://cdn-brilio-net.akamaized.net/community/2018/09/12/13793/ayo-nikmati-apel-rebus-yang-ternyata-sangat-baik-untuk-kesehatan.jpg',
            'name' => 'Apel',
            'desc' => 'Apel enak banget tau mau di bikin jus atau di makan langsung, apa lagi di apelin',
            'price' => 120000
        ]);

        Welcome::create([
            'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/8/8a/Banana-Single.jpg/2324px-Banana-Single.jpg',
            'name' => 'Banana',
            'desc' => 'BA BA BA, BA BA NANA',
            'price' => 100000
        ]);

        Welcome::create([
            'image' => 'https://i0.wp.com/resepkoki.id/wp-content/uploads/2017/04/Red-grapes.jpg?fit=800%2C648&ssl=1',
            'name' => 'Banana',
            'desc' => 'Anggur Segar baru saja di ambil dari perkebunan yang seperti anak sendiri, ingat ya bukan anggur minuman',
            'price' => 300000
        ]);
        

        Cart::create([
            'image' => 'https://www.static-src.com/wcsstore/Indraprastha/images/catalog/full//95/MTA-2433389/freshbox_freshbox_melon_hijau_buah_-1-5_-_2_kg-_full01_o95o011g.jpg',
            'name' => 'Melon',
            'desc' => 'Melon, Segar Lohhh!!!',
            'price' => 150000
        ]);
        Cart::create([
            'image' => 'https://images.tokopedia.net/img/cache/500-square/VqbcmM/2021/10/1/f4483610-dddc-4d38-8bd8-a3722179876d.jpg',
            'name' => 'Mangga',
            'desc' => 'Siang Siang enaknya beli mangga aja',
            'price' => 50000
        ]);

        Cart::create([
            'image' => 'https://cdn-brilio-net.akamaized.net/community/2018/09/12/13793/ayo-nikmati-apel-rebus-yang-ternyata-sangat-baik-untuk-kesehatan.jpg',
            'name' => 'Apel',
            'desc' => 'Apel enak banget tau mau di bikin jus atau di makan langsung, apa lagi di apelin',
            'price' => 120000
        ]);

        Cart::create([
            'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/8/8a/Banana-Single.jpg/2324px-Banana-Single.jpg',
            'name' => 'Banana',
            'desc' => 'BA BA BA, BA BA NANA',
            'price' => 900000
        ]);

        Cart::create([
            'image' => 'https://i0.wp.com/resepkoki.id/wp-content/uploads/2017/04/Red-grapes.jpg?fit=800%2C648&ssl=1',
            'name' => 'Anggur',
            'desc' => 'Anggur Segar baru saja di ambil dari perkebunan yang seperti anak sendiri, ingat ya bukan anggur minuman',
            'price' => 100000
        ]);
        
        Item::create([
            'image' => 'https://www.static-src.com/wcsstore/Indraprastha/images/catalog/full//95/MTA-2433389/freshbox_freshbox_melon_hijau_buah_-1-5_-_2_kg-_full01_o95o011g.jpg',
            'name' => 'Melon',
            'desc' => 'Melon, Segar Lohhh!!!',
            'price' => 150000
        ]);

        Item::create([
            'image' => 'https://images.tokopedia.net/img/cache/500-square/VqbcmM/2021/10/1/f4483610-dddc-4d38-8bd8-a3722179876d.jpg',
            'name' => 'Mangga',
            'desc' => 'Siang Siang enaknya beli mangga aja',
            'price' => 50000
        ]);

        Item::create([
            'image' => 'https://cdn-brilio-net.akamaized.net/community/2018/09/12/13793/ayo-nikmati-apel-rebus-yang-ternyata-sangat-baik-untuk-kesehatan.jpg',
            'name' => 'Apel',
            'desc' => 'Apel enak banget tau mau di bikin jus atau di makan langsung, apa lagi di apelin',
            'price' => 120000
        ]);

        Item::create([
            'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/8/8a/Banana-Single.jpg/2324px-Banana-Single.jpg',
            'name' => 'Banana',
            'desc' => 'BA BA BA, BA BA NANA',
            'price' => 900000
        ]);
        Item::create([
            'image' => 'https://i0.wp.com/resepkoki.id/wp-content/uploads/2017/04/Red-grapes.jpg?fit=800%2C648&ssl=1',
            'name' => 'Anggur',
            'desc' => 'Anggur Segar baru saja di ambil dari perkebunan yang seperti anak sendiri, ingat ya bukan anggur minuman',
            'price' => 300000
        ]);
        
    }
}
