<html>
<head>
<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html">
<link rel="stylesheet" href="style.css"  type="text/css">
<title>MySQL</title>
</head>

<h1>Тестовый деплой!</h1>
<?php 
$host = 'mysql';
$user = 'root';
$pass = '123456';
$db   = 'test';
$conn = mysqli_connect($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected to MySQL successfully!<br><br>";

echo "Случайная выборка из двух таблиц после обновления страницы. <br>";

$query = "select t1.firstname as women, t2.firstname as men from names1 t1 inner join names2 t2 ORDER BY RAND() LIMIT 1";
$result = mysqli_query($conn, $query);

print("<br><br>");

while ($row = mysqli_fetch_assoc($result)) {
    printf("<b>%s %s %s</br>\n", $row["women"], "+", $row["men"]);
    echo 'generation on host_php='.$_ENV["HOSTNAME"]. '';
    print ("<br>");
}

?>

<!--?php 



$query = "Select * from names1 ORDER BY RAND()";
$result = mysql_query($query);
$row=mysql_fetch_array($result);


#$randval = rand(0, mysql_num_rows($result) - 1);

#$quotetext = mysql_result($result, $randval, 1);
$quoteauthor = mysql_result($result, $randval, 2);

print "$quotetext<br>$quoteauthor";


?-->


</html>
