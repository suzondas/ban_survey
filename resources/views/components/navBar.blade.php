<nav class="navbar navbar-expand-lg navbar-dark bg-primary p-0 pb-0 sticky-top">
    <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link {{ (request()->is('common/firstPage')) ? 'active' : '' }}"
                   href="{{ url('common/firstPage') }}"> মৌলিক তথ্য-১</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->is('common/secondPage') ? 'active' : '' }}"
                   href="{{ url('common/secondPage') }}">মৌলিক তথ্য-২</a>
            </li>

            {{--School pages--}}
            <?php if (Auth::user()->institute_type == 1){?>
            <li class="nav-item">
                <a class="nav-link {{ request()->is('school/schoolFirstPage') ? 'active' : '' }}"
                   href="{{ url('school/schoolFirstPage') }}">স্কুল সম্পর্কিত-১</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->is('school/schoolSecondPage') ? 'active' : '' }}"
                   href="{{ url('school/schoolSecondPage') }}">স্কুল সম্পর্কিত-২</a>
            </li>
            <?php } ?>

            {{--College pages--}}
            <?php if (Auth::user()->institute_type == 3){?>
            <li class="nav-item">
                <a class="nav-link {{ request()->is('college/collegeFirstPage') ? 'active' : '' }}"
                   href="{{ url('college/collegeFirstPage') }}">কলেজ(১ম পাতা)</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->is('college/collegeSecondPage') ? 'active' : '' }}"
                   href="{{ url('college/collegeSecondPage') }}">কলেজ(২য় পাতা)</a>
            </li>
            <?php } ?>

            {{--School and College Pages--}}
            <?php if (Auth::user()->institute_type == 4){?>
            <li class="nav-item">
                <a class="nav-link {{ request()->is('schoolAndCollege/sncFirstPage') ? 'active' : '' }}"
                   href="{{ url('schoolAndCollege/sncFirstPage') }}">স্কুল এন্ড কলেজ-১</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->is('schoolAndCollege/sncSecondPage') ? 'active' : '' }}"
                   href="{{ url('schoolAndCollege/sncSecondPage') }}">স্কুল এন্ড কলেজ-২</a>
            </li>
            <?php } ?>

            {{--Bibidh--}}
            <li class="nav-item">
                <a class="nav-link {{ request()->is('common/thirdPage') ? 'active' : '' }}"
                   href="{{ url('common/thirdPage') }}"> বিবিধ-১ </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->is('common/fourthPage') ? 'active' : '' }}"
                   href="{{ url('common/fourthPage') }}">বিবিধ-২</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->is('common/fifthPage') ? 'active' : '' }}"
                   href="{{ url('common/fifthPage') }}">বিবিধ-৩</a>
            </li>

            {{--Teacher and Staff Page--}}
            <li class="nav-item">
                <a class="nav-link {{ request()->is('common/teacherStaffInfo') ? 'active' : '' }}"
                   href="{{ url('common/teacherStaffInfo') }}">শিক্ষক-কর্মচারী তথ্য</a>
            </li>
            <li>
                <a href="/logout" class="btn logOutButton" style="">Logout</a>
            </li>
        </ul>

    </div>
</nav>
<hr>
