<?php 
$phones = [
    [ 
     'name' => 'Samsung Galaxy Note 20',
     'img_url' =>'https://eshop.orange.jo/app-images/thumbs/0001115_samsung-galaxy-note-20-ultra_220.png',
    'rate' => '5',
    'brand' => 'Samsung',
    'price' => 'JOD 759.00',
    'is_out_of_stock' => '1',
    ],
    [ 
     'name' => 'INFINIX Zero 8',
     'img_url' =>'https://eshop.orange.jo/app-images/thumbs/0001278_infinix-zero-8_220.jpeg',
    'rate' => '2',
    'brand' => 'Infinix',
    'price' => 'JOD 205.00',
    'is_out_of_stock' => '0',
    ],
    [ 
     'name' => 'Apple iPhone 12 Pro',
     'img_url' =>'https://eshop.orange.jo/app-images/thumbs/0001495_apple-iphone-12-pro_220.jpeg',
    'rate' => '3',
    'brand' => 'Apple',
    'price' => 'JOD 973.00',
    'is_out_of_stock' => '0',

    ],
    [ 
     'name' => 'ITEL A48',
     'img_url' =>'https://eshop.orange.jo/app-images/thumbs/0001495_apple-iphone-12-pro_220.jpeg',
    'rate' => '4',
    'brand' => 'iTel',
    'price' => 'JOD 66.00',
    'is_out_of_stock' => '0',
    ],
    [ 
     'name' => 'Samsung Galaxy S21 Ultra',
     'img_url' =>'https://eshop.orange.jo/app-images/thumbs/0001485_samsung-galaxy-s21-ultra_220.jpeg',

    'rate' => '2',
    'brand' => 'Samsung',
    'price' => 'JOD 799.00',
    'is_out_of_stock' => '1',
    ],
    
    [ 
     'name' => 'Galaxy A52',
     'img_url' =>'https://eshop.orange.jo/app-images/thumbs/0002097_galaxy-a52_220.jpeg',
    'rate' => '3',
    'brand' => 'Samsung',
    'price' => 'JOD 267.00',
    'is_out_of_stock' => '1',
    ],

    [ 
      'name' => 'Galaxy A52s',
      'img_url' =>'https://wikimovel.com/images/thumb/9/9a/Samsung-Galaxy-A52-5G.png/300px-Samsung-Galaxy-A52-5G.png',
     'rate' => '4',
     'brand' => 'Samsung',
     'price' => 'JOD 360.00',
     'is_out_of_stock' => '4',
     ],

     [ 
      'name' => 'iPhone 14 Pro',
      'img_url' =>'https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/iphone-compare-iphone-14-pro-202209?wid=366&hei=508&fmt=jpeg&qlt=90&.v=1661471046256',
     'rate' => '5',
     'brand' => 'Apple',
     'price' => 'JOD 1000.00',
     'is_out_of_stock' => '10',
     ],

    
];



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mobile Phone | Orange Jordan E shop</title>
    <!-- Copyright © 2014 Monotype Imaging Inc. All rights reserved -->

<link href="https://cdn.jsdelivr.net/npm/boosted@5.1.3/dist/css/orange-helvetica.min.css" rel="stylesheet" integrity="sha384-ARRzqgHDBP0PQzxQoJtvyNn7Q8QQYr0XT+RXUFEPkQqkTB6gi43ZiL035dKWdkZe" crossorigin="anonymous">
<link href="https://cdn.jsdelivr.net/npm/boosted@5.1.3/dist/css/boosted.min.css" rel="stylesheet" integrity="sha384-Di/KMIVcO9Z2MJO3EsrZebWTNrgJTrzEDwAplhM5XnCFQ1aDhRNWrp6CWvVcn00c" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
  #cart:hover{
    fill: white;
  }
 
</style>

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="https://boosted.orange.com/docs/5.1/assets/brand/orange-logo.svg" width="50" height="50" role="img" alt="Boosted" loading="lazy">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-primary" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<!-- *************************************************************************************************************************** -->
<div class="container">
  <div class="row" >

<?php

for($i=0; $i<count($phones); $i++){

?>


<div class="col">
    <div class="card" style="width: 18rem;margin-top:40px;">
   <img  src="<?php echo $phones[$i]['img_url'] ?>" class="card-img-top" alt="..." style="height:120px; display: block;margin-left: auto;margin-right: auto;width: 35%;">
   <div class="card-body">
   <p  style="color:#999999;"><?php echo $phones[$i]['brand'] ?></p>
   <h5 class="card-title"><?php echo $phones[$i]['name'] ?></h5>
    
<p class="card-title">
<?php 

for ($x=0;$x<5;$x++){

  if($x<$phones[$i]['rate']){
   echo '<span class="fa fa-star checked" style="color:#FBB408;"></span>';
  } else{
   echo '<span class="fa fa-star checked" style="color:#999999;"></span>';
  }
 
  
}
echo " (". $phones[$i]['is_out_of_stock']. ")";
?>

</p>
    <a href="#" > View details  > </a>
    <hr style="color:#999999;">
    <p style="color:#FF7902;" class="card-text">Price : (<?php echo $phones[$i]['price'] ?>)</p>
    <div style="display: block;margin-left: auto;margin-right: auto;width: 80%;">

    <button type="button" class="btn btn-info btn-lg">Buy Now</button>

<button id="cart" type="button" class="btn  btn-secondary btn-lg">

<svg version="1.1" id="Capa_1" x="0px" y="0px"
width="1.25rem" height="1.25rem" viewBox="0 0 902.86 902.86" style="enable-background:new 0 0 902.86 902.86;"
	 xml:space="preserve">
		<path d="M671.504,577.829l110.485-432.609H902.86v-68H729.174L703.128,179.2L0,178.697l74.753,399.129h596.751V577.829z
			 M685.766,247.188l-67.077,262.64H131.199L81.928,246.756L685.766,247.188z"/>
		<path d="M578.418,825.641c59.961,0,108.743-48.783,108.743-108.744s-48.782-108.742-108.743-108.742H168.717
			c-59.961,0-108.744,48.781-108.744,108.742s48.782,108.744,108.744,108.744c59.962,0,108.743-48.783,108.743-108.744
			c0-14.4-2.821-28.152-7.927-40.742h208.069c-5.107,12.59-7.928,26.342-7.928,40.742
			C469.675,776.858,518.457,825.641,578.418,825.641z M209.46,716.897c0,22.467-18.277,40.744-40.743,40.744
			c-22.466,0-40.744-18.277-40.744-40.744c0-22.465,18.277-40.742,40.744-40.742C191.183,676.155,209.46,694.432,209.46,716.897z
			 M619.162,716.897c0,22.467-18.277,40.744-40.743,40.744s-40.743-18.277-40.743-40.744c0-22.465,18.277-40.742,40.743-40.742
			S619.162,694.432,619.162,716.897z"/>
</svg>
</button>

</div>


  </div>
  </div>
    </div>



<?php
}

?>


</div>
</div>







<script src="https://cdn.jsdelivr.net/npm/boosted@5.1.3/dist/js/boosted.bundle.min.js" integrity="sha384-5thbp4uNEqKgkl5m+rMBhqR+ZCs+3iAaLIghPWAgOv0VKvzGlYKR408MMbmCjmZF" crossorigin="anonymous"></script>
</body>
</html>