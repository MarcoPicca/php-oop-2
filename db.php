<?php

include 'Models/Product.php';
include_once __DIR__ . '/Models/Category.php';
include_once __DIR__ . '/Models/Food.php';
include_once __DIR__ . '/Models/Kennel.php';
include_once __DIR__ . '/Models/Toy.php';




$catsCategory = new Category('Cats', 'Products for cats');
$dogsCategory = new Category('Dogs', 'Products for dogs');
        
        
$Ball = new Toy('https://animaloutlet.it/wp-content/uploads/2022/12/Pallina-Automatica-per-gatti-modalita-intelligente-300x300.jpg', 'Pallina', 'La pallina per gatti più bella di sempre', $catsCategory, '22.2', '3', 'Gioco', 'Gomma');
$newProduct2 = new Product('https://www.artebotti.com/wp-content/uploads/2020/10/AM40-01-300x300.jpg', 'Cuccia', 'La cuccia per cani più bella di sempre', $dogsCategory, '47.5',  'Cuccia');
$newProduct3 = new Product('https://static.ultima-affinity.com/catalog/8410650153230/3d-Pack/mediumImage', 'Crocchette Ultima', 'Le crocchette per gatti più belle di sempre', $catsCategory, '2.8', 'Cibo');
$newProduct4 = new Product('https://image.made-in-china.com/43f34j10UyNlhDLFCRuW/Flying-Sport-Disc-Frisbee-Loads-of-Colors-Available-Suitable-for-Competitions-Team.jpg', 'Frisbee', 'Il Frisbee per cani più bello di sempre', $dogsCategory, '18.5',  'Prodotto');
$chickenBits = new Food('https://shop-cdn-m.mediazs.com/bilder/trixie/premio/chicken/filet/bites/1/800/62415_pla_trixie_premio_chicken_filet_bites_50g_1.jpg', 'Chicken bits', 'Le crocchette per gatti più fresche di sempre', $catsCategory, 'Cibo', 3.48);
 


$Products = [$Ball, $newProduct2, $newProduct3, $newProduct4, $Ball, $newProduct2, $newProduct3, $chickenBits, $newProduct4];