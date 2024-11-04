<header>

<!-- Logo -->
<div class="logo">
   <a href="/index.html"><img src="{{ asset('images/logo.jpg.png') }}" alt="Logo" /></a>
</div>

<button class="hamburger" aria-label="Toggle navigation">
        <span class="bar"></span>
        <span class="bar"></span>
        <span class="bar"></span>
    </button>


   <nav>
       <ul>
           <li><a href="{{route('welcome')}}">Home</a></li>
           <li><a href="{{route('booking')}}">Booking Page</a></li>
           <li><a href="{{route('about')}}">About Us</a></li>
           <li><a href="{{route('contact')}}">Contact Us</a></li> <!-- Added Contact Us link -->
           <li><a href="{{route('login')}}">Login</a></li>
           <li><a href="{{route('register')}}">SignUp</a></li>
        </ul>
   </nav>

</header>

<script>
    document.querySelector('.hamburger').addEventListener('click', function() {
        document.querySelector('nav ul').classList.toggle('active');
    });
</script>

