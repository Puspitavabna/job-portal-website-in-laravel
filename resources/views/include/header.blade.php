<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
    <a class="navbar-brand" href="{{ route('home.index') }}">JOb portal website</a>
    <ul class="navbar-nav mr-auto">
        <li class="nav-item"><a class="nav-link" href="{{ route('home.index') }}">Home</a></li>
    </ul>

    <form class="form-inline my-2 my-lg-0">
        <input class="form-control" type="text" placeholder="Search">
        <button class="btn btn-success" style="border: 1px dotted white" type="button">Submit</button>

        <span class="our-social pleft20">
            <a href="#" target="_blank" class="fa fa-facebook"></a>
            <a href="#" target="_blank" class="fa fa-twitter"></a>
            <a href="#" target="_blank" class="fa fa-google"></a>
            <a href="#" target="_blank" class="fa fa-linkedin"></a>
            <a href="#" target="_blank" class="fa fa-youtube"></a>
        </span>
    </form>
</nav>