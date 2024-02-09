<nav class="navbar navbar-expand-lg navbar-light bg-light nav-pills">
    <div class="container flex justify-start items-center bg-blue">
        <a class="navbar-brand mr-5" href="{{ route('home') }}">
            Visagov
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse flex">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link mr-3 @if(Request::is('libros')) active @endif"" aria-current="books" href="{{ route('books.index') }}">Libros</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @if(Request::is('contacto')) active @endif" aria-current="contact" href="{{ route('contact') }}">Contacto</a>
                </li>
            </ul>          
        </div>
    </div>
</nav>