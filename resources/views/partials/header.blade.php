<header>
    <div class="container">
        <ul>
            <li>Uomo</li>
            <li>Donne</li>
            <li>Bambini</li>
        </ul>

        <a href="{{ route('home') }}">
            <img class="logo" src="{{ Vite::asset('resources/img/boolean-logo.png') }}" alt="Logo Boolean">
        </a>

        <ul>
            <li>USER</li>
            <li>HEART</li>
            <li><a href="{{ route('products') }}">SHOP</a></li>
        </ul>
    </div>
</header>