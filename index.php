<?php
require 'functions.php';
$datas = query("SELECT * FROM `cars`");


if (isset($_POST["submit-cars"])) {
  addCar($_POST);
}
if (isset($_POST["submit-brand"])) {
  addBrand($_POST);
}
if (isset($_POST["submit-customer"])) {
  addCustomer($_POST);
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
      /* display: flex; */
    }
    p {
      color: #ffffff;
    }
    .d-flex {
      color: #ffffff;
    }
    .image-author img {
      height: 120px;
      width: 120px;
      object-fit: cover;
    }
    .card-list {
      padding: 20px;
    }
    .image-author {
      width: 100px;
    }
    .card {
      height: 265px;
      width: 175px;
    }
    .body-img {
      width: 900px;
      height: 350px;
      object-fit: cover;
    }
    .card-text {
      height: 100px;
    }
    .btn-body {
      background-color: grey;
      color: blue;
    }
  </style>
</head>
<body style="background-color:#000000">
    <div class="container">
      <div class="d-flex flex-row my-5 justify-content-between">
        <h3>DW Cars</h3>
        <button type="button" data-bs-toggle="modal" data-bs-target="#modalProduct" class="btn btn-warning btn-post">Add Product</button>
        <button type="button" data-bs-toggle="modal" data-bs-target="#modalBrand" class="btn btn-warning btn-post">Add Brand</button>
        <button type="button" data-bs-toggle="modal" data-bs-target="#modalCustomer" class="btn btn-warning btn-post">Add Customer</button>
      </div>
      <?php $i = 1; ?>
      <?php foreach ($datas as $data) : ?>
      <div class="card mb-3 mt-3 p-2" style="background-color: #292929;">
        <div class="d-flex flex-row card-list">
          <div class="col-md-4 image-author text-center">
            <img src=<?= $data['image']; ?> alt="...">
            <div><?=$data["name"]?></div>
            <div>stock: <?=$data["stock"]?></div>
            <div class="text-center">
                <a href=<?="./detail.php?id={$data["id"]}";?> >
                  <button class="btn btn-body" type="button">Buy</button>
                </a>
            </div>
          </div>
          <div>
          </div>
        </div>
      </div>
    <?php $i++; ?>
    <?php endforeach; ?>

    <!-- Modal Product -->
  <div class="modal fade" id="modalProduct" tabindex="-1" role="dialog" aria-labelledby="modalProduct" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <form class="modal-content" method="POST">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tambah Mobil</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
        <div>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">Merk Mobil</span>
            <select name="brand_id" id="brand">
            <option value="1">Toyota</option>
            <option value="2">Honda</option>
            <option value="3">Daihatsu</option>
            </select>
            </div>
            </div>
        </div>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">Tipe Mobil</span>
            </div>
            <input type="text" class="form-control" placeholder="tipe mobil" aria-label="tipe mobil" aria-describedby="basic-addon1" name="name">
          </div>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">Image</span>
            </div>
            <input type="text" class="form-control" placeholder="image" aria-label="image" aria-describedby="basic-addon1" name="image">
          </div>
          <div class="input-group mb-3">
            <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">Color</span>
            </div>
              <select name="color" id="color">
              <option value="Putih">Putih</option>
              <option value="Merah">Merah</option>
              <option value="Biru">Biru</option>
              <option value="Hitam">Hitam</option>
              </select>
            </div>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">Deskripsi</span>
            </div>
            <input type="text" class="form-control" placeholder="deskripsi" aria-label="deskripsi" aria-describedby="basic-addon1" name="description">
          </div>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">stok</span>
            </div>
            <input type="text" class="form-control" placeholder="stok" aria-label="stok" aria-describedby="basic-addon1" name="stock">
          </div>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">Price</span>
            </div>
            <input type="text" class="form-control" placeholder="500.000.000" aria-label="price" aria-describedby="basic-addon1" name="price">
          </div>
        </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary" name="submit-cars">Save changes</button>
        </div>
      </form>
    </div>
  </div>

    <!-- Modal Brand -->
  <div class="modal fade" id="modalBrand" tabindex="-1" role="dialog" aria-labelledby="modalBrand" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <form class="modal-content" method="POST">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tambah Mobil</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
        <div>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">Merk Mobil</span>
            </div>
            <input type="text" class="form-control" placeholder="tipe mobil" aria-label="tipe mobil" aria-describedby="basic-addon1" name="name">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary" name="submit-brand">Save changes</button>
        </div>
      </form>
    </div>
  </div>

    <!-- Modal Customer -->
  <div class="modal fade" id="modalCustomer" tabindex="-1" role="dialog" aria-labelledby="modalCustomer" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <form class="modal-content" method="POST">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tambah Mobil</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
        <div>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">Merk Mobil</span>
            </div>
            <input type="text" class="form-control" placeholder="tipe mobil" aria-label="tipe mobil" aria-describedby="basic-addon1" name="name">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary" name="submit-customer">Save changes</button>
        </div>
      </form>
    </div>
  </div>
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>