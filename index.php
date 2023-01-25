<?php

class Product{
    private $price;
    private $typeOfAnimal;
    private $petSize;
    public function __construct($typeOfAnimal, $petSize, $price)
    {
        $this->setTypeOfAnimal($typeOfAnimal);
        $this->setPetSize($petSize);
        $this->setPrice($price);   
     }
 
     public function setTypeOfAnimal($typeOfAnimal){
         $this->typeOfAnimal = $typeOfAnimal;
     }
     public function getTypeOfAnimal(){
         return $this->typeOfAnimal;
     }
     public function setPetSize($petSize){
         $this->petSize = $petSize;
     }
     public function getPetSize(){
         return $this->petSize;
     }
    public function setPrice($price){
        $this->price = $price;
    }
    public function getPrice(){
        return $this->price;
    }
    public function getHtmlCtegory(){
        echo '<div>' . $this->typeOfAnimal . ', '. $this->petSize .' '. $this->price . ' €</div>';
    }
}



class Food extends Product {
    private $food;
    private $expirationDate;
    private $price;

    public function __construct($food,$expirationDate, $typeOfAnimal, $petSize, $price)
    {
        $this->setFood($food);
        $this->setExpirationDate($expirationDate);
        parent::__construct($typeOfAnimal, $petSize, $price);
    }

    public function setFood($food){
    $this->food = $food;
    }
    public function getFood(){
        return $this->food;
    }
    public function setExpirationDate($expirationDate){
    $this->expirationDate = $expirationDate;
    }
    public function getExpirationDate(){
        return $this->expirationDate;
    }
    public function getHtmlFood(){
        echo '<div>' . $this->food . ', data di scadenza: '. $this->expirationDate . $this->getTypeOfAnimal(). $this->getPetSize() . $this->getPrice() . '</div>';
    }
}

// $price1 = new Product(20);
// $price1->getHtml();

$cat1 = new Product('cat', 'small' ,20);
$cat1->getHtmlCtegory();

$newType = new Food('Croccantini', '20-01-2022', 'dog', 'small', 20);
$newType->getHtmlFood();
