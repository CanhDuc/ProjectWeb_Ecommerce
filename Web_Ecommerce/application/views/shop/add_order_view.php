<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->


<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        <h3>Sản phẩm: <?php echo $product['product_name'] ?></h3>
        <form method="post" action="">
            <input name="product_id" value="<?php echo $product['product_id']?>" style="display: none" type="number">
            Số lượng 
            <select name="quantity">
                <?php
                    for($i = 1; $i <= intval($product['quantity']); $i++){
                        print("<option value='$i'>$i</option>");
                        
                    }
                ?>
            </select>
            <input type="submit" name="submit" value="Thêm vào giỏ hàng">
        </form>
        
        <?php
        // put your code here
        ?>
    </body>
</html>
