<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class product_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            'name'=>'Hisense 507 litres ',
            "price"=>"80000",
            "description"=>"New-gen frige French Door Refrigerator",
            "category"=>"frige",
            "gallery"=>"https://www.reliancedigital.in/medias/Hisense-RQ561N4ASN-Refrigerators-491891829-i-1-1200Wx1200H?context=bWFzdGVyfGltYWdlc3wxNDQ2NTJ8aW1hZ2UvanBlZ3xpbWFnZXMvaDIwL2g2ZS85MzY5OTk0MDAyNDYyLmpwZ3xlNzMxZmI4N2ViMjBlYjQ5OWM0NDMwYjRhZTM2NTNhYWMyYzBhMDQzMmQ2OTQyNDAwYmQ2OWU1YTE5NzhhNTg0",
            
            ]);
    }
}
