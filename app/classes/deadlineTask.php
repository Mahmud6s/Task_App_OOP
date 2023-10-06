<?php

namespace app\classes;

use app\classes\Task;
use app\traits\HashAssaigneTrait;
use app\interface\HasDueDateinterface;
use app\interface\HasStartDateinterface;

class DeadlineTask extends Task implements HasDueDateinterface, HasStartDateinterface
{
    use HashAssaigneTrait;


    protected $startDate;
    protected $dueDate;

    //method
    public function __construct($title, $description, $startDate, $dueDate)
    {
        parent::__construct($title, $description);
        $this->startDate = $startDate;
        $this->dueDate = $dueDate;
    }

    //getter method
    public function getStartDate()
    {
        return $this->startDate;
    }

    public function getDueDate()
    {
        return $this->dueDate;
    }
    
    public function getPriority()
    {
        return "Low";
    }

    public function marksCompleted()
    {
        $this->completed = true;
    }
}
