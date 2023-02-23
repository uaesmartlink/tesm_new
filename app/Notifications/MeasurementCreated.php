<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Support\Facades\URL;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class MeasurementCreated extends Notification implements ShouldQueue
{
    use Queueable;

    public $measurement;

    public function __construct($measurement)
    {
        $this->measurement = $measurement;
    }

    public function toMail($notifiable)
    {
        $url = URL::signedRoute('measurements.show', ['measurement' => $this->measurement->id, 'hash' => $this->measurement->hash]);
        return (new MailMessage())
            ->subject('New measurement created')
            ->greeting("Hello {$this->measurement->customer->name},")
            ->line('A new measurement has been created. Please click the button below to view your measurement.')
            ->action('View Order', $url)
            ->line('Thank you & we would love to do business with you again.');
    }

    public function toVonage($notifiable)
    {
        return (new VonageMessage())
            ->content("Hello {$this->measurement->customer->name}, A new measurement (No. {$this->measurement->id}) has been created.\nThanks, {{config('app.name')}}")->unicode();
    }

    public function via($notifiable)
    {
        return $this->measurement->account->via();
    }
}
