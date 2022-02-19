<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>

    <style>
        .navbar-brand {
            margin-left: 2rem;
        }
    </style>

    <body>

    <nav class="navbar navbar-dark bg-dark">
    <a class="navbar-brand" >Proyecto</a>
    </nav>

    <div class="container p-5">
    <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre de producto</th>
      <th scope="col">Nombre del proveedor</th>
      <th scope="col">Categoria</th>
      <th scope="col">Precio</th>
    </tr>
  </thead>
  
  <tbody>

  @if(!empty($data))
    @foreach($data as $datas)
    <tr>
      <th>{{ $datas['productId'] }}</th>
      <td>{{ $datas['productName'] }}</td>
      <td>{{ $datas['companyName'] }}</td>
      <td>{{ $datas['categoryName'] }}</td>
      <td>{{ $datas['unitPrice'] }}</td>
    </tr>
    @endforeach
    @endif
  
  </tbody>
  
</table>
    </div>
    </body>
</html>
