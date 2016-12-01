<?php
namespace EnvayaSMS;

/*
 * Cancel sending a message that was previously queued in the app via a 'send' event.
 * Has no effect if the message has already been sent.
 */
class EnvayaSMS_Event_Cancel extends EnvayaSMS_Event
{
    public $id;

    public function __construct($id/* id of previously created EnvayaSMS_OutgoingMessage object (string) */)
    {
        $this->event = EnvayaSMS::EVENT_CANCEL;
        $this->id    = $id;
    }
}
