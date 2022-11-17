<!DOCTYPE html>
<html lang="en">

<head>

  <title>Kalkulator</title>
  <!-- link bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

</head>

<body>
    <div class="container">
  <form class="row g-3" style="padding-top:10%; padding-left:10%; padding-right :10%;" action="" method="POST">
    
    <div class="col-md-12">
      
      <label for="inputpanjang" class="form-label">Masukan Angka</label>
      <input type="text" class="form-control" id="inputpanjang" name="input1">
    </div>
    <div class="col-md-12">
      <label for="inputlebar" class="form-label">Masukan Angka</label>
      <input type="text" class="form-control" id="inputlebar" name = "input2">
    </div>
   
    <select class="form-select col-6" aria-label="Default select example" name="operator" >
    <option value="+">+</option>
				<option value="-">-</option>
				<option value="*">x</option>
				<option value="/">/</option>
	</select>
    

    <?php
extract($_POST);
if(isset($_POST['proses'])){
    $bil1 = $_POST['input1'];
    $bil2 = $_POST['input2'];
    $operasi = $_POST['operator'];
    switch ($operasi) {
        case '+':
            $hasil = $bil1+$bil2;
        break;
        case '-':
            $hasil = $bil1-$bil2;
        break;
        case '*':
            $hasil = $bil1*$bil2;
        break;
        case '/':
            
            if ($bil1 == 0 or $bil2 == 0) {
                $hasil="Tidak Bisa Dibagi 0";
              } else {
                $hasil = $bil1/$bil2;
              }
        break;			
    }
                 
          

      }
  ?>
  <br>
  <table class="table table-sm text-center">
  <thead>
    <tr>
      <th scope="col">Angka 1</th>
      <th scope="col">Operator</th>
      <th scope="col">Angka 2</th>
      <th scope="col">Hasil</th>
      
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><?php echo $bil1; ?></td>
      <td><?php echo $operasi; ?></td>
      <td><?php echo $bil2; ?></td>
      <td><?php echo $hasil; ?></td>
      
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