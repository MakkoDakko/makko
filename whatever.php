<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <title>Makko's website</title>
    <style>
html{
  font-family: "Arial", sans-serif;  
  font-size: 1rem;
  color:black;
}

a {
    color: blue;
    text-decoration: underline; 
}

a:hover {
    color: green;
    text-decoration: underline;
    font-size: 1.1rem;
    font-weight: 300;
}
a:visited {
    color: darkmagenta;
}
body {
    margin: 8;
    font-family: Verdana, Geneva, Tahoma, sans-serif;
    background: bisque ;
    text-align: center;
    display: flex;
    flex-direction: column;
    align-items: center;
}

button {
  border: solid;
  background-color: greenyellow;
  padding: 10px 20px;
  font-size: 16px;
  cursor: pointer;
  display: inline-block;
}

button:hover {
  background-color: #008cba;
  color: white;
}

footer {
  bottom:0;
  left:0;
  width:100%;
  height: 40px;
}
table {
  border-collapse: collapse;
}

th {
  padding: 5px;
  border: 2px solid;
  background-color: rgb(255,255,0);
  border-color: red;
  text-align: center;
}

td {
  padding: 5px;
  border: 2px solid;
  background-color: aquamarine;
  border-color: red;
  text-align: center;
}
    </style>
<?php
echo "Today is " . date("Y/m/d") . "<br>";
echo "Today is " . date("Y.m.d") . "<br>";
echo "Today is " . date("Y-m-d") . "<br>";
echo "Today is " . date("l");
?>
</head>
