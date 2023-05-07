<?php

namespace Database\Seeders;

use App\Models\contact;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        contact::create([
            'location' => 'Gresik, Kembangan, Kec. Kebomas, Kabupaten Gresik, Jawa Timur 61122',
            'email' => 'info@gresikmigas.co.id',
            'phone' => '031-99006530',
            'map' => '<div id="wrapper-9cd199b9cc5410cd3b1ad21cab2e54d3">
            <div id="map-9cd199b9cc5410cd3b1ad21cab2e54d3"></div><script>(function () {
                var setting = {"height":540,"width":1500,"zoom":17,"queryString":"PT. Gresik Migas, Jalan Doktor Wahidin Sudiro Husodo, Kembangan, Gresik Regency, East Java, Indonesia","place_id":"ChIJU1mtXUEA2C0Rl51b7dXYA_I","satellite":false,"centerCoord":[-7.166564301996721,112.60606645],"cid":"0xf203d8d5ed5b9d97","lang":"en","cityUrl":"/indonesia/surabaya-10303","cityAnchorText":"Map of Surabaya, Java, Indonesia","id":"map-9cd199b9cc5410cd3b1ad21cab2e54d3","embed_id":"918550"};
                var d = document;
                var s = d.createElement("script");
                s.src = "https://1map.com/js/script-for-user.js?embed_id=918550";
                s.async = true;
                s.onload = function (e) {
                  window.OneMap.initMap(setting)
                };
                var to = d.getElementsByTagName("script")[0];
                to.parentNode.insertBefore(s, to);
              })();</script><a href="https://1map.com/map-embed">1 Map</a>
          </div>'
        ]);
    }
}
