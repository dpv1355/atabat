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
      <th>نام شرکت</th>
      <th>عملیات</th>
    </tr>
  </thead>
  <tbody>
    <?php
	   include 'database_connection.php';
    $sql = "SELECT * FROM company";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
      while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row['namecompany'] . "</td>";
        echo "<td><a href='edit_company.php?id=" . $row['id'] . "'>ویرایش</a> | <a href='delete_company.php?id=" . $row['id'] . "'>حذف</a></td>";
        echo "</tr>";
      }
    } else {
      echo "<tr><td colspan='2'>هیچ شرکتی یافت نشد.</td></tr>";
    }
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
