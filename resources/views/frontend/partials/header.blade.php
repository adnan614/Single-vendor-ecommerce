


 <!-- Nav Bar Start -->
 <div class="nav">
    <div class="container-fluid">
        <nav class="navbar navbar-expand-md bg-dark navbar-dark">
            <a href="#" class="navbar-brand">MENU</a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav mr-auto">
                    <a href="{{ route('frontend.layouts.home') }}" class="nav-item nav-link ">Home</a>
                    <a href="category.html" class="nav-item nav-link ">Category</a>
                    <a href="{{ route('frontend.product.allview') }}" class="nav-item nav-link">Products</a>

                    <a href="" class="nav-item nav-link">Product Detail</a>

                    <a href="cart.html" class="nav-item nav-link">Cart</a>
                    <a href="checkout.html" class="nav-item nav-link">Checkout</a>
                    <a href="my-account.html" class="nav-item nav-link">My Account</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">More Pages</a>
                        <div class="dropdown-menu">
                            <a href="wishlist.html" class="dropdown-item">Wishlist</a>
                            <a href="login.html" class="dropdown-item">Login & Register</a>
                            <a href="contact.html" class="dropdown-item">Contact Us</a>
                        </div>
                    </div>
                </div>
                <div class="navbar-nav ml-auto">
                    <div class="nav-item dropdown">
                        <a href="" class="nav-link dropdown-toggle" data-toggle="dropdown">User Account</a>
                         <div class="dropdown-menu">
                            @guest<a href="{{ route('user.loginform') }}" class="dropdown-item">Login</a>@endguest
                            @auth<a href="" class="dropdown-item">Logout</a>@endauth
                            <a href="{{route('user.form')}}" class="dropdown-item">Register</a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</div>
<!-- Nav Bar End -->

{{-- <li class="dropdown">
    <div class="dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white; font-size: 18px; margin-top: 3px;" >
      Category
    </div>

    <ul class="dropdown-menu" style="background-color: black;">
        @foreach($categories as $data)
        <li><a href="{{ route('frontend.category.view',$data->id) }}" style="background: white">{{ $data->name }}</a></li>
        @endforeach
    </ul>

</li> --}}
