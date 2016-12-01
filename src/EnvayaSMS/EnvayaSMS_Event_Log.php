<?php
namespace EnvayaSMS;

/*
 * Appends a message to the app log.
 */
class EnvayaSMS_Event_Log extends EnvayaSMS_Event
{
    public $message;

    public function __construct($message)
    {
        $this->event   = EnvayaSMS::EVENT_LOG;
        $this->message = $message;
    }
}
