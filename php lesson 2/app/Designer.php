<?php

namespace App;

class Designer extends Worker
{

    use HasRest;

    protected string $position = 'developer';

    private array $attributes;

    public function work()
    {
        print_r('Designing');
    }
}