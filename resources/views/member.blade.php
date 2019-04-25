@extends('layout.main')
@section('tittle')
Member 
@endsection

@section('body')
<header style="float:left;"><a href="./logout"><h1>Logout</h1></a></header>

<center><h1 style="  margin-bottom: 20px;
        font-size: 55px;
        color: red;">Book Details</h1></center>

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
     <th style="  background-color: #aaa;
        text-align: left">Borrow Book</th>
         
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
         <td style=" padding: 10px;
        border-bottom: 1px solid #aaa;"><a href="./borrow"><button class="btn btn-primary">Borrow</button></a></td>
       
</tr>
@endforeach
</table>
</center>
@endsection