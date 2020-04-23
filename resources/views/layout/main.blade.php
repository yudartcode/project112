<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/1e1e5779b9.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/css/app.min.css">
    <link rel="stylesheet" href="/css/demo.css">
</head>

<body>
    <nav class="navbar">
        <ul class="navbar-nav">
            <li class="nav-logo nav-item">
                <a href="#" class="nav-link">
                    <span class="link-text">Yudak</span>
                    <i class="link-icon fas fa-fw fa-angle-double-right"></i>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{url('/')}}" class="nav-link">
                    <i class="link-icon fas fa-fw fa-star"></i>
                    <span class="link-text">Dashboard</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{url('/ujian')}}" class="nav-link">
                    <i class="link-icon fas fa-fw fa-laptop-code"></i>
                    <span class="link-text">Ujian</span>
                </a>
            </li>
            <li class="nav-item nav-bottom">
                <button id="btnTheme" class="nav-link">
                    <i class="link-icon fas fa-fw fa-paint-roller"></i>
                    <span class="link-text">Change Theme</span>
                </button>
            </li>
        </ul>
    </nav>
    <main>
        <div class="container">
        @yield('content')        
        </div>
        <section class="section-auto bg-secondary v-row-center">
            <div class="section-body">
                <ul class="footer">
                    <li><a class="cl-primary" href="https://github.com/yudartcode">Github</a></li>
                    <li><a class="cl-primary" href="https://instagram.com/yudakarnaen">Instagram</a></li>
                    <li><a class="cl-primary" href="https://wa.me/6282340642239">WhatsApp</a></li>
                    <li class="d-sm-none">|</li>                    
                    <li>Yuda Karnaen, 2020</a></li>
                </ul>
            </div>
        </section>
    </main>
    <script>
        var index = 1;
        var theme = ['quickly', 'quickly-dark', 'quickly-light'];
        var body = document.getElementsByTagName('body');
        document.getElementById('btnTheme').addEventListener('click', function (e) {
            body[0].classList.remove('quickly-dark', 'quickly-light');
            body[0].classList.add(theme[index++]);
            index = (index > 2) ? 0 : index;
        });
    </script>
</body>

</html>