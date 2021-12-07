@extends('layouts.master')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Inventory</title>
    <style>
        #inv-btn{
            margin: 0 5px;
            padding: 5px;
            width : 80px;
        }
    </style>
</head>
<body>
    <!-- organization table section -->
<h2>Organization List</h2>
<br>
<table class="table">
  <thead>
    <tr>
      <th scope="col">S.N</th>
      <th scope="col">Organization Name</th>
      <th scope="col">Username</th>
      <th scope="col">Email</th>
      <th scope="col">Location</th>
      <th scope="col">contact</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Snehas Care</td>
      <td>Snehas123</td>
      <td>snehacare@gmail.com</td>
      <td>Budanilkantha</td>
      <td>01-5589163</td>
      <td><input class="btn btn-secondary" type="button" value="Update" id = "inv-btn"><input class="btn btn-danger" type="button" value="Remove" id= "inv-btn"></td>
    </tr>
    <tr>
    <th scope="row">2</th>
      <td>KAT-center</td>
      <td>kat123</td>
      <td>katc@gmail.com</td>
      <td>dhapasi</td>
      <td>01-4329163</td>
      <td><input class="btn btn-secondary" type="button" value="Update" id = "inv-btn"><input class="btn btn-danger" type="button" value="Remove" id= "inv-btn"></td>
    </tr>
    <tr>
    <th scope="row">3</th>
    <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><input class="btn btn-success" type="button" value="Add New" id = "inv-btn"></td>
    </tr>
  </tbody>
</table>
<br>
<hr>
<br>


<!-- adoption table section -->
<h2>Adoption Table</h2>
<br>
<table class="table">
  <thead>
    <tr>
      <th scope="col">S.N</th>
      <th scope="col">Name</th>
      <th scope="col">Category</th>
      <th scope="col">Breed</th>
      <th scope="col">weight</th>
      <th scope="col">age</th>
      <th scope="col">Gender</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Unkown</td>
      <td>Dog</td>
      <td>Local</td>
      <td>7 kgs</td>
      <td>10 months</td>
      <td>Male</td>
      <td><input class="btn btn-primary" type="button" value="view" id= "inv-btn"><input class="btn btn-danger" type="button" value="Delete" id= "inv-btn"></td>
    </tr>
    <tr>
    <th scope="row">2</th>
    <td>Mikey</td>
      <td>Dog</td>
      <td>German Shephard</td>
      <td>15 kgs</td>
      <td>3 years</td>
      <td>Male</td>
      <td><input class="btn btn-primary" type="button" value="view" id= "inv-btn"><input class="btn btn-danger" type="button" value="Delete" id= "inv-btn"></td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Tom</td>
      <td>cat</td>
      <td>Wild cat</td>
      <td>3 kgs</td>
      <td>5 years</td>
      <td>Female</td>
      <td><input class="btn btn-primary" type="button" value="view" id= "inv-btn"><input class="btn btn-danger" type="button" value="Delete" id= "inv-btn"></td>
    </tr>
    <tr>
      <th scope="row">4</th>
      <td>Unkown</td>
      <td>Buffalo</td>
      <td>local</td>
      <td>32 kgs</td>
      <td>3 years</td>
      <td>Female</td>
      <td><input class="btn btn-primary" type="button" value="view" id= "inv-btn"><input class="btn btn-danger" type="button" value="Delete" id= "inv-btn"></td>
    </tr>
  </tbody>
</table>

</body>
</html>
@endsection