<?php
namespace EnvayaSMS;

class EnvayaSMS_Action_DeviceStatus extends EnvayaSMS_Action
{
    public $status; // EnvayaSMS::DEVICE_STATUS_* values

    public function __construct($request)
    {
        parent::__construct($request);
        $this->type   = EnvayaSMS::ACTION_DEVICE_STATUS;
        $this->status = $_POST['status'];
    }
}
