<nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="light">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}"><img
                src="https://1000marche.net/wp-content/uploads/2020/03/DC-Comics-logo.png" class="logo-img"
                alt=""></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link " href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('comics.index') }}">Lista fumetti</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
