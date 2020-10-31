<?php

interface Subject {
    function registerObserver(Observer $o);
    function removeObserver(Observer $o);
    function notifyObservers(); // phương thức này được gọi để thông báo cho tất cả các observer một khi trạng thái của Subject được thay đổi.
}

interface Observer {
    function update($amount);
}

class Store implements Subject {

    public $observers = array();
    private $amount;

    public function registerObserver(Observer $o) {
         $this->observers[] = $o;
    }

    public function removeObserver(Observer $observer_in) {
      //$key = array_search($observer_in, $this->observers);
      foreach($this->observers as $okey => $oval) {
        if ($oval == $observer_in) { 
          unset($this->observers[$okey]);
        }
      }
    }

    public function notifyObservers() {
      foreach($this->observers as $obs) {
        $obs->update($this->amount);
      }
    }

    public function changePrice() {
        $this->notifyObservers();
    }

    public function setPricePhone($amount) {
        $this->amount = $amount;
        $this->changePrice();
    }

}

class User1 implements Observer {

    private $subject;

    public function __construct(Subject $subject) {

        $this->subject = $subject->registerObserver($this);
    }

    public function update($amount) {
        echo 'Store has change price PHONE - USER1 - '.$amount; 
    }
}

class User2 implements Observer {

    private $subject;

    public function __construct(Subject $subject) {

        $this->subject = $subject->registerObserver($this);
    }

    public function update($amount) {
        echo 'Store has change price PHONE - USER2 - '.$amount; 
    }
}


$store = new Store();
$user1 = new User1($store);
$user2 = new User2($store);
$store->removeObserver($user2);
$store->setPricePhone(1099);

// $store->removeObserver($user2);

?>

