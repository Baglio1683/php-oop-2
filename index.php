<?php
require_once __DIR__ . '/Models/Bed.php';
require_once __DIR__ . '/Models/Category.php';
require_once __DIR__ . '/Models/Food.php';
require_once __DIR__ . '/Models/Toy.php';
require_once __DIR__ . '/Database/database.php'; 
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style/style.css">
    <title>Prodotti</title>
</head>

<body>

 <div class="container">
    <div class="row">
    <?php foreach ($products as $product) { ?>
        <div class="col">
        <div class="card" style="width: 18rem;">
               <div class="card-body">
                   <h5 class="card-title"><?php echo $product->getTitle() ?></h5>
                   <p class="card-text"><?php echo 'il prezzo è: ' . $product->getPrice() .'€'?></p>
                    <p class="card-text"> <?php echo 'la categoria è: ' . $product->category->get_Name_Category() ?> </p>
                    <?php if(get_class($product) == 'Food'){ ?> 
                        <p class="card-text"> <?php echo 'il peso è: ' . $product->getWeight() ?></p>
                <?php } ?>
                <?php if(get_class($product) == 'Bed'){ ?> 
                        <p class="card-text"> <?php echo "L'Altezza è: " . $product->getHeight()?></p>
                        <p class="card-text"> <?php echo "la Larghezza è: " . $product->getLength()?></p>
                <?php } ?>
                <?php if(get_class($product) == 'Toy'){ ?> 
                        <p class="card-text"> <?php echo 'il materiale è: ' . $product->getMaterial() ?></p>
                <?php } ?>
              </div>
         </div>
       </div> <?php } ?>
    </div>
 </div>

</body>

</html>