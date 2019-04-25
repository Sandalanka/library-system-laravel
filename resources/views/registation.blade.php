@extends('layout.main')
@section('tittle')
Registation
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
<center><h1 style="  margin-bottom: 20px;font-size: 55px;
        color: red;">Registation</h1></center>

<form method="post" action="{{route('registation')}}">

  <div class="form-group">
    <label style=" width: 30%;
        float: left;font-size: 30px;">Full Name</label>
    <input type="text" name="name" style="width: 50%;" class="form-control" placeholder="Full Name">
  </div>
{{csrf_field()}}
  <div class="form-group">
    <label style=" width: 30%;
        float: left;font-size: 30px;">ID Number</label>
    <input type="number" name="id"style="width: 50%;"  class="form-control" placeholder="ID Number">
  </div>

  <div class="form-group">
    <label style=" width: 30%;
        float: left;font-size: 30px;">Address</label>
    <input type="text" name="address" style="width: 50%;" class="form-control" placeholder="Address">
  </div>

  <div class="form-group">
    <label style=" width: 30%;
        float: left;font-size: 30px;">Contact Number</label>
    <input type="number" name="contact" style="width: 50%;" class="form-control" placeholder="Contact">
  </div>

  <div class="form-group">
    <label style=" width: 30%;
        float: left;font-size: 30px;">Email</label>
    <input type="email" name="email" style="width: 50%;" class="form-control" placeholder="Enter Email">
  </div>


  <div class="form-group">
    <label style=" width: 30%;
        float: left;font-size: 30px;">Password</label>
    <input type="password" name="password"style="width: 50%;"  class="form-control" placeholder="Password">
  </div>

  


  <button type="submit" class="btn btn-primary">Registation</button>
</form>
@endsection