<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  {{-- <h2>Hallo User </h2>
  <br> --}}
  {{-- 12345678
    admin@gmail.com --}}
  {{-- <span>{{Auth::user()->name}}</span> --}}
  @guest
    <form class="form-inline my-2 my-lg-0 d-none d-md-block">
      <button 
        class="btn btn-login btn-navbar-right my-2 my-sm-0 px-4"
        type="button" 
        onclick="event.preventDefault(); location.href='{{url('login')}}';"
      >
        Sign In
      </button>
    </form>
  @endguest


  @auth
    <h2>Hallo Admin {{Auth::user()->name}}</h2>
    <form class="form-inline my-2 my-lg-0 d-none d-md-block" action="{{url('logout')}}" method="POST">
      @csrf
      <button class="btn btn-login btn-navbar-right my-2 my-sm-0 px-4" type="submit" >
        Sign Out
      </button>
    </form>

   
  @endauth

</body>
</html>