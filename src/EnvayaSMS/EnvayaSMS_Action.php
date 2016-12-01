<?php
namespace EnvayaSMS;

/*
 * An 'action' is the term for a HTTP request that app sends to the server.
 */

class EnvayaSMS_Action
{
    public $type;
    public $request;

    public function __construct($request)
    {
        $this->request = $request;
    }
}
