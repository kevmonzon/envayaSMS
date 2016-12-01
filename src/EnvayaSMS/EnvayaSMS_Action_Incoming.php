<?php
namespace EnvayaSMS;

class EnvayaSMS_Action_Incoming extends EnvayaSMS_Action_Forward
{
    public $from; // Sender phone number

    public function __construct($request)
    {
        parent::__construct($request);
        $this->type = EnvayaSMS::ACTION_INCOMING;
        $this->from = $_POST['from'];
    }
}
