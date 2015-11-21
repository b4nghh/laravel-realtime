<?php

namespace App\Events;

use App\Events\Event;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class SendMessage extends Event implements ShouldBroadcast
{
    use SerializesModels;

    protected $id;

    public $data;

    public $msg = 'fucking';

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($req)
    {
        $this->data = [
            'power' => 10
        ];

        $this->id = $req;
    }

    /**
     * Get the channels the event should be broadcast on.
     *
     * @return array
     */
    public function broadcastOn()
    {
        $channel = 'send-msg-' . $this->id['id'];

        return [$channel];
    }
}
