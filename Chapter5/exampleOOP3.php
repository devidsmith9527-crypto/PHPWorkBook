<?php
    class Product{
        //Properties Declaration(ប្រកាស Properties​​ - ទិន្នន័យ)
        private int $productId;
        private string $productName;
        private float $productPrice;
        private int $productQuantity;
        private float $productTotalPrice;
        
        //Function Definition(ការកំណត់មុខងារ)
        public function setProduct(int $productId, string $productName, float $productPrice, int $productQuantity): void{
            $this->productId = $productId;
            $this->productName = $productName;
            $this->productPrice = $productPrice;
            $this->productQuantity = $productQuantity;
            $this->productTotalPrice = $this->productPrice * $this->productQuantity;
        }

        public function printProduct(): void{
            echo "--------------------------------<br>";
            echo "Product ID: {$this->productId}<br>";
            echo "Product Name: {$this->productName}<br>";
            echo "Product Price: {$this->productPrice}<br>";
            echo "Product Quantity: {$this->productQuantity}<br>";
            echo "Product Total Price: {$this->productTotalPrice}<br>";
            echo "--------------------------------<br>";
        }
    }

    //Object Instantiation(បង្កើត Object)
    $product1 = new Product();
    $product1->setProduct(1, "Laptop Dell Inspiron", 1000.00, 5);
    $product1->printProduct();

    $product2 = new Product();
    $product2->setProduct(2, "Smartphone Samsung Galaxy", 800.00, 10);
    $product2->printProduct();

    $product3 = new Product();
    $product3->setProduct(3, "Tablet Apple iPad", 600.00, 7);
    $product3->printProduct();
?>