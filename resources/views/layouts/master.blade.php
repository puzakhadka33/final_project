<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body {
    background-color: #eee
}

.nav-link {
    border-radius: 0px 
    transition: all 0.5s;
    width: 100px;
    display: flex;
    flex-direction: column
}

.nav-link small {
    font-size: 12px
}

.nav-link:hover {
    background-color: #52525240 !important
}

.nav-link .fa {
    transition: all 1s;
    font-size: 20px
}

.nav-link:hover .fa {
    transform: rotate(360deg)
}
.container{
    position: absolute;
    top: 70px;
    left: 120px; 
}

    </style>
    <title>Admin dash</title>
  </head>
  <body>
      <!-- navbar section -->
      <div class="navclass">
  <nav class="navbar navbar-dark bg-dark" id = "admin-nav">
  <div class="container-fluid">
    <span class="navbar-brand mb-0 h1">Animal Welfare</span>
  </div>
</div>
  <!-- sidebar section -->
  <div class="d-flex flex-column flex-shrink-0 bg-light vh-100" style="width: 100px;">
    <ul class="nav nav-pills nav-flush flex-column mb-auto text-center">
        <li class="nav-item"> <a href="/" class="nav-link  py-3 border-bottom"> <i class="fa fa-home"></i> <small>Dashboard</small> </a> </li>
        <li> <a href="/adinbox" class="nav-link py-3 border-bottom"> <i class="fa fa-dashboard"></i> <small>Inbox</small> </a> </li>
        <li> <a href="/articlelist" class="nav-link py-3 border-bottom"> <i class="fa fa-bookmark"></i> <small>Article</small> </a> </li>
        <li> <a href="/adinventory" class="nav-link py-3 border-bottom"> <i class="fa fa-first-order"></i> <small>Inventory</small> </a> </li>
        <li> <a href="/adauthentication" class="nav-link py-3 border-bottom"> <i class="fa fa-cog"></i> <small>Authentication</small> </a> </li>
        
    </ul>
    <div class="dropdown border-top"> <a href="#" class="d-flex align-items-center justify-content-center p-3 link-dark text-decoration-none dropdown-toggle" id="dropdownUser3" data-bs-toggle="dropdown" aria-expanded="false"> <img src="https://github.com/mdo.png" alt="mdo" width="24" height="24" class="rounded-circle"> </a>
        <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser3">
            <li><a class="dropdown-item" href="#">New project...</a></li>
            <li><a class="dropdown-item" href="#">Settings</a></li>
            <li><a class="dropdown-item" href="#">Profile</a></li>
            <li>
                <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="#">Sign out</a></li>
        </ul>
    </div>
</div>
    </nav>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    
    <div class="container">
        @yield('content')
    </div>
   
  </body>
</html>