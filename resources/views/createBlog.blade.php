@extends('layouts.app')
@section('content')
<div class="m-">
<h5>Article / Blogs</h5>
<br>
<form action="{{route('blog.store')}}" method="POST" enctype="multipart/form-data">
@csrf
<div class="row">
  <div class="col-md-6">
  <label for="exampleFormControlInput1" class="form-label">Title</label>
  <input type="text" class="form-control" name="title" id="exampleFormControlInput1" placeholder="Title">
  </div>
  <div class="col-md-6">
  <label for="formFile" class="form-label">Upload a photo</label>
  <input class="form-control" name="image" type="file" id="formFile">
</div>
<br>
<div class="row">
  <div class="col-md-6">
  <label for="exampleFormControlTextarea1" class="form-label">Description</label>
  <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3" placeholder="Enter your blog"></textarea>
  </div>
  <div class="col-md-6">
  <input class="btn btn-success" type="submit" value="Submit">
  </div>
</div>
</form>
</div>
@endsection