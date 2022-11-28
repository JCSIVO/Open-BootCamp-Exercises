<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Events\PostReadedEvent;

class PostsController extends Controller
{
    public function index(){

        $latestPost = Post::with(['category','author'])->orderBy('created_at','desc')->limit(10)->get();

        // event(new PostReadedEvent($latestPost)); // Lanza un evento

        // die();

        return view('blog.index',[
            'posts' =>$latestPost
        ]);
    }

    public function feed($format){
        // $latestPost = Post::with(['category','author'])->orderBy('created_at','desc')->limit(10)->get();
        $latestPost = Post::with(['category','author'])
            ->withSum('author as suma_personalizada','id')  // Relación, columna
            ->withMax('author', 'id') // Relación, columna
            ->withMin('author', 'id') // Relación, columna
            ->withCount('author') 
            ->withExists('author as exists_author') 
            ->orderBy('created_at','desc')
            ->limit(10)->get(); // withSum withAvg withMax withMin


        /*$event = new PostReadedEvent($latestPost);
        event($event); // Lanza un evento*/
        // event(new PostReadedEvent($latestPost)); // otra manera de hacerlo
        
        Post::create([
            'category_id' => 1,
            'title' => 'Titulo de prueba',
            'content' => 'Contenido de prueba'
        ]);
        
        die();




        // print_r($latestPost[0]->custom);
        // die();
        $contentType = null;
        $response = null;
        switch ($format) {
            case 'json':
                $response = $latestPost->append(['second_custom'])->toJson(); // Ocultar makeHidden // visible makeVisible
                $contentType = 'application/json';

                break;
            default:
                $response = $latestPost->toArray();
                $contentType = 'text/html';

                break;
        }
       
        // return $latestPost->toJson();
        return response($response)->header('content-type',$contentType)/*->json($latestPost)*/;

    }

    public function find($uri){

    }
    public function save(Request $request){

    }
    public function delete($id){

    }
}
