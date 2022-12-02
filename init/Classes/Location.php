<?php
    class Location {
        static protected $db;

        public $id;
        public $name;
        public $image_url;
        public $country;
        public $region;
        public $city;

        // This function is related to the class of Location where it is accessing the static properties of $db with the function of db_set.
        static public function db_set($db) {
            self::$db = $db; // Self is used to access the function that it is currently in.
        }

        public function __construct($props = []) {
            $this->id = $props['id'] ?? '';
            $this->name = $props['name'] ?? '';
            $this->image_url = $props['image_url'] ?? '';
            $this->country = $props['country'] ?? '';
            $this->region = $props['region'] ?? '';
            $this->city = $props['city'] ?? '';
        }

        static public function find_all($id) {
            $sql = "SELECT * FROM destinations ";
            $sql .= "WHERE id='" . $id . "'";

            $results = self::$db->query($sql);
            return $results;
        }

        static public function find_recs() {
            $sql = "SELECT * FROM destinations WHERE id BETWEEN 1 AND 3";
            
            $results = self::$db->query($sql);
            return $results;
        }

        static public function find_by_search() {
            $stmt = $sql->prepare("SELECT * FROM destinations WHERE region LIKE ? OR city LIKE ?");
            $stmt->execute(["%". $_POST['search'] . "%", "%". $_POST['search'] . "%"]);
            $results = $stmt->fetchAll();
            if (isset($_POST["ajax"])) { echo json_encode($results); }
        }
    }

?>

§§§§±±±±§§