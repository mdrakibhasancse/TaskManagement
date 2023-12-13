<nav class="navbar navbar-expand-md bg-light navbar-light">
    <a class="navbar-brand" href="#">TaskApplication</a>
    <div id="navb" class="navbar-collapse collapse hide">
      <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard*') ? 'active' : '' }}" href="{{url('/dashboard')}}">Dashboard</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('categories*') ? 'active' : '' }}" href="{{url('/categories')}}">Category</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('tasks*') ? 'active' : '' }}" href="{{url('/tasks')}}">Task</a>
        </li>

      </ul>

      <ul class="nav navbar-nav ml-auto">
        <li class="nav-item">
            <form action="{{route('logout')}}" method="post">
                 @csrf
                 <button style="border: none; background:none;" type="submit"><i class="fas fa-sign-out-alt"></i> Logout </button>
            </form>
        </li>
      </ul>
    </div>
  </nav>
