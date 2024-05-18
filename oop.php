<?php
class Book{
    // Add properties as Private
    private $title;
    private $availableCopies;

    public function __construct($title, $availableCopies)
    {
        // Initialize properties
        $this -> title = $title;
        $this -> availableCopies = $availableCopies;
    }

    // Add getTitle method
    public function getTitle()
    {
        return $this -> title;
    }

    // Add getAvailableCopies method
    public function getAvailableCopies()
    {
        return $this -> availableCopies;
    }

    // Add borrowBook method
    public function borrowBook(){
        if($this -> availableCopies > 0)
        {
            $this -> availableCopies--;
            return true;
        }
        else
        {
            return false;
        }
    }

    // Add returnBook method
    public function returnBook()
    {
        $this -> availableCopies++;
        return true; 
    }
}




?>