<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>synGEN</title>
  <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body>
  <div class="mx-auto bg-grey-400">
    <div class="navbar bg-base-100">
      @guest
      <div class="flex-none">
        <a class="btn btn-ghost normal-case text-xl text-gray-400 hover:text-red-400" href="{{ route('welcome') }}" >synGEN</a>
      </div>
      @else
      <div class="flex-none">
        <label for="my-drawer" class="btn btn-ghost normal-case drawer-button bg-base-100  text-gray-400 hover:text-red-400">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="inline-block w-5 h-5 stroke-current">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16">
            </path>
          </svg>
        </label>
      </div>
      <div class="flex-1">
        <a class="normal-case m-3 text-xl text-gray-400 hover:text-red-400" href="{{ route('welcome') }}" >synGEN</a>
      </div>
      @endguest

      <div class="flex-none">
        @guest
          @if (Route::has('login')) 
            <div class="nav-item">
                <a class="nav-link text-gray-400 hover:text-red-400" href="{{ route('login') }}">{{ __('Login') }}</a>
            </div>
          @endif

          @if (Route::has('register'))
            <div class="nav-item">
                <a class="nav-link text-gray-400 hover:text-red-400" href="{{ route('register') }}">{{ __('Register') }}</a>
            </div>
          @endif
        @else
          <div class="dropdown dropdown-end">
            <label class="m-3 text-gray-400">
            {{ Auth::user()->name }}
            </label>
            <label tabindex="0" class="btn btn-ghost btn-circle avatar">
              <div class="w-10 rounded-full">
                <img src="data:image/jpeg;base64,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" />
              </div>
            </label>
            <ul tabindex="0" class="menu menu-compact dropdown-content mt-3 p-2 shadow bg-base-100 rounded-box w-52 text-gray-400">
              <li>
                <a class="justify-between hover:text-red-400">
                  Profile
                </a>
              </li>
              <li><a class="hover:text-red-400">Settings</a></li>
              <li>
                <a class="hover:text-red-400" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                  document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
              </li>
            </ul>
          </div>
        @endguest
      </div>
    </div>
    <div class="drawer">
      <input id="my-drawer" type="checkbox" class="drawer-toggle" />
      <div class="drawer-content">
        <main class="py-4">
            @yield('content')
        </main>
      </div> 
      <div class="drawer-side">
        <label for="my-drawer" class="drawer-overlay"></label>
        @include('includes.sidebar')
      </div>
    </div>
  </div>
</body>
</html> 