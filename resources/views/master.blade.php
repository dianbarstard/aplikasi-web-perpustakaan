<html>
    <head>
        <title>Ini web perpustakaan</title>    
    </head>
        <body>
            <header> 
                <h2>Ini aplikasi pertamaku</h2>
                <nav>
                    <a href="{{ url('/beranda') }}">Home</a> |
                    <a href="{{ url('/buku') }}">Buku</a> |
                    <a href="{{ url('/kontak') }}">Kontak</a>
                </nav> 
            </header>
            <br/>
            @yield('konten')
            <br/>
            <footer>
                <p> &copy; DennaMandela</p>
            </footer>
        </body>
</html>