<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ProductTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_get_products(): void
    {
        $response = $this->get('/api/product');

        $response->assertStatus(200);
    }

    public function test_create_product(): void
    {
        $response = $this->post('/api/product', [
            'name'  => 'test',
            'sku'   => 'sku_test',
            'price' => 1000
        ]);

        $response->assertStatus(201);
    }

    public function test_get_product(): void
    {
        $response = $this->get('/api/product/1');

        $response->assertStatus(200);
    }

    public function test_get_empty_product(): void
    {
        $response = $this->get('/api/product/101010');

        $response->assertStatus(200)
            ->assertJsonPath('data', []);
    }
}
