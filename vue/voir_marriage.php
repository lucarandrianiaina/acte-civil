<?php
include_once '../model/function.php';
$id = $_GET['id'];
$marriage = get_marriage($id);
?>
<!DOCTYPE html>
<html>
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="..\public\bootstrap-5.3.2\dist\css\bootstrap.min.css">
      <title>information du marriage</title>
</head>
<body>
      <div class="container my-5">
            <div class="row">
                  <div class="col-12">
                        nom epoux: <?= var_dump($marriage['id_m']);?>
                  </div>
                  <div class="col-12">
                        nom epouse
                  </div>
                  <div class="col-12">
                        date du marriage
                  </div>
            </div>
      </div>
</body>
</html>