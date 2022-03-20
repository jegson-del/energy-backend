<?php

namespace Tests\Unit;


use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\Response;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic test example.
     *
     * @return void
     */

    public function test_quotations_endpoint()
    {
        $response = $this->get('api/quotations');
        $response->assertStatus(Response::HTTP_OK);
    }

    public function test_customer_enquiry_can_be_created()
    {
        $response = $this->postJson('api/enquiry', [
            'postcode' => '24 27h',
            'email' => 'del@mail.com',
            'energy' => 'gas and electric',
            'street_name' => 'hallway',
            'house_number' => '20',
            'house_type' => 'terrace',
            'energy_usage' => 'low',
        ]);

        $response->assertStatus(200);
    }
}
