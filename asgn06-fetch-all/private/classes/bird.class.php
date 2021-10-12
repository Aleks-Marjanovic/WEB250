<?php

 class Bird {

    // ------ START OF ACTIVE RECORD CODE ------ //
    static protected $database;

    static public function setDatabase($database) {
        self::$database = $database;
    }

    static public function findBySql($stmt) {
        return self::$database->query($stmt);
    }

    static public function findAll() {
        $stmt = "SELECT * FROM birds";
        return self::findBySql($stmt);
    }
    // ------ END OF PUBLIC RECORD CODE ------//


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
