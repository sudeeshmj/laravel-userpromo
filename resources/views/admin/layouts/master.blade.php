<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <script src="{{asset('assets/js/scripts.js')}}"></script>
        <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
        <link href="{{asset('assets/css/styles.css')}}" rel="stylesheet" />
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
       
        {{-- Datatable --}}
   
        <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">
        <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>

    </head>
    <body class="sb-nav-fixed">
       @include('admin.layouts.navbar')
        <div id="layoutSidenav">
           @include('admin.layouts.sidebar')
            <div id="layoutSidenav_content">
                <main>
              @yield('content')
                </main>
            </div>
        </div>

       <script>
        $(document).ready(function(){
        
            let usertab = new DataTable('#myDataTable', {
                columns: [
                    { orderable: true }, 
                    { orderable: true }, 
                    { orderable: true }, 
                  
                ]
            });
          
        });
       </script>
    </body>

</html>
