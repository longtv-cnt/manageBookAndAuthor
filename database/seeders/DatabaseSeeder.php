<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

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

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        DB::table('author')->insert([
            'nickname'=>'A1',
            "fullname"=> 'Nguyễn Tiến Sỹ',
            "address"=>"HaNoi",
            "email"=>"synt@gmail.com",
            "phone_number"=>"0934893343",
            "created_at"=>date('Y-m-d H:s:i'),
            "updated_at"=>date('Y-m-d H:s:i')

        ]);
    }
}
