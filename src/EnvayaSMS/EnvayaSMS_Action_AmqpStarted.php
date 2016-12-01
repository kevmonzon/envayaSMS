<?php
namespace EnvayaSMS;

class EnvayaSMS_Action_AmqpStarted extends EnvayaSMS_Action
{
    public $consumer_tag;

    public function __construct($request)
    {
        parent::__construct($request);
        $this->type         = EnvayaSMS::ACTION_AMQP_STARTED;
        $this->consumer_tag = $_POST['consumer_tag'];
    }
}
