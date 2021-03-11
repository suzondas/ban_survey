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
                <a class="nav-link {{ request()->is('schoolAndCollege/sixthPage') ? 'active' : '' }}"
                   href="{{ url('schoolAndCollege/schoolFirstPage') }}">স্কুল সম্পর্কিত-১</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->is('schoolAndCollege/sixthPage') ? 'active' : '' }}"
                   href="{{ url('schoolAndCollege/schoolSecondPage') }}">স্কুল সম্পর্কিত-২</a>
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
            <li class="nav-item">
                <a class="nav-link {{ request()->is('schoolAndCollege/sixthPage') ? 'active' : '' }}"
                   href="{{ url('schoolAndCollege/sixthPage') }}">ষষ্ঠ পাতা</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->is('schoolAndCollege/collegeFirstPage') ? 'active' : '' }}"
                   href="{{ url('schoolAndCollege/collegeFirstPage') }}">কলেজ(১ম পাতা)</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->is('schoolAndCollege/collegeSecondPage') ? 'active' : '' }}"
                   href="{{ url('schoolAndCollege/collegeSecondPage') }}">কলেজ(২য় পাতা)</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->is('schoolAndCollege/sncFirstPage') ? 'active' : '' }}"
                   href="{{ url('schoolAndCollege/sncFirstPage') }}">স্কুল এন্ড কলেজ-১</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->is('schoolAndCollege/sncSecondPage') ? 'active' : '' }}"
                   href="{{ url('schoolAndCollege/sncSecondPage') }}">স্কুল এন্ড কলেজ-২</a>
            </li>
        </ul>
        <span class="navbar-text">
        <a href="/logout" class="btn btn-success">Logout</a>
        </span>
    </div>
</nav>
