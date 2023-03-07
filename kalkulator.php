<!DOCTYPE html>
<html lang="en">

<head>

  <title>Persegi</title>
  <!-- link bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

</head> 

<body>
  <div class="container">
    <div class="card" style="margin-top: 10%;">
      <form class="row g-3" style="padding-top:10%; padding-left:10%; padding-right :10%;" action="" method="POST">

        <div class="col-md-6">
          <label for="inputangka" class="form-label">Angka 1</label>
          <input type="text" class="form-control" id="inputpanjang" name="angka1">
        </div>

        <div class="col-md-6">
          <label for="inputangka" class="form-label">Angka 2</label>
          <input type="text" class="form-control" id="inputlebar" name="angka2">
        </div>
        <select class="form-select col-6" aria-label="Default select example" name="operasi">
          <option value="PENJUMLAHAN">+</option>
          <option value="PENGURANGAN">-</option>
          <option value="PERKALIAN">x</option>
          <option value="PEMBAGIAN">/</option>
        </select>
        <div class="col-12">
          <button type="submit" name="proses" class="btn btn-primary">Hitung</button>
        </div>
      </form>


      <?php
extract($_POST);
if(isset($_POST['proses'])){
    $bil1 = $_POST['angka1'];
    $bil2 = $_POST['angka2'];
    $operasi = $_POST['operasi'];
    switch ($operasi) {
        case 'PENJUMLAHAN':
            $hasil = $bil1+$bil2;
        break;
        case 'PENGURANGAN':
            $hasil = $bil1-$bil2;
        break;
        case 'PERKALIAN':
            $hasil = $bil1*$bil2;
        break;
        case 'PEMBAGIAN':
            
            if ($bil1 == 0 or $bil2 == 0) {
                $hasil="Can't Divide By Zero";
              } else {
                $hasil = $bil1/$bil2;
              }
        break;			
    }
                 
          

      }
  ?>
      <br>

      <div class="card text-center">
        <div class="card-header">

        </div>
        <div class="card-body">
          <h5 class="card-title">H A S I L</h5>
          <p class="card-text"><?php echo $operasi; ?></p>
          <a href="#" class="btn btn-primary"><?php echo $hasil; ?></a>
        </div>

      </div>
      <a class="btn btn-primary" href="index.html" role="button">Home</a>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
      </script>
    </div>
  </div>
</body>

</html>
