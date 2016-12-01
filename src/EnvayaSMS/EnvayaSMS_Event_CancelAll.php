<?php
namespace EnvayaSMS;

/*
 * Cancels all outgoing messages that are currently queued in the app. Incoming mesages are not affected.
 */
class EnvayaSMS_Event_CancelAll extends EnvayaSMS_Event
{
    public function __construct()
    {
        $this->event = EnvayaSMS::EVENT_CANCEL_ALL;
    }
}
