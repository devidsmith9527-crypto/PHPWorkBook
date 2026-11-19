<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Access Modifier: Public - Encapsulation</title>
</head>
<body>
    <?php
        //Create New class: Product
        class product{
            //1. Data - Properties - Attribute - Variable 
            public int $pro_productId;
            public string $pro_productName;
            
            //2. Method - Function - Behavor - Action - Business Logic - Operations
            //Setter Method
            public function setProduct(int $par_productId, string $par_productName){
                //$this->proname = $parameter;    
                $this->pro_productId = $par_productId;
                $this->pro_productName = $par_productName;
            }

            //Getter Method
            public function getProduct(){
                echo "-----------------------<br>";
                echo "Product ID: ".$this->pro_productId."<br>";
                echo "Product Name: ".$this->pro_productName."<br>";
                echo "-----------------------<br>";
            }           
        }
        //Object Instantiation
        //$object = new ClassName();
        $item = new product();
        //Accessing to Class Members
        //1. Properties
        
        //2.Method
        $item->setProduct(111,"Iphone 18");
        $item->getProduct();

        //Accessing to Pubic Properties
        $item->pro_productId = 222;
        $item->pro_productName = "Samsung Note 20";
        $item->getProduct();
    ?>
</body>
</html>