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
<table>
  <thead>
    <tr>
      <th>دوره</th>
      <th>نام شرکت</th>
		<th>اسکان نجف</th>
		<th>اسکان کربلا</th>
		<th>اسکان کاظمین</th>
		<th>نقل</th>
		<th>دورچین</th>
		<th>سیاحه</th>
		<th>غذای فرودگاهی</th>
		<th>عوارض فرودگاهی</th>
		<th>عملیات</th>
		
    </tr>
  </thead>
  <tbody>
	 <?php
// برقراری ارتباط با پایگاه داده
 include 'database_connection.php';
// دریافت داده‌ها از جدول addtotalpackcomp
$sql = "SELECT packages.namepakage AS package_name, company.namecompany AS company_name, escan_naj, escan_karb, escan_kaz, naghl, dorchin, siaheh, airport_food, airport_avz FROM addtotalpackcomp JOIN packages ON addtotalpackcomp.id_packages = packages.id JOIN company ON addtotalpackcomp.id_company = company.id ORDER BY package_name DESC";
$result = mysqli_query($conn, $sql);

// نمایش داده‌ها در فرم
if (mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>" . $row["package_name"] . "</td>";
    echo "<td>" . $row["company_name"] . "</td>";
    echo "<td>" . $row["escan_naj"] . "</td>";
    echo "<td>" . $row["escan_karb"] . "</td>";
    echo "<td>" . $row["escan_kaz"] . "</td>";
    echo "<td>" . $row["naghl"] . "</td>";
    echo "<td>" . $row["dorchin"] . "</td>";
    echo "<td>" . $row["siaheh"] . "</td>";
    echo "<td>" . $row["airport_food"] . "</td>";
    echo "<td>" . $row["airport_avz"] . "</td>";
    echo "<td><a href='#'>ویرایش</a> | <a href='#'>حذف</a></td>";
    echo "</tr>";
  }
} else {
  echo "هیچ داده‌ای برای نمایش وجود ندارد.";
}

mysqli_close($conn);
?>
  </tbody>
</table>

</body>
</html>

<script>
    document.querySelector(".dropbtn").addEventListener("click", function() {
        document.querySelector(".dropdown-content").style.display = "block";
    });
</script>
