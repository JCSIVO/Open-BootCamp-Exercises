<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Support\HtmlString;

class GenericNotification extends Notification
{
    use Queueable;

    // private $_name;
    private $notification;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($notification)
    {
        // $this->_name = $name;
        $this->_notification = $notification;
        //
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
        // 'database' 'sms', slack
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        // $name = $this->notification->name;
        // $content = view($this->_notification->template,[]);
        // $content = view('emails.myfirstemail');/*$this->_notification->content;*/
        return (new MailMessage)
            ->greeting('Hola usuario'  /* .$name*/)
            ->salutation(('Reciba un cordial saludo'))
            ->subject(/*$this->_notification->subject*/'Asunto de test')
            /*->attach('/path/al/archivo',[
                'as' => 'nombre.pdf',
                'mime' => 'application/pdf'
            ])
            ->attachFromStorage('/path/al/archivo')
            ->attachData($stream, 'name.pdf', ['mime' => 'application/pdf'])*/
            ->line(/*new HtmlString($content)*/'Estoy encantado de conocerte')
            ->action('Acceder a mi Web', route('home'));
                    /*->from('remitente@example.com', 'John Doe')
                    ->error()
                    ->salutation('Regards ' . $this->_name)
                    ->greeting('Hi ' . $this->_name)
                    ->subject('Asunto')
                    ->line('The introduction to the notification.')
                    ->action('Notification Action', url('/'))
                    ->line('Thank you for using our application!');*/
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
