<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\Buyer;
use App\Models\Categorie;
use App\Models\Seller;
use App\Models\Service;
use App\Models\User;
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
        Admin::factory(10)->create()->each(function ($admin) {
            User::factory(1)->create(array('userable_id' => $admin->id, 'userable_type' => Admin::class));
        });
        Buyer::factory(10)->create()->each(function ($buyer) {
            User::factory(1)->create(array('userable_id' => $buyer->id, 'userable_type' => Buyer::class));
        });
        Seller::factory(10)->create()->each(function ($seller) {
            User::factory(1)->create(array('userable_id' => $seller->id, 'userable_type' => Seller::class));
        });

        // Categorie::factory(10)->create()->each(function ($service) {
        //     Service::factory(10)->create([
        //         "service_id"=>$service->id
        //     ]);
        // });
    }
}
