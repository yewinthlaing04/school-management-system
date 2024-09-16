<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
    {{-- navbar section --}}
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">School Management System</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav w-100 d-flex justify-content-around">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{ url('/')}}">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ url('/student')}}">Students</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ url('/teacher')}}">Teachers</a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="{{ url('/course')}}">Courses</a>
              </li>
              <li class="nav-item">
                <a href="{{ url('/batch')}}" class="nav-link">Batches</a>
              </li>
              <li class="nav-item">
                <a href="{{ url('enrollement')}}" class="nav-link">Enrollements</a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">Payments</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      @yield('content')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>
