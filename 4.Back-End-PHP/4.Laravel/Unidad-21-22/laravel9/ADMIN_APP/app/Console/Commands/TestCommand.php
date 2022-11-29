<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\User;
use App\Authorization\authorization;
use Artisan;

class TestCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    // {name?} {surname} {--p|print} {--name=*} {name?*} {name : Este es mi argumento de print}
    // {--p|print=default: Esta es mi opción de nombre}
    protected $signature = 'test:command '; 

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Aquí amplio la información de mi comando';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {

        $user = User::find(50);
        var_dump($user);
        dd($user);


        return 0;

        /*$output = Artisan::call('make:migration create_table_from artisan_2 --create=artisan_table_2');
        $output = Artisan::call('make:migration',[ 
            'name' =>'create_table_from_artisan',
            '--create' => 'artisan_table'
        ]); // call('route:list') make:mail EmailFromArtisan
        print_r($output);

        return 0;



        $users = User::limit(10)->get();

        $bar = $this->output->createProgressBar(count($users));

        $bar->start();

        foreach($users as $u){
            sleep(1);
            $bar->advance();
        }
        $bar->finish();

        return 0;
        $users = $this->withProgressBar(User::limit(10)->get(),function($user){
            sleep(1);
        });
        return 0;
        $users = User::selectRaw('name,lastname')->limit(3)->get()->toArray();
        $this->table(
            ['Name','Lastname'],
            $users
        );
        return 0;


        $name = $this->anticipate('¿Quién eres?', ['Blanca', 'Jose'], 'jOSE');
        $this->line("Tu nombre es:  $name");
        $this->info("Te llamas $name");
        $this->comment("Te llamas $name");
        $this->question("Te llamas $name");
        $this->warn("Te llamas $name");
        $this->newLine(2); // hace dos saltos de linea
        $this->error("Te llamas $name");

        /*$this->ask();
        $this->secret();
        $this->confirm();
        $this->anticipate();
        $this->choice();*/

        // $name = $this->anticipate('¿Quién eres?', ['Blanca', 'Jose'], 'jOSE');
        // print_r($name);

        /*$i = 1; // para cambiar la opcion por defecto con el true o sin nada
        while($this->confirm('¿Quieres continuar ?', true)){
            echo $i++;
        }*/

        /*$name = $this->choice(
            '¿Quién eres?',
            ['Jose', 'Blanca'],
            1, // valor pòr defecto
            2, // numero de intentos
            true // selección múltiple
        );
        // echo $name;
        print_r($name);

        // $name = $this->ask('¿Cuál es tu nombre?');
        // $name = $this->ask('¿Cuál es el nombre del usuario?');
        // echo "Hola, $name";
        // $password = $this->secret('¿Cuál es la contraseña del usuario?');
        // echo "Hola, $password";
        
        // $option = $this->option('print');
        // $si = ($option)?'Si': 'No';
        // echo "$si se ha especificado la opticón print\n";
        // $argument = $this->argument('name');
        // print_r($argument);
        // $option = $this->option('name');
        // print_r($option);
        // $si = ($option)?'Si': 'No';
        // echo "$si se ha especificado la opticón name y es $option";
        // $name = $this->argument('name');
        // $surname = $this->argument('surname');
        // echo "HoLa $name $surname";
        // echo Authorization::test();
        // User::find(256)->delete();
        // $users = User::all(); //User::limit(10)->get()->toArray();
        /*$newUser = [
            'name' => 'name',
            'email' => 'email',
            'password' => 'password',
            'locale' => 'es',
            'role_id' => 1,
            'type_id' => 1,
        ];
        User::create($newUser);*/
        // print_r($users);
        // $helloWorld = "Hola MUndo";
        // echo $helloWorld;
        // echo "Hola";
        // $this->_helloWorld();
        return Command::SUCCESS;
    }

    /*private function _hellWorld(){
        echo "Hola";
    }*/
}
