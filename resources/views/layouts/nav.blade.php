<nav class="navbar navbar-dark bg-dark navbar-expand-lg">
    <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myNavbar" aria-controls="myNavbar" aria-expanded="false" aria-label="Toggle Navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#">Položka 1</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Položka 2</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Položka 3</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Položka 4</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Položka 5</a>
                </li>
            </ul>
            <span class="navbar-item ml-auto">
                <a class="nav-link" href="#">
                    @if(Auth::check())
                        {{ Auth::user()->name }}
                    @endif
                </a>
            </span>
        </div>
    </div>
</nav>