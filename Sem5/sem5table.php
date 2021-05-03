<?php
$link = mysqli_connect("localhost", "root", "", "feedback");

if ($link === false)
{
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$sql = "CREATE TABLE sem5(
	fname VARCHAR(30) NOT NULL,
	lname VARCHAR(30) NOT NULL,
	jntuno VARCHAR(30) NOT NULL,
	year INT(4) NOT NULL,
	email VARCHAR(30) NOT NULL,
	mobile BIGINT(10) NOT NULL,
	gender VARCHAR(10) NOT NULL,
	sem INT(2) NOT NULL,
	c1 INT(2) NOT NULL,c2 INT(2) NOT NULL,c3 INT(2) NOT NULL,c4 INT(2) NOT NULL,c5 INT(2) NOT NULL,c6 INT(2) NOT NULL,
	d1 INT(2) NOT NULL,d2 INT(2) NOT NULL,d3 INT(2) NOT NULL,d4 INT(2) NOT NULL,d5 INT(2) NOT NULL,d6 INT(2) NOT NULL,
	e1 INT(2) NOT NULL,e2 INT(2) NOT NULL,e3 INT(2) NOT NULL,e4 INT(2) NOT NULL,e5 INT(2) NOT NULL,e6 INT(2) NOT NULL,
	l1 INT(2) NOT NULL,l2 INT(2) NOT NULL,l3 INT(2) NOT NULL,l4 INT(2) NOT NULL,l5 INT(2) NOT NULL,l6 INT(2) NOT NULL,
	r1 INT(2) NOT NULL,r2 INT(2) NOT NULL,r3 INT(2) NOT NULL,r4 INT(2) NOT NULL,r5 INT(2) NOT NULL,r6 INT(2) NOT NULL,
	s1 INT(2) NOT NULL,s2 INT(2) NOT NULL,s3 INT(2) NOT NULL,s4 INT(2) NOT NULL,s5 INT(2) NOT NULL,s6 INT(2) NOT NULL,
	di1 INT(2) NOT NULL,di2 INT(2) NOT NULL,di3 INT(2) NOT NULL,di4 INT(2) NOT NULL,di5 INT(2) NOT NULL,di6 INT(2) NOT NULL,
	ed1 INT(2) NOT NULL,ed2 INT(2) NOT NULL,ed3 INT(2) NOT NULL,ed4 INT(2) NOT NULL,ed5 INT(2) NOT NULL,ed6 INT(2) NOT NULL,
	ss1 INT(2) NOT NULL,ss2 INT(2) NOT NULL,ss3 INT(2) NOT NULL,ss4 INT(2) NOT NULL,ss5 INT(2) NOT NULL,ss6 INT(2) NOT NULL,
	imgfn LONGTEXT NOT NULL
)";
if (mysqli_query($link, $sql))
{
    echo "Table created successfully.";
}
else
{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

mysqli_close($link);
?>
