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
  <form class="row g-3" style="padding-top:10%; padding-left:10%; padding-right :10%;" action="" method="POST">
    
    <div class="col-md-12">
      
      <label for="inputpanjang" class="form-label">Alas</label>
      <input type="text" class="form-control" id="inputpanjang" name="alas">
    </div>
    <div class="col-md-12">
      <label for="inputlebar" class="form-label">Tinggi</label>
      <input type="text" class="form-control" id="inputlebar" name = "tinggi">
    </div>

    

    <?php
extract($_POST);
if(isset($_POST['proses'])){
  $alas=$_POST['alas'];
  $tinggi=$_POST['tinggi'];
                 
          // menghitung luas 
  $luas_segitiga= 1/2*$alas*$tinggi;
          

      }
  ?>
  <br>
  <table class="table table-sm text-center">
  <thead>
    <tr>
      <th scope="col">Alas</th>
      <th scope="col">Tinggi</th>
      <th scope="col">Luas</th>
      
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><?php echo $alas; ?></td>
      
      <td><?php echo $tinggi; ?></td>
      <td><?php echo $luas_segitiga; ?></td>
      
    </tr>
  </tbody>
</table>
<div class="col-md-6">
      <button type="submit" name="proses" class="btn btn-primary"> G A S</button>
    </div>
  </form>

</div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
  </script>
</body>

</html>