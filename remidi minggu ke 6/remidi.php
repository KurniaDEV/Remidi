<?php
$merk = [
  ["Laptop", "Asus",4, 3000000],
  ["Kabel", "lan5m",29, 20000],
  ["Kabel", "lan1m",110, 20000],
  ["Kabel", "usbTc",59, 20000],
  ["Laptop", "Dell",4, 2000000],
  ["Laptop", "Samsung",4, 1000000],
    ["Laptop", "Thosiba",6, 2000000],
    ["Hand Phone", "Xiaomi",9, 1500000],
    ["Hand Phone", "Samsung",2, 1000000],
    ["TV", "LG",2, 2900000]
];

// Membuat Pilihan
$temp_arr=[];

foreach ($merk as $key) {
//    var_dump($key[0]);
   $temp_arr[]=$key[0];
}
$pilihan=array_unique($temp_arr);
// var_dump($pilihan);

// End pilihan

// Blok filter
$tampilkan_merk=[];
if(isset($_POST['filter']))
{
    // echo "tes";
    // var_dump($_POST['filter']);
    $filter=$_POST['filter'];
    if($filter == "")
    {
        $tampilkan_merk=$merk;
    }else{
        foreach($merk as $key)
        {
            if($key[0] == $filter){
                $tampilkan_merk[]=[$key[0],$key[1],$key[2],$key[3]];
            }
        }
    }
}else{
    $tampilkan_merk=$merk;
}
// var_dump($tampilkan_merk);

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>hasil penjualan</title>
<link rel="shortcut icon" href="agung-jaya.png" type="image/x-icon">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <body>

    <nav class="navbar navbar-expand-lg navbar-light bg-info">              
  <a class="navbar-brand" href="#"><img  width="150" height="100"  src="agung-jaya.png"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
   
  </div>
</nav>
<div class="d-flex"><h2 class="mx-auto">Hasil Penjualan Toko Elektronik AGUNG JAYA 20 November 2020</div>
<br>

<form class="form-inline my-2 my-lg-0 bg-danger"  action="remidi.php" method="post">
    <select  name="filter" class="mr-2">
            <option value="" class="mr-2">
                Tampilkan Semua
            </option>
            <?php foreach ($pilihan as $key): ?>
                <option value="<?php echo $key; ?>"><?php echo $key; ?></option>
            <?php endforeach; ?>      
        </select>
        <input type="submit" value="filter">
      
    </form>
    <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">TYPE</th>
      <th scope="col">MERK</th>
      <th scope="col">JUMLAH</th>
      <th scope="col">HARGA</th>
    </tr>
  </thead>
  <?php $grand_total=0; ?>
  <?php foreach ($tampilkan_merk as $key => $value): ?>
  <tbody>
    <tr>
      <td><?php echo $value[0]; ?></td>
      <td><?php echo $value[1]; ?></td>
      <td><?php echo $value[2]; ?></td>
      <td><?php echo $value[3]; ?></td>
    </tr>
</tbody>
<?php $grand_total+=$value[3]*$value[2]; ?>
<?php endforeach; ?>
<thead class="thead-light">
    <tr>
      <th scope="col">Total Keseluruhan</th>
      <th scope="col"></th>
      <th scope="col"></th>
      <th scope="col"><?php echo $grand_total; ?></th>
    </tr>
  </thead>

</table>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>