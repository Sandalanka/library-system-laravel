@extends('layout.main')
@section('tittle')
Feedback
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

<a href="./feedback" style="  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;  ">Feedback</a>

</div>
<center><h1 style="  margin-bottom: 20px;font-size: 55px;
        color: red;">Feedback</h1></center>
<form method="post" action="{{route('feedback')}}" >
  <div class="form-group">
    <label style=" width: 30%;
        float: left;font-size: 30px">Email address</label>
    <input type="email" name="email" class="form-control" style="width: 50%;"  placeholder="email"><br>

    <div class="form-group">
    <label style=" width: 30%;
        float: left;font-size: 30px" >Comment</label>

   <textarea name="comment" class="form-control"style="width: 50%;"  rows="6">Comment Here</textarea>
  </div>
  <center> <button type="submit" class="btn btn-primary">Send Comment</button></center>
</form>
  
@endsection