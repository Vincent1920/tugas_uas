<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link active text-decoration-none" aria-current="page" href="{{route('admin.dashboard')}}">
            <i class="bi bi-clipboard-data "></i>
            Dashboard
          </a>
        </li>   
        <li class="nav-item">
          <a class="nav-link" href="/post">
            <i class="bi bi-box-arrow-in-down"></i>
            {{-- <span data-feather="file"></span> --}}
            post
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            <span data-feather="shopping-cart"></span>
            menu
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/news">
            <span data-feather="file-text"></span>
            news 
          </a>
        </li>
      </ul>
    </div>
  </nav>
  