<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(10)->create();
        Product::factory(20)->create();
        // Product::create([
        //     'title' => 'Produk Pertama',
        //     'slug' => 'produk-pertama',
        //     'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vel officiis et consequuntur corporis dicta provident impedit molestiae ex ipsam temporibus assumenda necessitatibus amet molestias, tempore commodi at eveniet aperiam quidem.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil velit vel consectetur. Repellat voluptatem tempora quisquam illo quos, laboriosam voluptate vero voluptates ullam blanditiis provident ipsam aliquid, quidem iusto iste laborum debitis eius facilis cupiditate dolore voluptatum? Soluta, saepe veniam voluptatem neque adipisci natus quidem dolorem iste minima suscipit. Voluptatem nesciunt sunt impedit tempora accusantium nostrum optio voluptates blanditiis sapiente! Perferendis nam, optio architecto hic exercitationem, error libero voluptate nihil dolore quos, reprehenderit aspernatur vero! Deleniti earum, nemo quis rerum obcaecati aspernatur consectetur temporibus aliquid dolor, assumenda ut quo, doloremque cumque. Molestias possimus vitae, laboriosam accusantium tempora eius dolor repellat?'
        // ]);

        // Product::create([
        //     'title' => 'Produk Kedua',
        //     'slug' => 'produk-kedua',
        //     'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vel officiis et consequuntur corporis dicta provident impedit molestiae ex ipsam temporibus assumenda necessitatibus amet molestias, tempore commodi at eveniet aperiam quidem.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil velit vel consectetur. Repellat voluptatem tempora quisquam illo quos, laboriosam voluptate vero voluptates ullam blanditiis provident ipsam aliquid, quidem iusto iste laborum debitis eius facilis cupiditate dolore voluptatum? Soluta, saepe veniam voluptatem neque adipisci natus quidem dolorem iste minima suscipit. Voluptatem nesciunt sunt impedit tempora accusantium nostrum optio voluptates blanditiis sapiente! Perferendis nam, optio architecto hic exercitationem, error libero voluptate nihil dolore quos, reprehenderit aspernatur vero! Deleniti earum, nemo quis rerum obcaecati aspernatur consectetur temporibus aliquid dolor, assumenda ut quo, doloremque cumque. Molestias possimus vitae, laboriosam accusantium tempora eius dolor repellat?'
        // ]);

        // Product::create([
        //     'title' => 'Produk Ketiga',
        //     'slug' => 'produk-ketiga',
        //     'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vel officiis et consequuntur corporis dicta provident impedit molestiae ex ipsam temporibus assumenda necessitatibus amet molestias, tempore commodi at eveniet aperiam quidem.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil velit vel consectetur. Repellat voluptatem tempora quisquam illo quos, laboriosam voluptate vero voluptates ullam blanditiis provident ipsam aliquid, quidem iusto iste laborum debitis eius facilis cupiditate dolore voluptatum? Soluta, saepe veniam voluptatem neque adipisci natus quidem dolorem iste minima suscipit. Voluptatem nesciunt sunt impedit tempora accusantium nostrum optio voluptates blanditiis sapiente! Perferendis nam, optio architecto hic exercitationem, error libero voluptate nihil dolore quos, reprehenderit aspernatur vero! Deleniti earum, nemo quis rerum obcaecati aspernatur consectetur temporibus aliquid dolor, assumenda ut quo, doloremque cumque. Molestias possimus vitae, laboriosam accusantium tempora eius dolor repellat?'
        // ]);

        // Product::create([
        //     'title' => 'Produk Keempat',
        //     'slug' => 'produk-keempat',
        //     'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vel officiis et consequuntur corporis dicta provident impedit molestiae ex ipsam temporibus assumenda necessitatibus amet molestias, tempore commodi at eveniet aperiam quidem.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil velit vel consectetur. Repellat voluptatem tempora quisquam illo quos, laboriosam voluptate vero voluptates ullam blanditiis provident ipsam aliquid, quidem iusto iste laborum debitis eius facilis cupiditate dolore voluptatum? Soluta, saepe veniam voluptatem neque adipisci natus quidem dolorem iste minima suscipit. Voluptatem nesciunt sunt impedit tempora accusantium nostrum optio voluptates blanditiis sapiente! Perferendis nam, optio architecto hic exercitationem, error libero voluptate nihil dolore quos, reprehenderit aspernatur vero! Deleniti earum, nemo quis rerum obcaecati aspernatur consectetur temporibus aliquid dolor, assumenda ut quo, doloremque cumque. Molestias possimus vitae, laboriosam accusantium tempora eius dolor repellat?'
        // ]);

        // Product::create([
        //     'title' => 'Produk Kelima',
        //     'slug' => 'produk-kelima',
        //     'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vel officiis et consequuntur corporis dicta provident impedit molestiae ex ipsam temporibus assumenda necessitatibus amet molestias, tempore commodi at eveniet aperiam quidem.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil velit vel consectetur. Repellat voluptatem tempora quisquam illo quos, laboriosam voluptate vero voluptates ullam blanditiis provident ipsam aliquid, quidem iusto iste laborum debitis eius facilis cupiditate dolore voluptatum? Soluta, saepe veniam voluptatem neque adipisci natus quidem dolorem iste minima suscipit. Voluptatem nesciunt sunt impedit tempora accusantium nostrum optio voluptates blanditiis sapiente! Perferendis nam, optio architecto hic exercitationem, error libero voluptate nihil dolore quos, reprehenderit aspernatur vero! Deleniti earum, nemo quis rerum obcaecati aspernatur consectetur temporibus aliquid dolor, assumenda ut quo, doloremque cumque. Molestias possimus vitae, laboriosam accusantium tempora eius dolor repellat?'
        // ]);

        // Product::create([
        //     'title' => 'Produk Keenam',
        //     'slug' => 'produk-keenam',
        //     'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vel officiis et consequuntur corporis dicta provident impedit molestiae ex ipsam temporibus assumenda necessitatibus amet molestias, tempore commodi at eveniet aperiam quidem.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil velit vel consectetur. Repellat voluptatem tempora quisquam illo quos, laboriosam voluptate vero voluptates ullam blanditiis provident ipsam aliquid, quidem iusto iste laborum debitis eius facilis cupiditate dolore voluptatum? Soluta, saepe veniam voluptatem neque adipisci natus quidem dolorem iste minima suscipit. Voluptatem nesciunt sunt impedit tempora accusantium nostrum optio voluptates blanditiis sapiente! Perferendis nam, optio architecto hic exercitationem, error libero voluptate nihil dolore quos, reprehenderit aspernatur vero! Deleniti earum, nemo quis rerum obcaecati aspernatur consectetur temporibus aliquid dolor, assumenda ut quo, doloremque cumque. Molestias possimus vitae, laboriosam accusantium tempora eius dolor repellat?'
        // ]);
    }
}

