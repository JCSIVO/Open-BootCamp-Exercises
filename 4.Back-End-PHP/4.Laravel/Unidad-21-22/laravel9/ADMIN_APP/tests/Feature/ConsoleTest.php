<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ConsoleTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_inspire()
    {
        $response = $this->artisan('inspire');

        $response->assertExitCode(0); // 1 falla
    }

    public function test_question(){
        $ask = $this->option('ask');
        if(!$ask) return  0;
        $response = $this->artisan('question')
            ->expectsQuestion("What is your name?", "JCSIVO") 
            // ->expectsQuestion("Which language do you prefer?", "PHP")
            // ->expectsConfirmation("Do you confirm that you prefer that language?", 'yes')
            ->expectsChoice("Which language do you prefer?", "PHP", [
                'PHP',
                'Ruby',
                'Python'
            ])->expectsOutput('Your name is JCSIVO and you prefer PHP.');
             // ->doesntExpectOutput("you name is Taylor Swift and you prefer non code");

        $response->assertSuccessful(); // $response->assertExitCode(0);
    }
}
