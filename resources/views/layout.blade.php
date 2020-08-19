<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>
    @if (isset($item))
      {{ $item['title'] }}
    @else
        DevelopmentAid Test
    @endif
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.css">
  <style>
    .main {
      padding-top: 50px;
    }
  </style>
  <link rel="stylesheet" href="{{mix('css/app.css')}}">
</head>
<body>
    <div class="container main">
        <div class="container">
            @yield('content')
        </div>
    </div>
  <script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.js"></script>
  <script src="{{ mix('js/app.js') }}"></script>
  <script>
    $(document).ready(function(){
      let otable = $('#SearchTable').DataTable({
            ajax: {
                url: "{{ route('vacancies.search') }}",
                type: 'GET',
            },
            pageLength: 5,
            bInfo: true,
            processing: true,
            bPaginate: true,
            searching: true,  
            lengthChange: false,
            bStateSave: true,
          
            columns: [
              {data: 'id', 
              render: function ( data, type, row, meta ) {
                  return '<a href=api/vacancies/'+data+'>'+data+'</a>';
               }},
              {data: 'title'},
              {data: 'categories'},
              {data: 'company'},
              {data: 'createdAt'},
            ],
            ordering: false,
        });
    });
  </script>
</body>
</html>
