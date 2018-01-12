<?php

namespace App;

class Foo
{
    protected $x = null;

    public function __construct($x = null)
    {
        $this->x = $x;
    }
    public function index()
    {
        if (! is_null($this->x)) {
            return $this->x->index();
        }
        return "Hello from foo!";
    }
}
