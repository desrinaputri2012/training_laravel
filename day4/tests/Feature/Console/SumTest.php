<?php

namespace Tests\Feature\Console;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class SumTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_sum_five_values()
    {
        $this->artisan('aritmatika 1 4 5 2 3')
            ->expectsOutput('15');
    }

    public function test_multiply_three_values()
    {
        $this->artisan('aritmatika 3 5 8')
            ->expectsOutput('120');
    }

    public function test_divide_three_values()
    {
        $this->artisan('aritmatika 100 5 2')
            ->expectsOutput('10');
    }
}
