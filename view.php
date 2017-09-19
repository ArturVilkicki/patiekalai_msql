<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
	<script type="text/javascript" src="products.js"></script>
</head>
<body>
	<div class="container">
		<div class="row">
      <div class="col">			
        <table class="table">
  				<thead>
    				<tr>
      					<th>ID</th>
      					<th>Name</th>
      					<th>Price</th>
      					<th>Description</th>
    				</tr>
  				</thead>
  				<tbody>
   					<?php
   						foreach ($products as $product) {
						echo "<tr><td>" .$product['id'] . "</td><td>" .$product['name'] . "</td><td class='price'>" .$product['price'] . "</td><td>" . $product['description'] . "</td></tr>";
						}
   					?>
  				</tbody>
			  </table>
		  </div>
      
    </div>

	</div>

</body>
</html>