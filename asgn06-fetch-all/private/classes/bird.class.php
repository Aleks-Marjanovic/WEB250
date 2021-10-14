<?php

 class Bird {

    // ------ START OF ACTIVE RECORD CODE ------ //
    static protected $database;

    static public function setDatabase($database) {
        self::$database = $database;
    }

    static public function findBySql($sql) {
        $result =  self::$database->query($sql);
        if(!$result) {
            exit("Database query failed.");
        }
        $object_array = [];
        while($record = $result->fetch(PDO::FETCH_ASSOC)) {
            $object_array[] = self::instantiate($record);
        }
        return $object_array;
    }

    static public function findAll() {
        $sql = "SELECT * FROM birds";
        return self::findBySql($sql);
    }

    static public function findByID($id) {
        // $sql = "SELECT * FROM birds ";
        // $sql .= "WHERE id='" . $id . "'";
        $sql = self::$database->prepare("SELECT * FROM birds WHERE id = :id");
        $sql->bindParam(':id', $id);
        $sql->execute();
        $obj_array = self::findBySql($sql);
        if(!empty($obj_array)) {
            return array_shift($obj_array);
        } else {
            return false;
        }
    }

    static protected function instantiate($record) {
        $object = new self;
        foreach($record as $property => $value) {
            if(property_exists($object, $property)) {
                $object->$property = $value;
            }
        }
        return $object;
    }
    // ------ END OF PUBLIC RECORD CODE ------//

    public $id;
    public $common_name;
    public $habitat;
    public $food;
    public $nest_placement;
    public $behavior;
    public $backyard_tips;
    protected $conservation_id;

    protected const CONSERVATION_OPTIONS = [ 
        1 => "Low concern",
        2 => "Medium concern",
        3 => "High concern",
        4 => "Extreme concern"
    ];

    public function __construct($args=[]) {
        $this->id = $args['id'] ?? '';
        $this->common_name = $args['common_name'] ?? '';
        $this->habitat = $args['habitat'] ?? '';
        $this->food = $args['food'] ?? '';
        $this->nest_placement = $args['nest_placement'] ?? '';
        $this->behavior = $args['behavior'] ?? '';
        $this->backyard_tips = $args['backyard_tips'] ?? '';
        $this->conservation_id = $args['conservation_id'] ?? '';

    }

    public function conservation() {
        // echo self::CONSERVATION_OPTIONS[$this->conservation_id];
        if( $this->conservation_id > 0 ) {
            return self::CONSERVATION_OPTIONS[$this->conservation_id];
        } else {
            return "Unknown";
        }
    }
}
