@extends('layout.main')
@section('tittle')
Libraran Add
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
        color: red;">Libraran Add</h1></center>

<form method="post" action="{{route('libraranadd')}}">

  <div class="form-group">
    <label style=" width: 30%;
        float: left;font-size: 30px;">Libraran Name</label>
    <input type="text" name="name" style="width: 50%;" placeholder="Libraran Name">
  </div><br>
{{csrf_field()}}
  <div class="form-group">
    <label  style=" width: 30%;
        float: left; font-size: 30px;">ID Number</label>
    <input type="number" name="id"   style="width: 50%;" placeholder="ID Number">
  </div><br>

  
  <div class="form-group">
    <label  style=" width: 30%;
        float: left;font-size: 30px;">Contact Number</label>
    <input type="number" name="contact"  style="width: 50%;" placeholder="Contact NUmber">
    </div><br>
  

  <div class="form-group">
    <label  style=" width: 30%;
        float: left;font-size: 30px;">Email</label>
    <input type="email" name="email"   style="width: 50%;" placeholder="email">
  </div><br>

  <div class="form-group">
    <label  style=" width: 30%;
        float: left;font-size: 30px;">Password</label>
    <input type="password" name="password"   style="width: 50%;" placeholder="Password">
  </div><br>

  

  


 <center> <button type="submit" style="  width: 30%;
        padding: 5px;
        box-sizing: border-box;" class="btn btn-primary">Registation</button>
        </center>
</form>
@endsection