<?php

namespace app\traits;

trait HashAssaigneTrait
{
    protected $assignes = [];

    public function addAssigne($assigne)
    {
        $this->assignes[] = $assigne;
    }

    public function getAssignes()
    {
        return $this->assignes;
    }
}
