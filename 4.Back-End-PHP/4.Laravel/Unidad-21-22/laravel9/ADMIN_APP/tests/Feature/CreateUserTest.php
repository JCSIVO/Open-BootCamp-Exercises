<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Str;
use App\Models\User;
use Illuminate\Contracts\cache\Store;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;


class CreateUserTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_register_url_exists()
    {
        $response = $this->get('/register');
      

        $response->assertStatus(200);
    }
    public function test_post_request_with_invalid_input()
    {
        $response = $this->post('/register', [
            'name' =>'User Testing',
            'locale' => 'es',
            'password' => 'asdf'
        ]);
        $response->assertStatus(400);
    }
    public function test_post_request_with_valid_input()
    {
        $response = $this->post('/register', [
            'name' =>'User Testing',
            'email' => Str::random(10) . '@example.net',
            'locale' => 'es',
            'password' => 'asdf'
        ]);
        $response->assertSuccessful();
    }
    public function test_user_cant_create_user(){
        $user = User::find(1);

        $response = $this->actingAs($user)->withSession(['logged' => true])->post('/register', [
                'name' =>'User Testing',
                'email' => Str::random(10) . '@example.net',
                'locale' => 'es',
                'password' => 'asdf'
            ]);
               $response->assertForbidden();
    }
    public function test_create_with_header(){
        /*$nonce = time();
        $response = $this->withHeaders([
            // Tipicamente un parámetro nonce es un número que nunca puede tener un valor menor que en su petición anterior
            'nonce' => $nonce
        ])->get('/');
        
        $response->assertSuccessful();*/
    }

    public function test_interaction_with_json(){
        $response = $this->postJson('/', ['nonce' => time()]);
        $response->assertJson(['response' =>true]);
        // $response->assertExactJson(['response' => true, 'time' => 1234]);
        $response->assertHeader('content-type', 'application/json');
        // $response ->dumpHeaders();
        // $response->dumpSession();
        // $response->dump();
    }
    public function test_file_upload(){
        Storage::fake('avatars');
        $file = UploadedFile::fake()->image('avatar.jpg');

        $response = $this->post('/avatar', [
            'file' => $file
        ]);
        Storage::disk('avatars')->assertExists($file->hashName()); //assertMissing
    }
    public function test_welcome_view(){
        $name = 'jose';
        $response = $this->get('/' . $name);

        $response->assertSee($name);
    }
    public function test_create_user_event_listener(){
        $this->mock(MyCustomEventListener::class);
        $this->mock(MyCustomEvent::class);
    }
}
