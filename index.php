<?php 
    include_once __DIR__ . '\class\products.php';
    include_once __DIR__ . '\class\food.php';
    include_once __DIR__ . '\class\toys.php';
    include_once __DIR__ . '\class\crate.php';
    include_once __DIR__ . '\class\array.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Shop</title>
    <link rel="stylesheet" href=".\style.css">
</head>
    <body>
        <div class="container">
                <?php foreach ($negozio as $item) { ?>
                    <div class="card">
                        <div>
                            <img src="<?php $item->getImage()?>" alt="">
                        </div>

                        <ul>
                            <li>
                                <?php echo $item->getName()?>
                            </li>

                            <li>
                            <?php echo $item->getPrice()?>
                                
                            </li>

                            <li>
                            <?php echo $item->getDescription()?>
                                
                            </li>

                            <li>
                            <?php echo $item->getBrand()?>
                                
                            </li>

                            <li>
                            <?php echo $item->getAnimal()?>
                                
                            </li>
                        </ul>
                        
                    </div>
                <?php }?>
        </div>
    </body>
</html>