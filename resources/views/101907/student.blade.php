<!DOCTYPE html>
<html>
  <head>  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Laravel Cars App">
    <meta name="author" content="Aubrey J">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <!-- Bootstrap core CSS -->
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Student</title>
  </head>
  <body>
    <div id="app">
    <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">101907</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                 <ul class="navbar-nav mr-auto">
                     <li class="nav-item">
                      <a class="nav-link" href="{{ url('/student') }}"><b>Student</b></a>
                     </li>
                     <li class="nav-item">
                      <a class="nav-link" href="{{ url('/fees') }}"><b>Fees</b></a>
                     </li>
                     <li class="nav-item">
                      <a class="nav-link" href="{{ url('/amount') }}"><b>Amount</b></a>
                     </li>
                  </ul>
                 </div>

            </div>
        </nav>
    <main role="main" class="container" class="py-4">

      <div class="starter-template">
        <div class="row">
           <div class="col-sm-8">
           <table class="table">
          <thead class="thead-dark">
            <tr>
              <td><b>id</b></td>
              <td><b>Student Number</b></td>
              <td><b>Student Name</b></td>
              <td><b>DOB</b></td>
              <td><b>Address</b></td>
            </tr>
          </thead>
          <tbody>
          @foreach ($students as $student)
            <tr>
              <td>{{$student->id}}</td>
              <td>{{$student->student_number}}</td>
              <td>{{$student->name}}</td>
              <td>{{$student->DOB}}</td>
              <td>{{$student->address}}</td>
            </tr>
          @endforeach
          </tbody>
        </table>
        <h1>Enter student details</h1>
        <form action="{{ route('studentAction') }}" method="get">
     {{ csrf_field() }}
      <div class="form-group">
        <label for="student_number">Student Number</label>
        <input type="text" class="form-control" id="student_number"  name="student_number">
      </div>
      <div class="form-group">
        <label for="name">Student Name</label>
        <input type="text" class="form-control" id="name"  name="name">
      </div>
      <div class="form-group">
        <label for="DOB">DOB</label>
        <input type="date" class="form-control" id="DOB"  name="DOB">
      </div>
      <div class="form-group">
        <label for="address">Address</label>
        <input type="text" class="form-control" id="address"  name="address">
      </div>
      @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
      @endif
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
       		</div>
       	</div>
      </div>

    </main><!-- /.container -->
    </div>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  </body>
</html>