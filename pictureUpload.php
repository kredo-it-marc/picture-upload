<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body class="container">

  <form method="post" action="action.php" enctype="multipart/form-data" class="mt-5">
    <input type="text" name="user" placeholder="Please enter your name" class="form-control w-50"><br>
    
    <input type='file' name="pic" class="form-control w-50"><br>
    
    <input type='submit' value='Upload' name='upload' class="btn btn-primary btn-block w-50">
  </form>
</body>
</html>

