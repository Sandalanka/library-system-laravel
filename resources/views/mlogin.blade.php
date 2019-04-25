@extends('layout.main')
@section('tittle')
Member Login
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
<div class=""style=" width: 350px;
        margin: 100px auto;">
<form method="post" action="mlogin" >
<fieldset>
  <legend><h1>Member Login</h1></legend>
  <div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input type="email" name="email" class="form-control" placeholder="Enter email">
  {{csrf_field()}}
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password" class="form-control"  placeholder="Password">
  </div>
  
  <button type="submit" class="btn btn-primary">Login</button>
  </fieldset>
</form>
</div>
@endsection