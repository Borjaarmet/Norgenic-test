<nav class="navbar navbar-expand-lg navbar-light bg-light nav-pills">
    <div class="container flex justify-start items-center bg-blue">
        <a class="navbar-brand mr-5" href="{{ route('home') }}">
            Visagov
        </a>
        <div class="collapse navbar-collapse flex justify-between">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link mr-3 @if(Request::is('libros')) active @endif"" aria-current="books" href="{{ route('books.index') }}">Libros</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @if(Request::is('contacto')) active @endif" aria-current="contact" href="{{ route('contact') }}">Contacto</a>
                </li>
            </ul>        
        </div>
        <div class="submenu-container-lang">
            <div class="submenu-lang flex">
                <x-locale-selector :landing-page="$landingPage ?? null"/>
            </div>
        </div>  
    </div>
</nav>