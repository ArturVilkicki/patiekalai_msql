<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript" src="products.js"></script>
</head>
<body>
	<div class="container-fluid">
		<div class="row">
      <div class="divoPlotis col">			
        <h1 class="header">Shop</h1>
		  </div>  
    </div>
	</div>

      <?php
        foreach ($products as $product) {
          echo "<div class='divai'>"
          ."ID: " .$product['id']
          ."<br />"  
          ."Name: " .$product['name']
          ."<br />"   
          ."Price: " .$product['price']
          ."<br />"   
          ."Description: " .$product['description']
          ."<br />"
          ."Image: " ."<img height='50px' src='images/" .$product['image'] . "'"
          ."<br />"
          ."<br />"  
          ."Weight: ".$product['weight']
          ."<br />"  
          ."Qty: " .$product['qty']
          ."</div>";
        }
      ?>
    

</body>
</html>