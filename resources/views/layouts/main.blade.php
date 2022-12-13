<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
       <title>Track Your Application</title>
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- Latest compiled JavaScript -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="{{ asset('asset/style.css') }}">
    </head>
    <body>
        <div class="header_part row">
            <div class="header_logo col-2">
                <a href="#">
                    <img src="{{ asset('asset/img/logo.jpg') }}" alt="logo">
                </a>
            </div>
            <div class="header_name col-4">
                <div class="header_name_vfs">
                    <h3>vfs.global</h3>
                    <br>
                    <p class="header_name_year">est.2001</p>
                </div>
            </div>
            
            <div class="col-6">
                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <button class="logout btn btn-info btn-outline-info" title="{{ Auth::user()->name }}">Logout</button>
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
            </div>
        </div>
        
        <main class="py-4">
            @yield('content')
        </main>

        <footer class="footer-custom"><center>All Right Reserves By VFSGlobal.Asia@2022</center></footer>
    </body>
</html>
