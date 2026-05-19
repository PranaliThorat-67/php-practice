<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>eduspher - @yield('title')</title>

    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<div id="wrapper">

    <!-- Header -->
    <header>
        <h1>eduspher</h1>
    </header>

    <!-- Navigation -->
    <nav>
        <a href="/">Home</a>
        <a href="/about">About</a>
        <a href="/post">Post</a>
    </nav>

    <!-- Main Content -->
    <main>

        <!-- Article -->
        <article>
            @hasSection ('content')
                <h2>@yield('content')</h2>
            @else
                <h2>No content found.</h2>
            @endif
           
        </article>

        <!-- Sidebar -->
        <aside>
            @section('sidebar')
                <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/about">About</a></li>
                <li><a href="/post">Post</a></li>
            </ul>

            @show
            
        </aside>

    </main>

    <!-- Footer -->
    <footer>
        eduspher@copyright 2023.
    </footer>

</div>

@stack('scripts')

</body>
</html>