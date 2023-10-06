<?php

namespace app\classes;



abstract class Task
{

    protected $title;
    protected $description;
    protected $completed;


    //method
    public function __construct($title, $description)
    {
        $this->title = $title;
        $this->description = $description;
        $this->completed = false;
    }

    //Abstract method
    abstract public function getPriority();
    abstract public function marksCompleted();

    //getter methods
    public function getTitle()
    {
        return $this->title;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function getComplete()
    {
        return $this->completed;
    }
}
