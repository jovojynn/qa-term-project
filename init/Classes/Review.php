<?php 

    class Review {
        static protected $db;

        public $id;
        public $name;
        public $title;
        public $body;
        public $location_id;

        // This function is related to the class of Task where it is accessing the static properties of $db with the function of db_set.
        static public function db_set($db) {
            self::$db = $db; // Self is used to access the function that it is currently in.
        }

        // This is a constructor for setting the value for these properties.
        public function __construct($props = []) {
            $this->id = $props['id'] ?? '';
            $this->name = $props['name'] ?? '';
            $this->title = $props['title'] ?? '';
            $this->body = $props['body'] ?? '';
            $this->location_id = $props = $props['location_id'] ?? '';
        }

        // This is a public function called Create that will grab the values for each property inside the database and will populate the new task item onto the database inside the table of tasks.
        public function create() {
            $sql = "INSERT INTO reviews (name, title, body, location_id) VALUES (";
            $sql .= "'" . $this->name . "', ";
            $sql .= "'" . $this->title . "', ";
            $sql .= "'" . $this->body . "', ";
            $sql .= "'" . $this->location_id . "') ";


        // This is using the built in method of query to run the above string located inside the variable of $sql which is then return takes the information to then populate the newly created task with all the above values filled in. 
            
        // This is used for the below functions for the rest of CRUD.
            $results = self::$db->query($sql);
            return $results;
        }

        // This is a static public function called find_all().
        // It is the Read function part of CRUD.
        // This is located in the public/index.php file. It's meant to find all the information located inside the table of tasks inside the database which is then populated into the loop.
        // With the added parameter of $user_id, it will display only the tasks with the currently logged in user with its corresponding user_id.
        static public function find_all($location_id) {
            $sql = "SELECT * FROM reviews ";
            $sql .= "WHERE location_id='" . $location_id . "'";

            $results = self::$db->query($sql);
            return $results;
        }
    }

?>