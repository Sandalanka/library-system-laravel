@extends('layout.main')
@section('tittle')
Member Details
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



<a href="./backend" style="  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;  ">Backend</a>

<a href="./book" style="  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;  ">Book Details</a>

<a href="./mdetails" style="  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;  ">Member details</a>

<a href="./ladd" style="  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;  ">Libraran Add</a>


<a href="./logout" style="  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;  ">Logout</a>
</div>

<center><h1 style="  margin-bottom: 20px;
        font-size: 55px;
        color: red;">Member Details</h1></center>

<center>
<table style="    width: 90%;
    border-collapse: collapse">
<tr>
<th style="  background-color: #aaa;
        text-align: left">Name</th>
<th style="  background-color: #aaa;
        text-align: left">ID Number</th>
        <th style="  background-color: #aaa;
        text-align: left">Address</th>
        <th style="  background-color: #aaa;
        text-align: left">Contact</th>
     <th style="  background-color: #aaa;
        text-align: left">Email</th>
         
</tr>
@foreach($table as $value)
<tr>

<td style=" padding: 10px;
        border-bottom: 1px solid #aaa;">{{$value->name}}</td>
<td style=" padding: 10px;
        border-bottom: 1px solid #aaa;">{{$value->id_number}}</td>
        <td style=" padding: 10px;
        border-bottom: 1px solid #aaa;">{{$value->address}}</td>
        <td style=" padding: 10px;
        border-bottom: 1px solid #aaa;">{{$value->contact}}</td>
       <td style=" padding: 10px;
        border-bottom: 1px solid #aaa;">{{$value->email}}</td>
</tr>
@endforeach
</table>
</center>
@endsection