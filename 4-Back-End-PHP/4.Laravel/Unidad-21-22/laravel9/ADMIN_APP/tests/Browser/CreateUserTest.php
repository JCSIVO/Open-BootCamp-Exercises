<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;
use App\Models\User;


class CreateUserTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testExample()
    {
        $user = User::find(1);
        $this->browse(function (Browser $browser) use ($user) {
           

            $browser->visit('/login')
                    ->type('#email', $user->email)
                    ->type('#password', 'asdf1234')
                    ->submit();
                    // ->assertSee('Laravel');
                    // ->assertDontSee('jcsivo');
            $browser->assertPathIs('/home'); //->dump();


            $browser->back();
            $browser->forward();
            $browser->refresh();
            $browser->resize();
            $browser->maximize(100,100);
            $browser->loginAs($user);
            $browser->script([]);
            $browser->screenshot('sc.jpg');
            $browser->cookie([]); // planCooke('name')
            $browser->click('button.submit-button');
            $browser->value('input.number-box', 1234);

        });
    }
}
