<nav class="navbar navbar-expand-lg navbar-dark bg-primary p-0 pb-0 sticky-top">
    <ul class="navbar-nav">
       <?php if(in_array(Auth::user()->institute_type, array(1,3,4))){?>
        <li class="nav-item">
            <a class="nav-link {{ (request()->is('common/firstPage')) ? 'active' : '' }}"
               href="{{ url('common/firstPage') }}"> মৌলিক তথ্য-১</a>
        </li>
        <?php } ?>

           <?php if (Auth::user()->institute_type == 2){?>
           <li class="nav-item">
               <a class="nav-link {{ (request()->is('common/madFirstPage')) ? 'active' : '' }}"
                  href="{{ url('common/madFirstPage') }}"> মৌলিক তথ্য-১</a>
           </li>

           <?php } ?>

        <li class="nav-item">
            <a class="nav-link {{ request()->is('common/secondPage') ? 'active' : '' }}"
               href="{{ url('common/secondPage') }}">মৌলিক তথ্য-২</a>
        </li>

        {{--School pages--}}
        <?php if (Auth::user()->institute_type == 1){?>
        <li class="nav-item">
            <a class="nav-link {{ request()->is('school/schoolFirstPage') ? 'active' : '' }}"
               href="{{ url('school/schoolFirstPage') }}">স্কুল-১</a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ request()->is('school/schoolSecondPage') ? 'active' : '' }}"
               href="{{ url('school/schoolSecondPage') }}">স্কুল-২</a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ request()->is('school/schoolThirdPage') ? 'active' : '' }}"
               href="{{ url('school/schoolThirdPage') }}">স্কুল-৩</a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ request()->is('school/schoolFourthPage') ? 'active' : '' }}"
               href="{{ url('school/schoolFourthPage') }}">স্কুল-৪</a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ request()->is('school/schoolFifthPage') ? 'active' : '' }}"
               href="{{ url('school/schoolFifthPage') }}">স্কুল-৫</a>
        </li>
        <?php } ?>

        {{--College pages--}}
        <?php if (Auth::user()->institute_type == 3){?>
        <li class="nav-item">
            <a class="nav-link {{ request()->is('college/collegeFirstPage') ? 'active' : '' }}"
               href="{{ url('college/collegeFirstPage') }}">কলেজ-১</a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ request()->is('college/collegeSecondPage') ? 'active' : '' }}"
               href="{{ url('college/collegeSecondPage') }}">কলেজ-২</a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ request()->is('college/collegeThirdPage') ? 'active' : '' }}"
               href="{{ url('college/collegeThirdPage') }}">কলেজ-৩</a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ request()->is('college/collegeFourthPage') ? 'active' : '' }}"
               href="{{ url('college/collegeFourthPage') }}">কলেজ-৪</a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ request()->is('college/collegeFifthPage') ? 'active' : '' }}"
               href="{{ url('college/collegeFifthPage') }}">কলেজ-৫</a>
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
        <li class="nav-item">
            <a class="nav-link {{ request()->is('schoolAndCollege/sncThirdPage') ? 'active' : '' }}"
               href="{{ url('schoolAndCollege/sncThirdPage') }}">স্কুল এন্ড কলেজ-৩</a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ request()->is('schoolAndCollege/sncFourthPage') ? 'active' : '' }}"
               href="{{ url('schoolAndCollege/sncFourthPage') }}">স্কুল এন্ড কলেজ-৪</a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ request()->is('schoolAndCollege/sncFifthPage') ? 'active' : '' }}"
               href="{{ url('schoolAndCollege/sncFifthPage') }}">স্কুল এন্ড কলেজ-৫</a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ request()->is('schoolAndCollege/sncSixPage') ? 'active' : '' }}"
               href="{{ url('schoolAndCollege/sncSixPage') }}">স্কুল এন্ড কলেজ-৬</a>
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
    </ul>
    <ul class="navbar-nav justify-content-end ml-auto">
        <li class="nav-item">
            <a type="button" class="nav-link" data-toggle="modal"
               data-target="#helpModal">Help</a>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link" style="">Print</a>
        </li>
        <li>
            <a href="/logout" class="btn logOutButton" style="">Logout</a>
        </li>
    </ul>
</nav>
<hr>

