<?php
namespace Tests\Unit;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Car;
class InsertCarTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
    {
        $data =  [
            'make' => 'ford',
            'model' => 'Test Model',
            'year' => 2019,
        ];
        $car = Car::create($data);
        $this->assertInstanceOf(Car::class, $car);
        $this->assertEquals($data['make'], $car->make);
        $this->assertEquals($data['model'], $car->model);
        $this->assertEquals($data['year'], $car->year);
    }
}