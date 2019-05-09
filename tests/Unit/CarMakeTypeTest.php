<?php
namespace Tests\Unit;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Car;
class CarMakeTypeTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
    {
        $makeArray = ['ford','honda' ,'toyota'];
        #factory(Car::class)->create();
        $car =  Car::first();
        $this->assertContains( $car->make, $makeArray );
        $this->assertTrue(true);
    }
}