<?php

class User1 {

    public function notify($amount) {
        echo 'Store has change price PHONE - USER1 - '.$amount; 
    }
}

class User2 {

    public function notify($amount) {
        echo "\nStore has change price PHONE - USER2 - ".$amount; 
    }
}

class Store {

    private $amount;

    public function setPricePhone($amount) {

        $this->amount = $amount;
        $this->changePrice();

    }

    public function changePrice() {

        $user1 = new User1();
        $user2 = new User2();
        $user1->notify($this->amount);
        $user2->notify($this->amount);

    }
}

//client code

$store = new Store();
$store->setPricePhone(799);

?>

