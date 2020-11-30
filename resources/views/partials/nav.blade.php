@php
$navItems = [
    'index' => 'Home',
    'cars' => 'Cars',
    'contact' => 'Contact',
];
@endphp

<div class="collapse navbar-collapse" id="navbarsExampleDefault">
    <ul class="navbar-nav mr-auto">
        @foreach ($navItems as $navItem => $navTitle)
            @if ($navItem === $currentNavItem)
                <li class="nav-item active">
                    <a class="nav-link" href="/{{ $navItem }}">{{ $navTitle }} <span class="sr-only">(current)</span></a>
                </li>
            @else
                <li class="nav-item">
                    <a class="nav-link" href="/{{ $navItem }}">{{ $navTitle }}</a>
                </li>
            @endif
        @endforeach
    </ul>
    <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
</div>
