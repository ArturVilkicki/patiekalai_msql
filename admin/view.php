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
    <h1>Patiekalai admin</h1>
		<div class="row"> 
      <div class="col">
        <table class="table">
          <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Price</th>
                <th>Description</th>
                <th>Nuotrauka</th>
                <th>Weight</th>
                <th>Qty</th>
                <th>Delete</th>

            </tr>
          </thead>
          <tbody>
            <?php
              foreach ($products as $product) {
              echo "<tr>
              <td>" .$product['id'] . "</td>
              <td>" .$product['name'] . "</td>
              <td class='price'>" .$product['price'] . "</td>
              <td>". $product['description'] . "</td>
              <td><img height='50px' src='../images/" .$product['image'] . "'</td>
              <td>" .$product['weight'] . "</td>
              <td>" .$product['qty'] . "</td>
              <td><a class='btn btn-sm btn-danger' href='?delete=". $product['id'] ."' >Delete</a></td>
              </tr>";
              }
            ?>
          </tbody>
      </table>
      </div>
      <div class="col">
        <a href="?logout=true">Logout</a>
        <h2>Prideti preke</h2>
        <form method="POST" enctype="multipart/form-data">
            <div class="form-group">
              <label>Pavadinimas</label>
              <input required class="form-control" type="text" name="name">
            </div>
            <div class="row">
              <div class="form-group col">
                <label>Price</label>
                <input class="form-control" type="text" name="price">
              </div>
              <div class="form-group col">
                <label>Description</label>
                <input class="form-control" type="text" name="description">
              </div>  
            </div>
            <div class="form-group col">
                <label>Nuotrauka</label>
                <input class="form-control" type="file" name="image">
              </div> 
            <div class="row">
              <div class="form-group col">
                <label>Weight</label>
                <input class="form-control" type="text" name="weight">
              </div>
              <div class="form-group col">
                <label>Qty</label>
                <input class="form-control" type="text" name="qty">
              <div>
            </div>

            <button class="btn btn-primary" type="submit" name="submit">Itraukti</button>
        </form>
      </div>
			
		</div>
	</div>

</body>
</html>