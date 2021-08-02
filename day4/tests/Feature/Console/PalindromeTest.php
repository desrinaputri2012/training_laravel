<?php

namespace Tests\Feature\Console;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PalindromeTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_palindrome1()
    {
        $this->artisan('palindrome Saya ingin pergi ke pasar')
            ->expectsOutput('No');
    }

    public function test_palindrome2()
    {
        $this->artisan('Kasur ini rusak')
            ->expectsOutput('Yes');
    }

    public function test_palindrome3()
    {
        $this->artisan('Ibu Ratna antar ubi')
            ->expectsOutput('Yes');
    }

    public function test_palindrome4()
    {
        $this->artisan('Aku suka rajawali, bapak. Apabila wajar, aku suka')
            ->expectsOutput('Yes');
    }
}
