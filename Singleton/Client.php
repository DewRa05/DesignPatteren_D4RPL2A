<?php
require_once('Singleton.php');

class Client {
    public function useSingleton() {
        $singleton = Singleton::getInstance();
        echo $singleton->getData();
    }
}

