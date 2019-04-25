@extends('layout.main')
@section('tittle')
Book Details
@endsection

@section('body')
<div class="header"
style="background-color: red;
  padding: 10px;
  text-align: center;">
  <h1>Library Management System</h1>
</div>

<div class="topnav" style="  overflow: hidden;
  background-color: #333;">
  <a href="./" style="  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;  ">Home</a>



<a href="./registation" style="  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;  ">Registation</a>

<a href="./bookdetails" style="  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;  ">Book Details</a>

<a href="./mlogin" style="  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;  ">Member Login</a>

<a href="./llogin" style="  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;  ">Libraran Login</a>



</div>

<center><h1 style="  margin-bottom: 20px;
        font-size: 55px;
        color: red;">Book Details</center>

<center>
<table style="    width: 90%;
    border-collapse: collapse">
<tr>
<th style="  background-color: #aaa;
        text-align: left">Name</th>
<th style="  background-color: #aaa;
        text-align: left">Author</th>
        <th style="  background-color: #aaa;
        text-align: left">Edition</th>
        <th style="  background-color: #aaa;
        text-align: left">Tittle</th>

</tr>
@foreach($table as $value)
<tr>

<td style=" padding: 10px;
        border-bottom: 1px solid #aaa;">{{$value->name}}</td>
<td style=" padding: 10px;
        border-bottom: 1px solid #aaa;">{{$value->author}}</td>
        <td style=" padding: 10px;
        border-bottom: 1px solid #aaa;">{{$value->edition}}</td>
        <td style=" padding: 10px;
        border-bottom: 1px solid #aaa;">{{$value->tittle}}</td>
         
</tr>
@endforeach
</table>
</center>
@endsection