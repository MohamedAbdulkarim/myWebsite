<!DOCTYPE html>
<html>
    <head>
    
        <title>
            Product list 
        </title>
    
    </head>    
    <body>

        <div > 
            <h2 style="float:left">Product list</h2> 
        </div>
        
        
        <div style="float: right; margin: 20px;">
            <input type="button" value="ADD" > 
            <input id="delete-product-btn" type="button" value="MASS DELETE" >
            
        </div>
        
        
    </body>
</html>
<?php
    include "classes/Database.class.php";
    include "classes/product.class.php";

    $database = new Database();
    $db = $database->connect();

    $product = new Product($db);

    $result = $product->getProduct();

    echo $result;
    
    


   

