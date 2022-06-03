<?php
$datev = "Pick A Date";
if (isset($_GET['text'])) {
    $text = $_GET['text'];
} else {
    $text = "W0iUoYK3xnircD1";
}
if (isset($_GET['date'])) {
    $date = $_GET['date'];
} else {
    $date = 0;
}

if ($date < 32 && $date > 0) {
	$datev = $date;
}
if ($text != "W0iUoYK3xnircD1") {
 $text = $text; file_put_contents("days/".$datev.".txt",$text);
}
// Monthifying Stuff

// Get month into $month (two digit number)
$month = date("m");
$monthw = "Something Went Wrong";
//$month = 07;
// Calibrating Dates too Cells/Days of the Week
$sub = 0;
if ($month == "05") {
	$sub = 0;
	$monthw = "May";
}
if ($month == "06") {
	$sub = 3;
	$monthw = "June";
}
if ($month == "07") {
	$sub = 5;
	$monthw = "July";
}
if ($month == "08") {
	$sub = 1;
	$monthw = "August";
}
if ($month == "09") {
	$sub = 4;
	$monthw = "September";
}
if ($month == "10") {
	$sub = 6;
	$monthw = "October";
}
if ($month == "11") {
	$sub = 2;
	$monthw = "November";
}
if ($month == "12") {
	$sub = 4;
	$monthw = "December";
}

// First Row
$a1  = 1 - $sub;
$a2  = 2 - $sub;
$a3  = 3 - $sub;
$a4  = 4 - $sub;
$a5  = 5 - $sub;
$a6  = 6 - $sub;
$a7  = 7 - $sub;
// Second Row
$b8  = 8 - $sub;
$b9  = 9 - $sub;
$b10 = 10 - $sub;
$b11 = 11 - $sub;
$b12 = 12 - $sub;
$b13 = 13 - $sub;
$b14 = 14 - $sub;
// Third Row
$c15 = 15 - $sub;
$c16 = 16 - $sub;
$c17 = 17 - $sub;
$c18 = 18 - $sub;
$c19 = 19 - $sub;
$c20 = 20 - $sub;
$c21 = 21 - $sub;
// Fourth Row
$d22 = 22 - $sub;
$d23 = 23 - $sub;
$d24 = 24 - $sub;
$d25 = 25 - $sub;
$d26 = 26 - $sub;
$d27 = 27 - $sub;
$d28 = 28 - $sub;
// Fifth Row
$e29 = 29 - $sub;
$e30 = 30 - $sub;
$e31 = 31 - $sub;
// Possibly not needed (depends on month)
$e32 = 32 - $sub; 
$e33 = 33 - $sub;
$e34 = 34 - $sub;
$e35 = 35 - $sub;
//Sixth Row
$f36 = 36 - $sub;
$f37 = 37 - $sub;

// dates...
$test = "false";
// Calibrate Dates to Days of the Week
// May
if ($month == "05") {
	$e32 = ".";
	$e33 = ".";
	$e34 = ".";
	$e35 = ".";
	$f36 = ".";
	$f37 = ".";
}
// June
 if ($month == "06") {;
	$a1 = "."; 
	$a2 = ".";
	$a3 = ".";
	$e34 = ".";
	$e35 = ".";
	$f36 = ".";
	$f37 = ".";
}
// July
if ($month == "07") {
	$a1 = "."; 
	$a2 = ".";
	$a3 = ".";
	$a4 = ".";
	$a5 = ".";
	$f37 = ".";
}

