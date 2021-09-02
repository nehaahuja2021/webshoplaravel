<nav class="navbar navbar-inverse">
   <div class="container-fluid">
    <div class="navbar-header">
    <a class="navbar-brand" href="/">
        Freshshop
              <a class="navbar-brand" href="/">Home</a>
      <a class="navbar-brand" href="/product">Products</a>
             </div>


    
      <li><form action="/search"  class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search any fruit or vegetable" name="searchform" aria-label=" Search"><br>
      <button class="btn btn-success" type="submit">Search</button>
    </form></li>
    <!-------------------------->
    <ul class="nav navbar-nav navbar-right">
      <li><a class="navbar-brand" href="/register"><span class="glyphicon glyphicon-user"></span> Register</a></li>

</ul>
<!------------------------------------>

          
@if(Session::has('user'))
<ul class="nav navbar-nav navbar-right">
          <li class="dropdown">
            <a class="navbar-brand"> Welcome {{Session::get('user')['name']}}
            <span class="glyphicon glyphicon-user"></span></a>
            <ul>
            <li><a class="navbar-brand" href="/myorders">Orders</a>
        </li>
              <li><a  class="navbar-brand" href="/logout">Logout</a></li>
            </ul>
          </li>
          @else
          <li><a class="navbar-brand" href="/login"><span class="glyphicon glyphicon-user"></span> Login</a></li>
          @endif
    </ul><!--main ul-->
  </div>
</nav>



