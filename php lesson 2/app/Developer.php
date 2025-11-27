<?php

namespace App;

class Developer extends Worker
{

    use HasRest;

    protected string $position = 'developer';

    private array $attributes;

    public function work()
    {
       print_r('Developing');
    }


  public function __call(string $name, array $arguments)
  {
      print_r($arguments);
  }
}