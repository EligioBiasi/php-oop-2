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
    <link rel="stylesheet" href="style.css">
</head>
    <body>
        <h1 >
        <h1 class= "text-center">
            Pet Shop
        </h1>
        <div class="container flex flex-wrap margin-auto">
                <?php foreach ($negozio as $item) { ?>
                    <div class="card">
                        <div class="flex justify-center">
                            <img src="<?php echo $item-> getImage()?>" alt="" class="text-center">
                        </div>
                        <ul class="text-center">
                            <li>
                                <?php echo $item->getName()?>
                            </li>

                            <li>
                                Prezzo: 
                            <?php echo $item->getPrice()?>
                                
                            </li>

                            <li>
                            <?php echo $item->getDescription()?>
                                
                            </li>

                            <li>
                                marca: 
                            <?php echo $item->getBrand()?>
                                
                            </li>

                            <li>
                            <?php echo $item->getAnimal()?>
                                
                            </li>

                            <?php if ($item instanceof Food) { ?>
                            <li><?= $item->getTaste() ?></li><?php } ?>

                            <?php if ($item instanceof Food) { ?>
                            <li><?= $item->getDogAge() ?></li><?php } ?>

                            <?php if ($item instanceof Toys) { ?>
                            <li><?= $item->getColor() ?></li><?php } ?>

                            <?php if ($item instanceof Toys) { ?>
                            <li><?= $item->getMaterial() ?></li><?php } ?>

                            <?php if ($item instanceof Crates) { ?>
                            <li><?= $item->getSize() ?></li><?php } ?>

                            <?php if ($item instanceof Crates) { ?>
                            <li><?= $item->getMaterial() ?></li><?php } ?>
                        </ul>                       
                    </div>
                <?php }?>

        </div>
    </body>
</html>