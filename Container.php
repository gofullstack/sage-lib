<?php

namespace Roots\Sage;

use Illuminate\Container\Container as BaseContainer;

class Container extends BaseContainer
{

    protected $terminatingCallbacks = [];

    public function terminating($callback)
    {
        $this->terminatingCallbacks[] = $callback;
        return $this;
    }
    
    public function terminate(){
        foreach($this->termterminatingCallbacks as $callback){
            $callback();
        }       
    }
}
