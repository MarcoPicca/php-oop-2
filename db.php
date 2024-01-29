<?php

include 'Models/Product.php';
include_once __DIR__ . '/Models/Category.php';
include_once __DIR__ . '/Models/Food.php';
include_once __DIR__ . '/Models/Kennel.php';
include_once __DIR__ . '/Models/Toy.php';




$catsCategory = new Category('Cats', 'Products for cats');
$dogsCategory = new Category('Dogs', 'Products for dogs');
        
        
$newProduct = new Product('https://animaloutlet.it/wp-content/uploads/2022/12/Pallina-Automatica-per-gatti-modalita-intelligente-300x300.jpg', 'Pallina', 'La pallina per gatti più bella di sempre', '22.2', 'Gatti', 'Gioco');
$newProduct2 = new Product('https://www.artebotti.com/wp-content/uploads/2020/10/AM40-01-300x300.jpg', 'Cuccia', 'La cuccia per cani più bella di sempre', '47.5', 'Cani', 'Cuccia');
$newProduct3 = new Product('https://static.ultima-affinity.com/catalog/8410650153230/3d-Pack/mediumImage', 'Crocchette Ultima', 'Le crocchette per gatti più belle di sempre', '2.8', 'Gatti', 'Cibo');
$newProduct4 = new Product('https://image.made-in-china.com/43f34j10UyNlhDLFCRuW/Flying-Sport-Disc-Frisbee-Loads-of-Colors-Available-Suitable-for-Competitions-Team.jpg', 'Frisbee', 'Il Frisbee per cani più bello di sempre', '18.5', 'Cani', 'Prodotto');
$chickenBits = new Food('https://shop-cdn-m.mediazs.com/bilder/trixie/premio/chicken/filet/bites/1/800/62415_pla_trixie_premio_chicken_filet_bites_50g_1.jpg', 'Chicken bits', 'Le crocchette per gatti più fresche di sempre', 'Gatti', 6.99, true, 111, 6.6, 12.3, 22.73);
 


$Products = [$newProduct, $newProduct2, $newProduct3, $newProduct4, $newProduct, $newProduct2, $newProduct3, $chickenBits, $newProduct4];