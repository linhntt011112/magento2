<?php

namespace SimplifiedMagento\FirstModule\Model;

class HeavyService {
    public function __construct()
    {
        echo "HeavyService has been instantiated"."</br>";
    }

    public function printHeavyServiceMessage() {
        echo "Message from HeavyService class";
    }
}