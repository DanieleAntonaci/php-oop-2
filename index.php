<?php

class Product{
    private $price;

    public function __construct($price)
    {
        $this->setPrice($price);   
    }
    public function setPrice($price){
        $this->price = $price;
    }
    public function getPrice(){
        return $this->price;
    }
    public function getHtml(){
        echo '<div>' . $this->price . ' €</div>';
    }
}

class Category extends Product{
    private $category;
    private $size;
    public function __construct($category, $size, $price)
   {
       $this->setCategory($category);
       $this->setSize($size);
       parent::__construct($price); 
    }

    public function setCategory($category){
        $this->category = $category;
    }
    public function getCategory(){
        return $this->category;
    }
    public function setSize($size){
        $this->size = $size;
    }
    public function getSize(){
        return $this->size;
    }

    public function getHtmlCtegory(){
        echo '<div>' . $this->category . ', '. $this->size . $this->getHtml() . ' €</div>';
    }
}

$price1 = new Product(20);
$price1->getHtml();

$cat1 = new Category('cat', 'small' ,20);
$cat1->getHtmlCtegory();