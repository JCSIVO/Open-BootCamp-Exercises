<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Users;
use App\Models\CampaingReceptor;
use App\Models\Campaing;
use App\Notification\GenericNotification;

class SendEmailsCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'send:emails';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Comando encargadode enviar en segundo plano los emails de mi campaña de marketing';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $campaingToSend = Campaing::withCount('receptors')->having('receptos_count', 0)->get();
        $this->withProgressBar($campaingToSend, function($c){
            $receptors = User::where('type_id', $c->type_id)->whereNotNull('email_verified_at')->get();
                foreach($receptors as $r){
                    $email = "mycompany@mycompny.net";
                    $cr = CampaingReceptor::create([
                        'campaing_id' => $c->id,
                        'user_id' => $r->id
                    ]);
                    try {
                        $r->notify(new GenericNotification(""));
                        $cr->update([
                            'sent' => true,
                            'error' => false
                        ]);
                        if(!$this->confirm("Se ha enviado el email correctamente a " . $r->email . "¿Desea continuar enviadno emails?", true));
                            $this->line("Se cancela el envio de emails");
                            return 0;
                    } catch (\Exception $e) {
                        $this->error("No se ha podido emviar el email a " . $r->email);
                        $cr->update([
                            'sent' => true,
                            'error' => true
                        ]);
                    }
                }
        });
        return Command::SUCCESS;
    }
}
