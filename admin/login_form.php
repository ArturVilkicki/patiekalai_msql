<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div class="col">
        <form method="POST">
          <div class="form-group">
            <label for="username">Username</label>
            <input name="username" type="text" class="form-control" id="username" value="<?php
            if (isset($cookie_values)) {
              echo $cookie_values[0];
            }
            ?>">
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input name="password" type="password" class="form-control" id="password">
          </div>
          
          <button name="submit" type="submit" class="btn btn-primary">Login</button>
           
       </form>
      </div>
</body>
</html>