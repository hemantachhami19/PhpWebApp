<?php
$name =isset($_GET['name'])? $_GET['name']:"anybody";


Class Task{
    public $description,$completed;
    public function __construct($description,$completed =true)
    {
        $this->description = $description;
        $this->completed =$completed;
    }

    public function isComplete()
    {
         return $this->completed;
    }

    public function complete()
    {
        $this->completed = true;
    }
}

$tasks =[
    new Task('Buy laptop1',false),
    new Task('Buy laptop2'),
    new Task('Buy laptop3')
];

require "index.view.php";





