@extends('layouts.app')
@section('content')
<div class="m-3">
    <h5>Article list here</h5>
    <a class="btn btn-success btn-md" href="/create-blog">Add article</a>
    <br>
    <br>
    <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">S.N.</th>
      <th scope="col">Title</th>
      <th scope="col">Author</th>
      <th scope="col">Created data</th>
      <th scope="col">Description</th>
      <th scope="col">Image</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>This is artiel title</td>
      <td>Pooja</td>
      <td>2021</td>
      <td>AAAAAAAAA</td>
      <td>
          Image goes here
      </td>
      <td>
          <button class="btn btn-primary btn-sm">Edit</button>
          <button class="btn btn-danger btn-sm">Delete</button>
      </td> 
    </tr>
  </tbody>
</table>
</div>
@endsection