// August
if ($month == "08") {
	$a1 = "."; 
	$e33 = ".";
	$e34 = ".";
	$e35 = ".";
	$f36 = ".";
	$f37 = ".";
}
// September
if ($month == "09") {
	$a1 = "."; 
	$a2 = ".";
	$a3 = ".";
	$a4 = ".";
	$e35 = ".";
	$f36 = ".";
	$f37 = ".";
}
// October
if ($month == "10") {
	$a1 = "."; 
	$a2 = ".";
	$a3 = ".";
	$a4 = ".";
	$a5 = ".";
	$a6 = ".";
}
// November
if ($month == "11") {
	$a1 = "."; 
	$a2 = ".";
	$e33 = ".";
	$e34 = ".";
	$e35 = ".";
	$f36 = ".";
	$f37 = ".";
}
// December
if ($month == "12") {
	$a1 = "."; 
	$a2 = ".";
	$a3 = ".";
	$a4 = ".";
	$e32 = ".";
	$e33 = ".";
	$e34 = ".";

}
?>
<html>
    <head>
        <title>Event Calender</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <h1>Event Calender</h1>
        <br>
		<div class="form">
			<form action="index.php" method="put">
					<select name="date">
						<option value="0">Pick A Date</option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
						<option value="6">6</option>
						<option value="7">7</option>
						<option value="8">8</option>
						<option value="9">9</option>
						<option value="10">10</option>
						<option value="11">11</option>
						<option value="12">12</option>
						<option value="13">13</option>
						<option value="14">14</option>
						<option value="15">15</option>
						<option value="16">16</option>
						<option value="17">17</option>
						<option value="18">18</option>
						<option value="19">19</option>
						<option value="20">20</option>
						<option value="21">21</option>
						<option value="22">22</option>
						<option value="23">23</option>
						<option value="24">24</option>
						<option value="25">25</option>
						<option value="26">26</option>
						<option value="27">27</option>
						<option value="28">28</option>
						<option value="29">29</option>
						<option value="30">30</option>
						<option value="31">31</option>
					</select>
				<br>
				<textarea name="text" placeholder="Event Discription" style="height:200px"></textarea>
				<br>
				<input type="submit" value="Enter">
			</form>
		</div>
		<br>
		<div class="instructions">
		<h3>Instructions</h3>
		<h4>To Clear a Day:</h4> 
		<p>Select the day and leave the text area empty.</p>
		<h4>Multiple events in a day:</h4>
		<p>To put multiple events into a day, type &lt;br> in between the events</p>
		</div>
		<br>
		<br>
        <table>
			<div class="month">
			<tr>
				<td style="border: 0px solid black;"></td>
				<td style="border: 0px solid black;"></td>
				<td style="border: 0px solid black;"></td>
				<td style="border: 0px solid black;
				text-align:center;
				font-size: 50px;
				vertical-align: bottom;">
  				<?= $monthw ?></td>
				<td style="border: 0px solid black;"></td>
				<td style="border: 0px solid black;"></td>
				<td style="border: 0px solid black;"></td>
			</tr>
			</div>
			<tr>
				<th>Sunday</th>
				<th>Monday</th>
				<th>Tuesday</th>
				<th>Wednesday</th>
				<th>Thurday</th>
				<th>Friday</th>
				<th>Saturday</th>
			</tr>
			<tr><div class="area">
				<td><h2><?= $a1 ?></h2><div class="area"><p><?php include_once("days/".$a1.".txt")?></p></div></td>
				<td><h2><?= $a2 ?></h2><div class="area"><p><?php include_once("days/".$a2.".txt")?></p></div></td>
				<td><h2><?= $a3 ?></h2><div class="area"><p><?php include_once("days/".$a3.".txt")?></p></div></td>
				<td><h2><?= $a4 ?></h2><div class="area"><p><?php include_once("days/".$a4.".txt")?></p></div></td>
				<td><h2><?= $a5 ?></h2><div class="area"><p><?php include_once("days/".$a5.".txt")?></p></div></td>
				<td><h2><?= $a6 ?></h2><div class="area"><p><?php include_once("days/".$a6.".txt")?></p></div></td>
				<td><h2><?= $a7 ?></h2><div class="area"><p><?php include_once("days/".$a7.".txt")?></p></div></td>
			</tr>
            <tr>
				<td><h2><?= $b8 ?></h2><div class="area"><p><?php include_once("days/".$b8.".txt")?></p></div></td>
				<td><h2><?= $b9 ?></h2><div class="area"><p><?php include_once("days/".$b9.".txt")?></p></div></td>
				<td><h2><?= $b10 ?></h2><div class="area"><p><?php include_once("days/".$b10.".txt")?></p></div></td>
				<td><h2><?= $b11 ?></h2><div class="area"><p><?php include_once("days/".$b11.".txt")?></p></div></td>
				<td><h2><?= $b12 ?></h2><div class="area"><p><?php include_once("days/".$b12.".txt")?></p></div></td>
				<td><h2><?= $b13 ?></h2><div class="area"><p><?php include_once("days/".$b13.".txt")?></p></div></td>
				<td><h2><?= $b14 ?></h2><div class="area"><p><?php include_once("days/".$b14.".txt")?></p></div></td>
			</tr>            
            <tr>
				<td><h2><?= $c15 ?></h2><div class="area"><p><?php include_once("days/".$c15.".txt")?></p></div></td>
				<td><h2><?= $c16 ?></h2><div class="area"><p><?php include_once("days/".$c16.".txt")?></p></div></td>
				<td><h2><?= $c17 ?></h2><div class="area"><p><?php include_once("days/".$c17.".txt")?></p></div></td>
				<td><h2><?= $c18 ?></h2><div class="area"><p><?php include_once("days/".$c18.".txt")?></p></div></td>
				<td><h2><?= $c19 ?></h2><div class="area"><p><?php include_once("days/".$c19.".txt")?></p></div></td>
				<td><h2><?= $c20 ?></h2><div class="area"><p><?php include_once("days/".$c20.".txt")?></p></div></td>
				<td><h2><?= $c21 ?></h2><div class="area"><p><?php include_once("days/".$c21.".txt")?></p></div></td>
			</tr>            
            <tr>		
                <td><h2><?= $d22 ?></h2><div class="area"><p><?php include_once("days/".$d22.".txt")?></p></div></td>
                <td><h2><?= $d23 ?></h2><div class="area"><p><?php include_once("days/".$d23.".txt")?></p></div></td>
				<td><h2><?= $d24 ?></h2><div class="area"><p><?php include_once("days/".$d24.".txt")?></p></div></td>
				<td><h2><?= $d25 ?></h2><div class="area"><p><?php include_once("days/".$d25.".txt")?></p></div></td>
	 			<td><h2><?= $d26 ?></h2><div class="area"><p><?php include_once("days/".$d26.".txt")?></p></div></td>
 				<td><h2><?= $d27 ?></h2><div class="area"><p><?php include_once("days/".$d27.".txt")?></p></div></td>
				<td><h2><?= $d28 ?></h2><div class="area"><p><?php include_once("days/".$d28.".txt")?></p></div></td>
			</tr>            
            <tr>	
                <td><h2><?= $e29 ?></h2><div class="area"><p><?php include_once("days/".$e29.".txt")?></p></div></td>
				<td><h2><?= $e30 ?></h2><div class="area"><p><?php include_once("days/".$e30.".txt")?></p></div></td>
				<td><h2><?= $e31 ?></h2><div class="area"><p><?php include_once("days/".$e31.".txt")?></p></div></td>
				<td><h2><?= $e32 ?></h2><div class="area"><p><?php include_once("days/".$e32.".txt")?></p></div></td>
                <td><h2><?= $e33 ?></h2><div class="area"><p><?php include_once("days/".$e33.".txt")?></p></div></td>
                <td><h2><?= $e34 ?></h2><div class="area"><p><?php include_once("days/".$e34.".txt")?></p></div></td>
                <td><h2><?= $e35 ?></h2><div class="area"><p><?php include_once("days/".$e35.".txt")?></p></div></td>
			</tr>
			<tr>	
                <td><h2><?= $f36 ?></h2><div class="area"><p><?php include_once("days/".$f36.".txt")?></p></div></td>
				<td><h2><?= $f37 ?></h2><div class="area"><p><?php include_once("days/".$f37.".txt")?></p></div></td>
				<td><h2>.</h2><div class="area"><p><?php include_once("days/..txt")?></p></div></td>
				<td><h2>.</h2><div class="area"><p><?php include_once("days/..txt")?></p></div></td>
				<td><h2>.</h2><div class="area"><p><?php include_once("days/..txt")?></p></div></td>
				<td><h2>.</h2><div class="area"><p><?php include_once("days/..txt")?></p></div></td>
				<td><h2>.</h2><div class="area"><p><?php include_once("days/..txt")?></p></div></td>


			</tr>

		</table>
    </body>
</html>