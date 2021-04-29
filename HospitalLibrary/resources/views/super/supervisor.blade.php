@extends('layout.app')

@section('tilte', 'supervisor')

@section('content')
        <input type="checkbox" id="menu">
      <nav>
          <label>Library</label>
          <ul>
              <li><a href="#">Logout</a></li>
          </ul>
          <label for="menu" class="menu-bar">
              <i class="fa fa-bars"></i>
          </label>
      </nav>

      <div class="side-menu">
          <center>
            <img src="{{asset('../imagen/profile.png')}}" alt="logo">
            <br><br>
            <h2>John D.</h2>
          </center>
          <br>
            <a href="#"><i class="fas fa-home"></i><span>Home</span></a>
            <a href="#"><i class="fas fa-book"></i><span>Loan Books</span></a>
            <a href="#"><i class="fas fa-plus"></i><span>Create Books</span></a>
            <a href="#"><i class="fas fa-cog"></i><span>Setting</span></a>

            <a href="#" class="logout"><span>Logout</span></a>
      </div>
      <br><br><br><br>
@endsection