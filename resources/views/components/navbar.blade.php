<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container">

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/" style="background: rgb(10, 124, 195)">Home</a>
          </li>

          @foreach ($categories as $item)
          <li class="nav-item">
            <a class="nav-link" href="/category/{{ $item->slug }}">{{ $item->name }}</a>
          </li>
          @endforeach

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              More
            </a>
            <ul class="dropdown-menu">
                @foreach ($categories as $index=>$item)
                @if ($index>11)
                <li><a class="dropdown-item" href="/category/{{ $item->slug }}">{{ $item->name }}</a></li>
                @endif
                @endforeach
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>
