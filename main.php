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
    </style>
</head>
<body>
<?php 
	include 'menu.php';
?>


</body>
</html>

<script>
    document.querySelector(".dropbtn").addEventListener("click", function() {
        document.querySelector(".dropdown-content").style.display = "block";
    });
</script>
