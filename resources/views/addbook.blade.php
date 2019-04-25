@extends('layout.main')
@section('tittle')
Book Add
@endsection

@section('body')
<div class="header"
style="background-color: red;
  padding: 10px;
  text-align: center;">
  <h1>Library Management System</h1>
</div>




<center><h1 style="  margin-bottom: 20px;
        font-size: 55px;
        color: red;">Add Book <span style=" font-size: 40px;
        color: blue;"><a href="./backbook">Back</a></span></h1></center>

<form method="post" action="{{route('bookadd')}}">

  <div class="form-group">
    <label style=" width: 30%;
        float: left;font-size: 30px;">Book Name</label>
    <input type="text" name="name" style="width: 50%;" placeholder="Book Name">
  </div><br>
{{csrf_field()}}
  <div class="form-group">
    <label  style=" width: 30%;
        float: left; font-size: 30px;">Author</label>
    <input type="text" name="author"   style="width: 50%;" placeholder="Book Author">
  </div><br>

  
  <div class="form-group">
    <label  style=" width: 30%;
        float: left;font-size: 30px;">Edition</label>
    <input type="text" name="edition"  style="width: 50%;" placeholder="Book Edition">
    </div><br>
  

  <div class="form-group">
    <label  style=" width: 30%;
        float: left;font-size: 30px;">Tittle</label>
    <input type="text" name="tittle"   style="width: 50%;" placeholder="Book Tittle">
  </div><br>

  

  


 <center> <button type="submit" style="  width: 30%;
        padding: 5px;
        box-sizing: border-box;" class="btn btn-primary">Registation</button>
        </center>
</form>
@endsection