<header>
    <nav>
        <ul>
            <li>
                <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Home</a>
            </li>
            <li>
                <a href="{{ route('geschiedenis') }}" class="{{ request()->routeIs('geschiedenis') ? 'active' : '' }}">Geschiedenis</a>
            </li>
            <li>
                <a href="{{ route('figuren') }}" class="{{ request()->routeIs('figuren') ? 'active' : '' }}">Figuren</a>
            </li>
            <li>
                <a href="{{ route('gevechten') }}" class="{{ request()->routeIs('gevechten') ? 'active' : '' }}">Gevechten</a>
            </li>
        </ul>
    </nav>
</header>
