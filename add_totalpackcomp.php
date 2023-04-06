<?php
include 'database_connection.php';
  if(!isset($_POST['submit'])) {
	  // echo "خطا در ذخیره اطلاعات: " . $conn->error;
} else {

	  $id_packages = $_POST['id_packages'];
	  $id_company = $_POST['id_company'];
	  $escan_naj = $_POST['escan_naj'];
	  $escan_karb = $_POST['escan_karb'];
	  $escan_kaz = $_POST['escan_kaz'];
	  $naghl = $_POST['naghl'];
	  $dorchin = $_POST['dorchin'];
	  $siaheh = $_POST['siaheh'];
	  $airport_food = $_POST['airport_food'];
	  $airport_avz = $_POST['airport_avz'];
	  
$sql = "INSERT INTO addtotalpackcomp (id_packages, id_company, escan_naj, escan_karb, escan_kaz, naghl, dorchin, siaheh, airport_food, airport_avz) 
VALUES (
  $id_packages,$id_company,$escan_naj,$escan_karb,$escan_kaz,$naghl,$dorchin,$siaheh,$airport_food,
  $airport_avz
)
";

if ($conn->query($sql) === TRUE) {
    echo "اطلاعات با موفقیت در دیتابیس ذخیره شد.";
}
 $conn->close();
  }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>صفحه اصلی</title>
    <style>
        body {
            direction: rtl;
        }
        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #333;
        }
        li {
            float: right;
        }
        li a, .dropbtn {
            display: inline-block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }
        li a:hover, .dropdown:hover .dropbtn {
            background-color: red;
        }
        li.dropdown {
            display: inline-block;
        }
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            z-index: 1;
        }
        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            text-align: right;
        }
        .dropdown-content a:hover {
            background-color: #f1f1f1;
        }
        .dropdown:hover .dropdown-content {
            display: block;
        }
   
	table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: center;
  padding: 8px;
  font-size: 16px;
}

th {
  background-color: #4CAF50;
  color: white;
}

tr:nth-child(even) {
  background-color: #f2f2f2;
}

tr:hover {
  background-color: #ddd;
}
	</style>

</head>
<body>
<?php 
	include 'menu.php';
?>
	<form action="add_totalpackcomp.php" method="post">
  <label for="id_packages">دوره:</label>
  <select name="id_packages" id="id_packages">
	  <?php
      // Retrieve company data from 'company' table
      $packages_query = mysqli_query($conn, "SELECT * FROM packages");
      if (mysqli_num_rows($packages_query) > 0) {
        while ($packages = mysqli_fetch_assoc($packages_query)) {
          echo "<option value='" . $packages['id'] . "'>" . $packages['namepakage'] . "</option>";
        }
      }
    ?>
  </select>
  
  <br><br>
  
  <label for="id_company">نام شرکت:</label>
  <select name="id_company" id="id_company">
    <?php
      // Retrieve company data from 'company' table
      $company_query = mysqli_query($conn, "SELECT * FROM company");
      if (mysqli_num_rows($company_query) > 0) {
        while ($company = mysqli_fetch_assoc($company_query)) {
          echo "<option value='" . $company['id'] . "'>" . $company['namecompany'] . "</option>";
        }
      }
    ?>
  </select>
  
  <br><br>
  
  <label for="escan_naj">اسکان نجف:</label>
  <input type="text" name="escan_naj" id="escan_naj" required>
  
  <br><br>
  
  <label for="escan_karb">اسکان کربلا:</label>
  <input type="text" name="escan_karb" id="escan_karb" required>
  
  <br><br>
  
  <label for="escan_kaz">اسکان کاظمین:</label>
  <input type="text" name="escan_kaz" id="escan_kaz" required>
  
  <br><br>
  
  <label for="naghl">نقل:</label>
  <input type="text" name="naghl" id="naghl" required>
  
  <br><br>
  
  <label for="dorchin">دورچین:</label>
  <input type="text" name="dorchin" id="dorchin" required>
  
  <br><br>
  
  <label for="siaheh">سیاهه:</label>
  <input type="text" name="siaheh" id="siaheh" required>
  
  <br><br>
  
  <label for="airport_food">غذای فرودگاهی:</label>
  <input type="text" name="airport_food" id="airport_food" required>
  
  <br><br>
  
  <label for="airport_avz">عوارض فرودگاهی:</label>
  <input type="text" name="airport_avz" id="airport_avz" required>
  
  <br><br>
  
  <input type="submit" name="submit" value="اضافه">
</form>


</body>
</html>

<script>
    document.querySelector(".dropbtn").addEventListener("click", function() {
        document.querySelector(".dropdown-content").style.display = "block";
    });
</script>
