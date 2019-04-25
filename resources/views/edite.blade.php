@extends('layout.main')
@section('tittle')
Edite
@endsection

@section('body')
<center><h1 style="  margin-bottom: 20px;font-size: 55px;
        color: red;">Update</h1></center>

<form method="post" action="{{route('update')}}">
<input type="hidden" name="id" value="{{($table)? $table['id']:''}}">
  <div class="form-group">
    <label style=" width: 30%;
        float: left;font-size: 30px;">Book Name</label>
    <input type="text" name="name" style="width: 50%;"value="{{($table)? $table[0]['name']:''}}" class="form-control" >
  </div>
{{csrf_field()}}
  <div class="form-group">
    <label style=" width: 30%;
        float: left;font-size: 30px;">Author</label>
    <input type="text" name="author"style="width: 50%;" value="{{($table)? $table[0]['author']:''}}" class="form-control" >
  </div>

  <div class="form-group">
    <label style=" width: 30%;
        float: left;font-size: 30px;">Edition</label>
    <input type="text" name="edition" style="width: 50%;" value="{{($table)? $table[0]['edition']:''}}"class="form-control">
  </div>

  <div class="form-group">
    <label style=" width: 30%;
        float: left;font-size: 30px;">Tittle</label>
    <input type="text" name="tittle" style="width: 50%;"value="{{($table)? $table[0]['tittle']:''}}" class="form-control" >
  </div>



  


  <button type="submit" class="btn btn-primary">Update</button>
</form>
@endsection