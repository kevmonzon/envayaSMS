<?php
namespace EnvayaSMS;

class EnvayaSMS_Action_ForwardSent extends EnvayaSMS_Action_Forward
{
    public $to; // Recipient phone number

    public function __construct($request)
    {
        parent::__construct($request);
        $this->type = EnvayaSMS::ACTION_FORWARD_SENT;
        $this->to   = $_POST['to'];
    }
}
