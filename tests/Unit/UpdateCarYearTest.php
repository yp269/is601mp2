<?php
namespace Tests\Unit;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Car;
class UpdateCarYearTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
    {
        $data['year'] = '2000';
        $user = Car::first();
        $user->update($data);
        $this->assertInstanceOf(Car::class, $user);
        $this->assertEquals($data['year'], $user->year);
    }
}