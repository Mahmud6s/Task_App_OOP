<?php

use app\Classes\DeadlineTask;
use app\Classes\TaggedDeadlineTask;

include 'autoloader.php';

$task1 = new TaggedDeadlineTask( 'Task 1', 'Should be done within Thursday', '04-10-2023', '07-10-2023' );
$task1->addTag( 'Frontend' );
$task1->addTag( 'Contact Page' );
$task1->addAssignee( 'Prince' );
$task1->addAssignee( 'Rakib' );

$task2 = new DeadlineTask( 'Task 2', 'Should be done within Sunday', '06-10-2023', '10-10-2023' );
$task2->addAssignee( 'Tony' );

$tasks = [$task1, $task2];

foreach ( $tasks as $task ) {
    echo "Title: " . $task->getTitle() . "<br>";
    echo "Description: " . $task->getDescription() . "<br>";
    echo "Start Date: " . $task->getStartDate() . "<br>";
    echo "Due Date: " . $task->getDueDate() . "<br>";

    if ( $task instanceof TaggedDeadlineTask ) {
        echo "Tags: " . implode( ', ', $task->getTags() ) . "<br>";
    }

    echo "Assignees: " . implode( ', ', $task->getAssignees() ) . "<br>";
    echo "Priority: " . $task->getPriority() . "<br>";
    echo "Completed: " . ( $task->isCompleted() ? 'Yes' : 'No' ) . "\"<br>"."<br>";
}

$task1->markAsCompleted();
echo "After marking task 1 as completed:\n";
echo "Completed: " . ( $task1->isCompleted() ? 'Yes' : 'No' ) . "<br>"."<br>";