<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Models\User;

class CreateNewTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {
        User::create([
            'name' =>'User Testing',
            'email' => 'usertesting@example.net',
            'locale' => 'es',
            'password' => 'asdf'

        ]);
        $this->assertTrue(true);
    }
}
