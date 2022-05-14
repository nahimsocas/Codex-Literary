<section id="top_header">
    <a href="{{ route('home') }}">
        <img src="{{ asset('imgs/Logo.png') }}" alt="Codex Literary">
    </a>
    <ul id="nav_list">
        <li>
            <a href="#" id="search_button">SEARCH</a>
        </li>
        <li>
            <a href="#">LIBRARY</a>
        </li>
        <li>
            <a href="#">STORE</a>
        </li>
        @guest
            <li>
                <a href="{{ route('login') }}">CREATE</a>
            </li>                
        @else
            @if (empty(auth()->user()->email_verified_at))          
                <li>
                    <a href="{{ route('verification.notice') }}">CREATE</a>
                </li>            
            @else
                <li>
                    <a href="#">CREATE</a>
                </li>
            @endif
        @endguest
        <li>
            <a href="#">COMMUNITY</a>
        </li>
        <li>
            <a href="#">FORUM</a>
        </li>
        @guest
            <li>
                <a href="{{ route('login') }}">LOGIN</a>
            </li>
        @else
            <li>
                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">LOGOUT</a>
            </li>
            <form action="{{ route('logout') }}" method="POST" id="logout-form" style="display: none">
                @csrf
            </form>
        @endguest
    </ul>
</section>