<nav class="poppins-regular d-flex justify-content-center">       

    <nav-link class="shadow d-flex px-4 rounded-5 bg-white justify-content-between align-items-center position-absolute" style="width: 95%; top: 4vh; z-index:1000">

        <a class=" d-flex justify-content-start my-3" style="height: 4vh" href="/">
            <img src="{{ asset('img/Navbar Logo.svg') }}" alt="">
        </a>
        
        <div class="d-flex g-4 text-black decoration-0">
            <a class="navlink-a {{ request()->is('myInventory*') ? 'active' : '' }} navbar-hover" href="/myInventory">My Inventory</a>
            <a class="navlink-a {{ request()->is('calendar*') ? 'active' : '' }} navbar-hover" href="/calendar">Calendar</a>
            <a class="navlink-a {{ request()->is('statistic*') ? 'active' : '' }} navbar-hover" href="/statistic">Statistic</a>
            <a class="navlink-a {{ request()->is('wishlist*') ? 'active' : '' }} navbar-hover" href="/wishlist">Wishlist</a>
            <a class="navlink-a {{ request()->is('article*') ? 'active' : '' }} navbar-hover" href="/article">Article</a>  
        </div>

        <a class="navbar-login" href="/profile">
            LOGIN
            {{-- <img style="height:2.5vh" src="{{ asset('img/Navbar Person.svg') }}" alt=""> --}}
            {{-- <div style="display: flex; vertical-align:middle;">
                <i class="fa-regular fa-user"></i> --}}
            </div>
        </a>

    </nav-link>

        
</nav>
