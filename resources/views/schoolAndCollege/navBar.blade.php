<nav class="navbar navbar-expand-lg navbar-dark bg-primary p-0">
    <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link {{ (request()->is('schoolAndCollege/firstPage')) ? 'active' : '' }}"
                   href="{{ url('schoolAndCollege/firstPage') }}">প্রথম পাতা</a>
            </li>

            <li class="nav-item">
                <a class="nav-link {{ request()->is('schoolAndCollege/secondPage') ? 'active' : '' }}"
                   href="{{ url('schoolAndCollege/secondPage') }}">দ্বিতীয় পাতা</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->is('schoolAndCollege/thirdPage') ? 'active' : '' }}"
                   href="{{ url('schoolAndCollege/thirdPage') }}">তৃতীয় পাতা</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->is('schoolAndCollege/fourthPage') ? 'active' : '' }}"
                   href="{{ url('schoolAndCollege/fourthPage') }}">চতুর্থ পাতা</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->is('schoolAndCollege/fifthPage') ? 'active' : '' }}"
                   href="{{ url('schoolAndCollege/fifthPage') }}">পঞ্চম পাতা</a>
            </li>
        </ul>
        <span class="navbar-text">
        <a href="/logout" class="btn btn-success">Logout</a>
        </span>
    </div>
</nav>