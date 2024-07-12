<header>
    <nav>
        <div class="left">
            <a href="{{ url('/index') }}" class="title">WKKW</a>
        </div>
        <div class="right">
            <div class="menu-toggle" id="mobile-menu">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
            <ul class="nav no-search" id="nav-links">
                <li><a href="{{ url('/discription') }}">Discription</a></li>
                <li><a href="{{ url('/index') }}">Index</a></li>
                <li><a href="{{ url('/calendar') }}">Calendar</a></li>
                <li><a href="{{ url('/save') }}">Save</a></li>
                <li><a href="{{ url('/add') }}">Add</a></li>
            </ul>
        </div>
    </nav>
</header>

<script>
    const mobileMenu = document.getElementById('mobile-menu');
    const navLinks = document.getElementById('nav-links');

    mobileMenu.addEventListener('click', () => {
        navLinks.classList.toggle('nav-open');
    });
</script>
