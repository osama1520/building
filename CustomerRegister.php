<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>    
    <title>Document</title>
</head>
<body>

  <?php 
  include('mysqldemo.php');
     
  if(isset($_POST['submit'])){
  
      $name = $_POST['name'];
      $roomno = $_POST['roomno'];
      $rent = $_POST['rent'];

      $sql = $db -> prepare("INSERT INTO customers (name, roomno, rent)
      VALUES (:name,:roomno,:rent);");
      $sql->bindParam(':name',$name);
      $sql->bindParam(':roomno',$roomno);
      $sql->bindParam(':rent',$rent);
      $sql ->execute();
  
  }
  ?>
  <div class="container">
      <form class="m-5" action="" method="post">
          <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name">
          </div>
          <div class="mb-3">
            <label for="roomno" class="form-label">Room No</label>
            <input type="text" class="form-control" id="roomno" name="roomno">
          </div>
          <div class="mb-3">
            <label for="rent" class="form-label">Rent</label>
            <input type="name" class="form-control" id="rent" name="rent">
          </div>
          <button type="submit" class="btn btn-primary" name="submit">Add New Customer</button>
        </form>
    </div>
</body>
</html>