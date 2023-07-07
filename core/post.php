<?php

class Post {

    //db stuff
    private $conn;
    private $table = 'post';

    //post properties
    public $id;
    public $category_id;
    public $category_name;
    public $title;
    public $body;
    public $author;
    public $create_at;

    // constractor with db connection     

    public function __construct($db) 
    {
        $this->conn = $db;
    }

    public function read() 
    {
        //create query
        $query = '
            SELECT 
            c.name as category_name,
            p.id,
            p.category_id,
            p.title,
            p.body,
            p.author,
            p.create_at
            FROM
            '. $this->table . ' p
            LEFT JOIN
                categories c ON p.category_id = c.id
                ORDER BY p.create_at DESC';
    

        //prepare statement
        $stmt = $this->conn->prepare($query);
        $stmt ->execute();

        return $stmt;
    }

    public function read_single() 
    {

        $query = '
            SELECT 
            c.name as category_name,
            p.id,
            p.category_id,
            p.title,
            p.body,
            p.author,
            p.create_at
            FROM
            '. $this->table . ' p
            LEFT JOIN
                categories c ON p.category_id = c.id
                where p.id = ? LIMIT 1';
    

        //prepare statement
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $this->id);
        $stmt ->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        $this->title = $row['title'];
        $this->body = $row['body'];
        $this->author = $row['author'];
        $this->category_id = $row['category_id'];
        $this->category_name = $row['category_name'];


        return $stmt;

    }

}