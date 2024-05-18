<?php
// Book class create
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
    public function borrowBook()
    {
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
// Member class create
class Member{
    // Add properties as Private
    private $name;

    public function __construct($name)
    {
        // Initialize properties
        $this -> name = $name;
    }

    // Add getName method
    public function getName()
    {
        return $this -> name;
    }

    // Add borrowBook method
    public function borrowBook($book)
    {
        return $book -> borrowBook();
    }

    // Add returnBook method
    public function returnBook($book)
    {
        return $book -> returnBook();
    }
}
// Create 2 books with the following properties
$bookOne = new Book("The Great Gatsby",  5);
$bookTwo = new Book("To Kill a Mockingbird", 3);

// Create 2 members with the following properties
$memberOne = new Member("John Doe");
$memberTwo = new Member("Jane Smith");

// Apply Borrow book method to each member
$memberOne -> borrowBook($bookOne);
$memberTwo -> borrowBook($bookTwo);

// Print Available Copies with their names
echo "Available Copies of ". $bookOne -> getTitle(). " :"  . $bookOne -> getAvailableCopies() . "<br>";
echo "Available Copies of ". $bookTwo -> getTitle(). ": " . $bookTwo -> getAvailableCopies() . "<br>";


?>