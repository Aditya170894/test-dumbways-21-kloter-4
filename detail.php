<?php 
require 'functions.php';
$datas = query("SELECT * FROM `cars` WHERE id = {$_GET["id"]}");
$data = $datas[0];

if (!isset($selectedQty)) {
  $selectedQty=$data['stock'];
}
if (isset($_POST['qty-plus'])) {
  var_dump($selectedQty);
  $_GET['qty'] = $selectedQty;
  $selectedQty++;
}
if (isset($_POST['qty-min'])) {
  var_dump($selectedQty);
  $selectedQty--;
}
if (isset($_POST["update-cars"])) {
  updateStock($_POST, $_GET['id']);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <title>DW Cars</title>
  <style>
    *{
      padding: 0;
      margin: 0;
    }
    a {
      text-decoration: none;
    }
    .container {
      height: 100%;
    }
    p {
      color: #ffffff;
    }
    .d-flex {
      color: #ffffff;
    }
    .image-author img {
      height: 200px;
      width: 120px;
      object-fit: cover;
    }
    .card-list {
      padding: 20px;
    }
    .image-author {
      width: 120px;
    }
    .card-title {
      font-size: 30px;
      font-weight: bold;
    }
    .card {
      height: 700px;
    }
    .body-img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }
    .card-text {
      height: 100px;
    }
    .btn-body {
      background-color: #292938;
      color: blue;
    }
  </style>
</head>
<body style="background-color:#5b786c">
    <div class="container">
      <div class="d-flex flex-row my-5 justify-content-between">
        <div>
          <div class="card-body">
          <form method="POST">
            <h5 class="card-title" style="color: #ffffff;"><?=$data["name"]?></h5>
            <img class="body-img my-5" src=<?=$data["image"]?> alt="...">
            <div class="text-center">stock: </div>
            <div class="input-group-prepend">
                <button class="btn" type="button" onclick="minusAmount()">-</button>
              </div>
              <input id="qty-input" type="text" class="form-control" placeholder=<?= $data['stock'];?> value="<?= $selectedQty;?>" name="stock">
              <div class="input-group-append">
                <button class="btn" type="button" onclick="plusAmount()">+</button>
              </div>
            <div class="text-center">
                <a href=<?="./detail.php?id={$data["id"]}";?> >
                  <button class="btn btn-body" type="submit" name="update-cars">Update</button>
                </a>
            </div>
            </form>
          </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
<script>
  
    function plusAmount () {
        let qtyInput = document.getElementById('qty-input');
        qtyInput.value++;
    };

    function minusAmount () {
        let qtyInput = document.getElementById('qty-input');
      if (qtyInput.value > 0) {
        qtyInput.value--;
      }
    }
</script>
</html>
