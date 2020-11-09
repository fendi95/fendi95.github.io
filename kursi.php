<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html >

<head>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<title>ibc.gunadarma.ac.id</title>

<link href="gaya.css" rel="stylesheet" type="text/css" />

</head>

<body>

<div id="wrapper">

<div id="header"></div>

<div id="menu">



<?php

 $menu=1;

 include "topmenu.php";

?>

  </div>

<div id="bawahnav"></div>

<div id="clearer"></div>

<div id="leftcontent">

<div id="teks"><h2>Selamat Datang <?php echo "$namanya"; ?><br><br>Silahkan Mengisi Form Berikut untuk Pesan Tiket</h2>



<form method="post" action="pesanan.php" name="formdaftar">

<center><img src="images/sheet.jpg" width="450px" height="350px"></center><br><br><br>

<table>

<tr><td>Pesan untuk hari</td> <td>:</td><td>

<select name="hari">

<option value="senin">senin</option>

<option value="selasa">selasa</option>

<option value="rabu">rabu</option>

<option value="kamis">kamis</option>

<option value="jumat">jum'at</option>

<option value="sabtu">sabtu</option>

<option value="minggu">minggu</option>

</select></td></tr>



<tr><td>Pilih tempat teater</td><td>:</td><td>

<select name="tempat">

<option value="Bogor">Botanisquare Bogor</option>

<option value="Jakarta">Pondok Indah Mall Jakarta</option>

<option value="Depok">Margo City Depok</option>

</select>

</tr>

<tr><td>Pilih judul film</td><td>:</td><td>

<select name="film">

<option value="pocong juga pocong">pocong juga pocong (HTM: 25000)</option>

<option value="twilight">breaking-down twilight (HTM: 25000)</option>

<option value="jhony english">jhony english (HTM: 25000)</option>

<option value="pengejar angin">pengejar angin (HTM: 25000)</option>

<option value="sang penari">sang penari (HTM: 25000)</option>

<option value="perfect house">perfect house (HTM: 25000)</option>

<option value="the rum diary">the rum diary(HTM: 25000)</option>

<option value="x-men">x men first class(HTM: 25000)</option>

<option value="kehormatan">kehormatan dibalik kerudung(HTM: 25000)</option>

</select></td></tr>

<tr><td>Pilih jam tayang</td><td>:</td><td>

<select name="jam">

<option value="12:30">12:30</option>

<option value="12:45">12:45</option>

<option value="13:00">13:00</option>

<option value="14:50">14:50</option>

<option value="15:10">15:10</option>

<option value="17:00">17:00</option>

<option value="19:30">19:30</option>

<option value="21:25">21:25</option>

<option value="21:55">21:55</option>

</select></td></tr>

<tr><td>Pilih sheet tempat duduk  </td><td>:</td><td><b>BARIS</b> :

<select name="baris"><option value="a">a</option>

<option value="b">b</option>

<option value="c">c</option>

<option value="d">d</option>

<option value="e">e</option>

<option value="f">f</option>

<option value="g">g</option>

<option value="h">h</option>

<option value="i">i</option>

<option value="j">j</option>

<option value="k">k</option>

<option value="a">l</option>>

</select> 

<b>KOLOM</b> :<select name="kolom">

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

</select>

</td></tr>

</table>

<br>

<table valign="right"><tr><td><input type="submit" name="simpan" value="cetak"></td><td><input type="reset" value="batal"></td></tr>

</table><br>

  

</form>

</div>

</div>

<div id="rightcontent"><strong>Cari Di Website </strong><br/>

   <form id="searchthis" action="http://google.co.id/search" style="display:inline;" method="get">

   <input id="b-query" maxlength="255" name="q" size="17" type="text"/>

   <input id="b-searchbtn" value="Search" type="submit"/>

   </form>

   <hr/>

   <center><img src="./images/gundar.gif" width="170" height="200"><br/>

   <i><font color="#666666" face="verdana"><strong>Powered By <br/>3 KA 01</strong></font></i></center>

   <br/><br/>

</div>

<div id="clearer"></div>

<div id="footer">Copyright 2011 By aya aya naon iye teh . All Right Reserved </div>

</div>

</body>

</html>