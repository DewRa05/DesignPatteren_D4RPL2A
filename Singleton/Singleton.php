<?php
class Singleton {
    private static $instance;
    private $data;

    private function __construct() {
        $this->data = "Ini adalah data dari Singleton.";
    }

    public static function getInstance() {
        if (!isset(self::$instance)) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function getData() {
        return $this->data;
    }
}
?>
