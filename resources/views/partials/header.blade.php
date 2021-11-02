<div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="{{ route('home-page') }}">COMICS</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
            <a class="nav-link" href="{{ route('home-page') }}">Home</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Inserisci un nuovo Comics</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="{{ route('comics.index') }}">Lista Comics</a>
            </li>
        </ul>
        </div>
    </nav>
</div>