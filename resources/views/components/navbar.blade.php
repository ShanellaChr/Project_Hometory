<nav class="navbar poppins-regular header">
        
    <nav-link class="shadow div-header rounded-5">
        <a class="navbar-logo" href="/">
            <img src="{{ asset('img/Navbar Logo.svg') }}" alt="">
        </a>
        
        <div class="navbar-tengah">
            <a class="navlink-a {{ request()->is('myInventory*') ? 'active' : '' }}" href="/myInventory">My Inventory</a>
            <a class="navlink-a {{ request()->is('calendar*') ? 'active' : '' }}" href="/calendar">Calendar</a>
            <a class="navlink-a {{ request()->is('statistic*') ? 'active' : '' }}" href="/statistic">Statistic</a>
            <a class="navlink-a {{ request()->is('wishlist*') ? 'active' : '' }}" href="/wishlist">Wishlist</a>
            <a class="navlink-a {{ request()->is('article*') ? 'active' : '' }}" href="/article">Article</a>  
        </div>

        <a class="navbar-login" href="">
            LOGIN
            {{-- <img style="height:2.5vh" src="{{ asset('img/Navbar Person.svg') }}" alt=""> --}}
            {{-- <div style="display: flex; vertical-align:middle;">
                <i class="fa-regular fa-user"></i> --}}
            </div>
        </a>

    </nav-link>

        
</nav>
