<html>
	<head>
	<title>WEATHER APP</title>
	<h2>Kondisi Cuaca Di Demak Kota</h2>
	</head>
	
	<body>
	
<?php
    require 'GetWeather.php';
    error_reporting (E_ALL^ (E_NOTICE|E_WARNING));
?>
<?php
echo "<h1> </h1>";
echo "<hr>";
echo "<table width = 1350 border =1  >
<tr>
<td align=center>Info</td>
<td align=center>  hari ke 1   </td>
<td align=center>  hari ke 2   </td>
<td align=center>  hari ke 3   </td>
<td align=center>  hari ke 4   </td>
<td align=center>  hari ke 5   </td>
<td align=center>  hari ke 6   </td>
<td align=center>  hari ke 7   </td>
<td align=center>  hari ke 8   </td>
<td align=center>  hari ke 9   </td>

</tr>
<tr>
<td align=center>Kondisi</td>
<td align=center>$kondisi1</td>
<td align=center>$kondisi2</td>
<td align=center>$kondisi3</td>
<td align=center>$kondisi4</td>
<td align=center>$kondisi5</td>
<td align=center>$kondisi6</td>
<td align=center>$kondisi7</td>
<td align=center>$kondisi8</td>
<td align=center>$kondisi9</td>
</tr>
<tr>
<td align=center>Suhu Celcius</td>
<td align=center>$suhu1</td>
<td align=center>$suhu2</td>
<td align=center>$suhu3</td>
<td align=center>$suhu4</td>
<td align=center>$suhu5</td>
<td align=center>$suhu6</td>
<td align=center>$suhu7</td>
<td align=center>$suhu8</td>
<td align=center>$suhu9</td>
</tr>
<tr>
<td align=center>Suhu Fahrenheit</td>
<td align=center>$suhu1</td>
<td align=center>$suhu2</td>
<td align=center>$suhu3</td>
<td align=center>$suhu4</td>
<td align=center>$suhu5</td>
<td align=center>$suhu6</td>
<td align=center>$suhu7</td>
<td align=center>$suhu8</td>
<td align=center>$suhu9</td>
</tr>
<tr>
<td align=center>Angin</td>
<td align=center>$angin1</td>
<td align=center>$angin2</td>
<td align=center>$angin3</td>
<td align=center>$angin4</td>
<td align=center>$angin5</td>
<td align=center>$angin6</td>
<td align=center>$angin7</td>
<td align=center>$angin8</td>
<td align=center>$angin9</td>
</tr>
<tr>
<td align=center>Gambar</td>
<td align=center><img src='http://icons.wxug.com/i/c/k/" . $image . ".gif'></td>
<td align=center><img src='http://icons.wxug.com/i/c/k/" . $image . ".gif'></td>
<td align=center><img src='http://icons.wxug.com/i/c/k/" . $image . ".gif'></td>
<td align=center><img src='http://icons.wxug.com/i/c/k/" . $image . ".gif'></td>
<td align=center><img src='http://icons.wxug.com/i/c/k/" . $image . ".gif'></td>
<td align=center><img src='http://icons.wxug.com/i/c/k/" . $image . ".gif'></td>
<td align=center><img src='http://icons.wxug.com/i/c/k/" . $image . ".gif'></td>
<td align=center><img src='http://icons.wxug.com/i/c/k/" . $image . ".gif'></td>
<td align=center><img src='http://icons.wxug.com/i/c/k/" . $image . ".gif'></td>
<tr>
</table>";
?>
	<br></br>
	<form action="Index.php" method="get">
		<input class="btnForm" type="submit" name="submit" value="Selesai"/>
	</form>
</html>