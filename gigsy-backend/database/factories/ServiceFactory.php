<?php

namespace Database\Factories;

use App\Models\Categorie;
use App\Models\Seller;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ServiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'slug' => $this->faker->slug,
            'description' => $this->faker->paragraph,
            'tags' => json_encode(
                [Str::random(6), Str::random(6)]
            ),
            'faq' => json_encode(["q1" => $this->faker->paragraph]),
            'price' => $this->faker->randomNumber(),
            'livraison' => $this->faker->randomNumber(),
            'seller_id' => $this->faker->randomElement(Seller::pluck('id')->toArray()),
            'status' => 1,
            'galeries' => json_encode(
                ['https://fiverr-res.cloudinary.com/q_auto,f_auto,w_550,dpr_1.0/v1/attachments/generic_asset/asset/055f758c1f5b3a1ab38c047dce553860-1598561741668/seo-2x.png', 'https://fiverr-res.cloudinary.com/q_auto,f_auto,w_550,dpr_1.0/v1/attachments/generic_asset/asset/055f758c1f5b3a1ab38c047dce553860-1598561741668/seo-2x.png']
            ),
            'image' => 'https://fiverr-res.cloudinary.com/q_auto,f_auto,w_550,dpr_1.0/v1/attachments/generic_asset/asset/055f758c1f5b3a1ab38c047dce553860-1598561741668/seo-2x.png',
        ];
    }
}
