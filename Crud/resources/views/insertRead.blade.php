
@extends('welcome')

@section('content')


<!-- <h1>Hello</h1> -->
<center>
<!-- Button trigger modal -->
<button type="button" class="btn btn-outline-danger fw-bold fs-4 rounded pill" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
  Add Record
</button>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel"> CRUD</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action = "insertData" method="POST" enctype="multipart/form-data">
             <!-- @crsf -->
             {{ csrf_field() }}
            <div class = "mb-2">
                <input type ="text" placeholder ="Enter Student Name" class ="form-control" name = "sname" id="">
      </div>
      <div class = " mb-2">
                <input type ="text" placeholder ="Enter Student Roll no:" class ="form-control" name = "srollno" id="">
      </div>
      <div class = " mb-2">
                <input type ="file" name="image"  class= "form-control"  name ="" id="">
      </div>
      <button type = "submit" class="btn btn-outline-danger fw-bold fs-4 rounded pill"> Add Record </button> 
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
  
      </div>
    </div>
  </div>
</div>
</center>
@endsection