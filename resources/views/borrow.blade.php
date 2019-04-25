@extends('layout.main')

@section('tittle')
Borrow Book
@endsection

@section('body')
<header style="float:left;"><a href="./logout"><h1>Logout</h1></a></header>

<center><h1 style="  margin-bottom: 20px;
        font-size: 55px;
        color: red;">Borrow Book<span style="  font-size: 40px;"><a href="./back">Back</a></span></h1></center>
        <form method="post" action="{{route('borrow')}}">

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
      float: left;font-size: 30px;">Book Name</label>
  <input type="text" name="bname" style="width: 50%;" class="form-control" placeholder="Book Name">
</div>

<div class="form-group">
  <label style=" width: 30%;
      float: left;font-size: 30px;">Tittle</label>
  <input type="text" name="tittle" style="width: 50%;" class="form-control" placeholder="Book Tittle">
</div>







<center><button type="submit" class="btn btn-primary" style="width:40%;">Borrow</button></center>
</form>
@endsection