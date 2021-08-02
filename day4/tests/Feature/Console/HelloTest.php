<?php

namespace Tests\Feature\Console;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class HelloTest extends TestCase
{
    /** @test */
    // public function test_hello_world_output()
    // {
    //     $this->artisan('hello')
    //         ->expectsOutput('Hello World!');
    // }

    // public function test_hello_world_with_name()
    // {
    //     $this->artisan('hello Someone')
    //         ->expectsOutput('Hello Someone!');
    // }

    // public function test_repeat_hello()
    // {
    //     $this->artisan('hello --repeat=3')
    //         ->expectsOutput('Hello World! Hello World! Hello World!');
    // }

    public function test_string_transformation_lowercase()
    {
        $this->artisan('hello-world --lowercase')
            ->expectsOutput('i am crazy text');
    }

    public function test_string_transformation_uppercase()
    {
        $this->artisan('hello-world --uppercase')
            ->expectsOutput('I AM CRAZY TEXT');
    }

    public function test_string_transformation_camelcase()
    {
        $this->artisan('hello-world --ucwords')
            ->expectsOutput('I Am Crazy Text');
    }

}