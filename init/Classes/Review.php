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
            $this->id = $props['id'] ?? null;
            $this->name = $props['name'] ?? null;
            $this->title = $props['title'] ?? null;
            $this->body = $props['body'] ?? null;
            $this->location_id = $props = $props['location_id'] ?? null;
        }

        // This is a public function called Create that will grab the values for each property inside the database and will populate the new task item onto the database inside the table of tasks.
        public function create() {
            $sql = "INSERT INTO reviews (name, title, body, location_id) VALUES (";
            $sql .= "'" . $this->name . "', ";
            $sql .= "'" . $this->title . "', ";
            $sql .= "'" . $this->body . "', ";
            $sql .= "'" . $this->location_id . "') ";

            $results = self::$db->query($sql);
            return $results;
        }

        // It is the Read function part of CRUD.
        // It's meant to find all the information located inside the table of tasks inside the database which is then populated into the loop.
        static public function find_reviews($location_id) {
            $sql = "SELECT * FROM reviews ";
            $sql .= "WHERE location_id='" . $location_id . "'";

            $results = self::$db->query($sql);
            return $results;
        }
    }

?>