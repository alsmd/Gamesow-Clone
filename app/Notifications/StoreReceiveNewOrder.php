<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class StoreReceiveNewOrder extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct()
    {
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
        return ['database','mail','nexmo'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->subject('Novo Pedido.')
                    ->greeting('Olá Admin,Tudo Bem?')
                    ->line('Loja Gamesow recebeu um novo pedido.')
                    ->action('Ver Pedidos', url('/'))
                    ->line('Thank you for using our application!');
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
            'mensagem' => 'Você tem um novo pedido solicitado'
        ];
    }

    public function toNexmo($notifiable){
        $basic  = new \Nexmo\Client\Credentials\Basic('2cf0145a', '2kDKB2ZGGGxiDLNh');
        $client = new \Nexmo\Client($basic);

        return $client->message()->send([
            'to' => env('ADMIN_NUMBER','5511960191103'),
            'from' => 'Gamesow',
            'text' => 'Loja gamesow novo pedido'
        ]);
    }

}
