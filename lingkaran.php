<!DOCTYPE html>
<html lang="en">

<head>

  <title>Lingkaran</title>
  <!-- link bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

</head>

<body>

  <form class="row g-3" style="padding-top:10%; padding-left:10%; padding-right :10%;" action="" method="POST">

    <div class="col-md-6">
      <label for="inputpanjang" class="form-label">Jari-Jari</label>
      <input type="text" class="form-control" id="inputpanjang" name="jari">
    </div>


    <div class="col-12">
      <button type="submit" name="proses" class="btn btn-primary">Hitung</button>
    </div>
  </form>

  <?php
$phi=22/7;
$r=$_POST['jari'];
$luas=$phi*$r*$r;
$keliling= $phi*($r+$r);

extract($_POST);
if(isset($_POST['proses'])){

      }
  ?>
  <br>
  <table class="table table-sm text-center">
    <thead>
      <tr>
        <th scope="col">Jari-Jari</th>
        <th scope="col">Luas</th>
        <th scope="col">Keliling</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><?php echo $r; ?></td>
        <td><?php echo $luas; ?></td>
        <td><?php echo $keliling; ?></td>
      </tr>
    </tbody>
  </table>
  <a class="btn btn-primary" href="index.html" role="button" style="margin-left:10%;">Home</a>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
  </script>
</body>

</html>