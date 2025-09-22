<?php
  $menu="";

  function menuPont($szoveg,$tartalomId,$aktivMenu)
  {
    return '<li class="page-item"><a class="page-link" href="'.$_SERVER["PHP_SELF"].'?oldal='.$tartalomId.'">'.$szoveg.'</a></li>'
  }
?>




<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
  <title>Lapozós cucc</title>
</head>

<body onload="init()">
  <div class="container">
    <div class="row">
      <div class="col-12 col-lg-2 bg-primary"></div>
      <div class="col-12 col-lg-8 container">
        <nav aria-label="Page navigation example">
          <ul class="pagination justify-content-center">
            <li class="page-item"><a class="page-link" href="#">Previous</a></li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">Next</a></li>
          </ul>
        </nav>
        <div class="row" id="tartalom-1">
          <div class="col-12">
            <h1 class="text-center text-success">1. Taratlom</h1>
          </div>
        </div>
        <div class="row" id="tartalom-2">
          <div class="col-12">
            <h1 class="text-center text-success">2. Taratlom</h1>
          </div>
        </div>
        <div class="row" id="tartalom-3">
          <div class="col-12">
            <h1 class="text-center text-success">3. Taratlom</h1>
          </div>
        </div>
        <div class="row" id="tartalom-4">
          <div class="col-12">
            <h1 class="text-center text-success">4. Taratlom</h1>
          </div>
        </div>
        <div class="row" id="tartalom-5">
          <div class="col-12">
            <h1 class="text-center text-success">5. Taratlom</h1>
          </div>
        </div>
        <div class="row" id="tartalom-6">
          <div class="col-12">
            <h1 class="text-center text-success">6. Taratlom</h1>
          </div>
        </div>
        <div class="row" id="tartalom-7">
          <div class="col-12">
            <h1 class="text-center text-success">7. Taratlom</h1>
          </div>
        </div>
        <div class="row" id="tartalom-8">
          <div class="col-12">
            <h1 class="text-center text-success">8. Taratlom</h1>
          </div>
        </div>
        <div class="row" id="tartalom-9">
          <div class="col-12">
            <h1 class="text-center text-success">9. Taratlom</h1>
          </div>
        </div>
        <div class="row" id="tartalom-10">
          <div class="col-12">
            <h1 class="text-center text-success">10. Taratlom</h1>
          </div>
        </div>
      </div>
      <div class="col-12 col-lg-2 bg-primary"></div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
</body>

</html>