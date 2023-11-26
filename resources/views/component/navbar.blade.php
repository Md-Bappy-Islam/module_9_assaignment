<nav class="custom-navbar" style="background-color: #808080b0">
    <div class="container">
        <a class="logo" href="{{ asset('/') }}">BAPPY</a>
        <ul class="nav">
            <li class="item">
                <a class="link" href="{{ asset('/') }}">Home</a>
            </li>
            <li class="item">
                <a class="link" href="{{ asset('/aboutMe') }}">About Me</a>
            </li>
            <li class="item">
                <a class="link" href="{{ asset('/project') }}">Projects</a>
            </li>
            <li class="item">
                <a class="link" href="{{ asset('/contact') }}">Contact</a>
            </li>
        </ul>
        <a href="javascript:void(0)" id="nav-toggle" class="hamburger hamburger--elastic">
            <div class="hamburger-box">
                <div class="hamburger-inner"></div>
            </div>
        </a>
    </div>
</nav>
