<?php


    class Product{
        private $name;
        private $price;
        private $brand;
        private $image;
        private $description;
        private $tax;
        
        /* setter and getter of name*/
        public function setName($name){
            $this->name=$name;
        }
        public function getName(){
            return $this->name;
        }

        /* setter and getter of price*/
        public function setPrice($price){
            $this->price=$price;
        }
        public function getPrice(){
            return $this->price;
        }

        /* setter and getter of brand*/
        public function setBrand($brand){
            $this->brand=$brand;
        }
        public function getBrand(){
            return $this->brand;
        }

        /* setter and getter of image*/
        public function setImage($image){
            $this->image=$image;
        }
        public function getImage(){
            return $this->image;
        }

        /* setter and getter of description*/
        public function setDescription($description){
            $this->description=$description;
        }
        public function getDescription(){
            return $this->description;
        }

        /* setter and getter of tax*/
        public function setTax($tax){
            if($tax<0|| $tax>100){
                echo "not accepted taxes";
                return 0;
            }
            $this->tax=$tax;
        }
        public function getTax(){
            return $this->tax;
        }



        public function priceAfterDiscount($number){
            if($number<=100){
                $this->price*=((100-$number)/100);
            }else{
                echo "not accepted discount as $number % should be percentage less than 100";
                //return -1;// as defaulated value set not true discount number
            }
            
        }

        public function getFinalPrice(){
            return $this->price+=$this->price*(($this->tax)/100);
        }

        
    }

    $product1=new Product();
    $product1->setName("Check Valve");
    $product1->setBrand("Viking");
    $product1->setDescription("2 inch,great product , origin USA");
    $product1->setImage("Picture 2.PNG");
    $product1->setPrice(11500);
    $product1->setTax(14);

    //$product1->priceAfterDiscount(10);
    //$product1->getFinalPrice();

    $product2=new Product();
    $product2->setName("OS&Y Gate Valve");
    $product2->setBrand("Viking");
    $product2->setDescription("2 inch,great product , origin USA");
    $product2->setImage("Picture1.PNG");
    $product2->setPrice(12500);
    $product2->setTax(14);


    $product3=new Product();
    $product3->setName("Alarm Check Valve");
    $product3->setBrand("Viking");
    $product3->setDescription("6 inch,great product , origin USA");
    $product3->setImage("Picture7.PNG");
    $product3->setPrice(120500);
    $product3->setTax(14);

    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
    <h1>OOP Task 1</h1>
    <div class="row">
        <div class="col-sm-4">
            <div class="card " style="width: 18rem;">
                <img src="img/<?= $product1->getImage()?>" class="card-img-top" alt="..." style="height:250px;">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $product1->getName()?></h5>
                    <p class="card-text"><?php echo $product1->getDescription()?></p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Basic Price:<?php echo $product1->getDescription()?></li>
                    <li class="list-group-item">Price after Discount 10%: <?php echo $product1->priceAfterDiscount(10)?></li>
                    <li class="list-group-item">Final Price after add tax(<?php echo $product1->getTax()?>):<?php echo $product1->getFinalPrice()?></li>
                </ul>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card" style="width: 18rem;">
                <img src="img/<?= $product2->getImage()?>" class="card-img-top" alt="..." style="height:250px;">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $product2->getName()?></h5>
                    <p class="card-text"><?php echo $product2->getDescription()?></p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Basic Price:<?php echo $product2->getDescription()?></li>
                    <li class="list-group-item">Price after Discount 10%: <?php echo $product2->priceAfterDiscount(10)?></li>
                    <li class="list-group-item">Final Price after add tax(<?php echo $product2->getTax()?>):<?php echo $product2->getFinalPrice()?></li>
                </ul>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card" style="width: 18rem;">
                <img src="img/<?= $product3->getImage()?>" class="card-img-top" alt="..." style="height:250px;">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $product3->getName()?></h5>
                    <p class="card-text"><?php echo $product3->getDescription()?></p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Basic Price:<?php echo $product3->getDescription()?></li>
                    <li class="list-group-item">Price after Discount 10%: <?php echo $product3->priceAfterDiscount(10)?></li>
                    <li class="list-group-item">Final Price after add tax(<?php echo $product3->getTax()?>):<?php echo $product3->getFinalPrice()?></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>