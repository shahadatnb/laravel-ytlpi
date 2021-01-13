<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>{{ config('app.name', 'Laravel') }}</title>
  <!-- Bootstrap 3.3.5 -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
</head>
<body>
  <div class="container text-center">
    <br><br><br><br><br><br>
    @include('layouts._message')
    <span class="label label-warning">Your income over $40 please renew your account</span>
    <a href="{{url('/renew')}}" class="btn btn-success">Renew now</a>
  </div>
</body>
</html>