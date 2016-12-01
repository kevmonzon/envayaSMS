<?php
namespace EnvayaSMS;

/*
 * An 'event' is the term for something the server sends to the app,
 * either via a response to an 'action', or directly via AMQP.
 */

class EnvayaSMS_Event
{
    public $event;

    /*
     * Formats this event as the body of an AMQP message.
     */
    public function render()
    {
        return json_encode($this);
    }
}
