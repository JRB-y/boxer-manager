<nav class="navbar navbar-expand-lg navbar-dark bg-dark" id="nav">
    <a class="navbar-brand" href="{{ route('boxers.index') }}">Boxer Manager</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#boxerNavBar" aria-controls="boxerNavBar" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="boxerNavBar">
    <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
            <a class="nav-link" href="{{ route('boxers.index') }}">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ url('tatami') }}">Tatami</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{url('ring')}}">Ring</a>
        </li>
    </ul>
    {{-- <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form> --}}
    </div>
</nav>