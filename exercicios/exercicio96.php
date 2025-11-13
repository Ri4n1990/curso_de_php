<?php 




class Task{
    

    public $title;
    public $description;
    public $completed = false;


    public function __construct($title,$description){

        $this->title = $title;
        $this->description = $description ; 

    }


    public function markAsCompleted():void{

        $this->completed = true; 

    }

    public function markAsIncompeted(): void{

        $this->completed = false ;

    }

    public function getTitle(): string{

        return $this->title ;

    }


    public function getDescription(): string{
        return $this->description;
    }



    public function isCompleted():bool{

        return $this->completed;

    }
    








    function __toString(): string{

        return "Title: $this->title <br>Description: $this->description";

    }
        
}




$nova_task = new Task('Tarefa', "Bomba âtomica") ;

echo $nova_task->getDescription();

$nova_task->markAsCompleted();

echo $nova_task->isCompleted();