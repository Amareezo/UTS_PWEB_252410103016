<aside class="sidebar">
    <div class="sidebar-brand">
        <h2>CHARACTER VAULT</h2>
    </div>

    <nav>
        <p class="menu-label">MAIN MENU</p>

        <a href="{{ route('dashboard', ['username' => request('username')]) }}">
            Dashboard
        </a>

        <a href="{{ route('pengelolaan', ['username' => request('username')]) }}">
            Characters
        </a>
    </nav>

    <div class="sidebar-bottom">
        <a href="{{ route('profile', ['username' => request('username')]) }}">
            My Profile
        </a>

        <a href="{{ route('login') }}">Logout</a>
    </div>
</aside>
