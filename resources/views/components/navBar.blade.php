<nav class="navbar navbar-expand-sm navbar-dark bg-primary p-0 pb-0 sticky-top">
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

           <?php if (Auth::user()->institute_type==5){?>
           <li class="nav-item">
               <a class="nav-link {{ (request()->is('technical/tecFirstPage')) ? 'active' : '' }}"
                  href="{{ url('technical/tecFirstPage') }}"> মৌলিক তথ্য-১</a>
           </li>
           <?php }?>
           <?php if (!in_array(Auth::user()->institute_type,array(9,12))){?>
        <li class="nav-item">
            <a class="nav-link {{ request()->is('common/secondPage') ? 'active' : '' }}"
               href="{{ url('common/secondPage') }}">মৌলিক তথ্য-২</a>
        </li>
           <?php }?>
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

           {{--Madrasah--}}
           <?php if (Auth::user()->institute_type == 2){?>
           <li class="nav-item">
               <a class="nav-link {{ request()->is('madrasah/madStdFirstPage') ? 'active' : '' }}"
                  href="{{ url('madrasah/madStdFirstPage') }}">মাদ্রাসা-১</a>
           </li>

           <li class="nav-item">
               <a class="nav-link {{ request()->is('madrasah/madStdSecondPage') ? 'active' : '' }}"
                  href="{{ url('madrasah/madStdSecondPage') }}">মাদ্রাসা-২</a>
           </li>

           <li class="nav-item">
               <a class="nav-link {{ request()->is('madrasah/madStdThirdPage') ? 'active' : '' }}"
                  href="{{ url('madrasah/madStdThirdPage') }}">মাদ্রাসা-৩</a>
           </li>

           <li class="nav-item">
               <a class="nav-link {{ request()->is('madrasah/madStdFourthPage') ? 'active' : '' }}"
                  href="{{ url('madrasah/madStdFourthPage') }}">মাদ্রাসা-৪</a>
           </li>

           <li class="nav-item">
               <a class="nav-link {{ request()->is('madrasah/madStdFifthPage') ? 'active' : '' }}"
                  href="{{ url('madrasah/madStdFifthPage') }}">মাদ্রাসা-৫</a>
           </li>

           <li class="nav-item">
               <a class="nav-link {{ request()->is('madrasah/madStdSixthPage') ? 'active' : '' }}"
                  href="{{ url('madrasah/madStdSixthPage') }}">মাদ্রাসা-৬</a>
           </li>

           <li class="nav-item">
               <a class="nav-link {{ request()->is('madrasah/madStdSeventhPage') ? 'active' : '' }}"
                  href="{{ url('madrasah/madStdSeventhPage') }}">মাদ্রাসা-৭</a>
           </li>

           <?php } ?>
           {{--Technical pages--}}
           <?php if (Auth::user()->institute_type==5){?>
           <li class="nav-item">
               <a class="nav-link {{ request()->is('technical/tecStdFirstPage') ? 'active' : '' }}"
                  href="{{ url('technical/tecStdFirstPage') }}">টেকনিক্যাল-১</a>
           </li>
           <li class="nav-item">
               <a class="nav-link {{ request()->is('technical/tecStdSecondPage') ? 'active' : '' }}"
                  href="{{ url('technical/tecStdSecondPage') }}">টেকনিক্যাল-২</a>
           </li>
           <li class="nav-item">
               <a class="nav-link {{ request()->is('technical/tecStdThirdPage') ? 'active' : '' }}"
                  href="{{ url('technical/tecStdThirdPage') }}">টেকনিক্যাল-৩</a>
           </li>
           <li class="nav-item">
               <a class="nav-link {{ request()->is('technical/tecStdFourthPage') ? 'active' : '' }}"
                  href="{{ url('technical/tecStdFourthPage') }}">টেকনিক্যাল-৪</a>
           </li>
           <li class="nav-item">
               <a class="nav-link {{ request()->is('technical/tecStdFifthPage') ? 'active' : '' }}"
                  href="{{ url('technical/tecStdFifthPage') }}">টেকনিক্যাল-৫</a>
           </li>
           <li class="nav-item">
               <a class="nav-link {{ request()->is('technical/tecStdSixthPage') ? 'active' : '' }}"
                  href="{{ url('technical/tecStdSixthPage') }}">টেকনিক্যাল-৬</a>
           </li>
           <li class="nav-item">
               <a class="nav-link {{ request()->is('technical/tecStdSeventhPage') ? 'active' : '' }}"
                  href="{{ url('technical/tecStdSeventhPage') }}">টেকনিক্যাল-৭</a>
           </li>
           <li class="nav-item">
               <a class="nav-link {{ request()->is('technical/tecStdEightPage') ? 'active' : '' }}"
                  href="{{ url('technical/tecStdEightPage') }}">টেকনিক্যাল-৮</a>
           </li>
           <?php }?>


           {{--Private University--}}
           <?php if (Auth::user()->institute_type==12){?>
           <li class="nav-item">
               <a class="nav-link {{ request()->is('privateUni/privateComFirstPage') ? 'active' : '' }}"
                  href="{{ url('privateUni/privateComFirstPage') }}">মৌলিক তথ্য-১</a>
           </li>
           <li class="nav-item">
               <a class="nav-link {{ request()->is('privateUni/privateComSecondPage') ? 'active' : '' }}"
                  href="{{ url('privateUni/privateComSecondPage') }}">মৌলিক তথ্য-২</a>
           </li>
           <li class="nav-item">
               <a class="nav-link {{ request()->is('privateUni/privateStdFirstPage') ? 'active' : '' }}"
                  href="{{ url('privateUni/privateStdFirstPage') }}">শিক্ষার্থীর তথ্য-১</a>
           </li>
           <li class="nav-item">
               <a class="nav-link {{ request()->is('privateUni/privateStdSecondPage') ? 'active' : '' }}"
                  href="{{ url('privateUni/privateStdSecondPage') }}">শিক্ষার্থীর তথ্য-২</a>
           </li>
           <li class="nav-item">
               <a class="nav-link {{ request()->is('privateUni/privateTeachFirstPage') ? 'active' : '' }}"
                  href="{{ url('privateUni/privateTeachFirstPage') }}">শিক্ষকের তথ্য-১</a>
           </li>
           <li class="nav-item">
               <a class="nav-link {{ request()->is('privateUni/privateTeachSecondPage') ? 'active' : '' }}"
                  href="{{ url('privateUni/privateTeachSecondPage') }}">শিক্ষকের তথ্য-২</a>
           </li>
           <li class="nav-item">
               <a class="nav-link {{ request()->is('privateUni/privateBibid') ? 'active' : '' }}"
                  href="{{ url('privateUni/privateBibid') }}">বিবিধ</a>
           </li>
           <?php }?>

           {{--Private University--}}

           {{--Public University--}}
           <?php if (Auth::user()->institute_type==8){?>
           <li class="nav-item">
               <a class="nav-link {{ request()->is('publicUni/publicComFirstPage') ? 'active' : '' }}"
                  href="{{ url('publicUni/publicComFirstPage') }}">মৌলিক তথ্য-১</a>
           </li>
           <li class="nav-item">
               <a class="nav-link {{ request()->is('publicUni/publicComSecondPage') ? 'active' : '' }}"
                  href="{{ url('publicUni/publicComSecondPage') }}">মৌলিক তথ্য-২</a>
           </li>
           <li class="nav-item">
               <a class="nav-link {{ request()->is('publicUni/publicStdFirstPage') ? 'active' : '' }}"
                  href="{{ url('publicUni/publicStdFirstPage') }}">শিক্ষার্থীর তথ্য-১</a>
           </li>
           <li class="nav-item">
               <a class="nav-link {{ request()->is('publicUni/publicStdSecondPage') ? 'active' : '' }}"
                  href="{{ url('publicUni/publicStdSecondPage') }}">শিক্ষার্থীর তথ্য-২</a>
           </li>
           <li class="nav-item">
               <a class="nav-link {{ request()->is('publicUni/publicTeachFirstPage') ? 'active' : '' }}"
                  href="{{ url('publicUni/publicTeachFirstPage') }}">শিক্ষকের তথ্য-১</a>
           </li>
           <li class="nav-item">
               <a class="nav-link {{ request()->is('publicUni/publicTeachSecondPage') ? 'active' : '' }}"
                  href="{{ url('publicUni/publicTeachSecondPage') }}">শিক্ষকের তথ্য-২</a>
           </li>
           <li class="nav-item">
               <a class="nav-link {{ request()->is('publicUni/publicBibid') ? 'active' : '' }}"
                  href="{{ url('publicUni/privateBibid') }}">বিবিধ</a>
           </li>
           <?php }?>

           {{--Public University--}}
           <?php if (Auth::user()->institute_type==9){?>
           <li class="nav-item">
               <a class="nav-link {{ request()->is('english/engComFirstPage') ? 'active' : '' }}"
                  href="{{ url('english/engComFirstPage') }}">মৌলিক তথ্য-১</a>
           </li>
           <li class="nav-item">
               <a class="nav-link {{ request()->is('english/engComSecondPage') ? 'active' : '' }}"
                  href="{{ url('english/engComSecondPage') }}">মৌলিক তথ্য-২</a>
           </li>
           <li class="nav-item">
               <a class="nav-link {{ request()->is('english/engStdFirstPage') ? 'active' : '' }}"
                  href="{{ url('english/engStdFirstPage') }}">শিক্ষার্থীর তথ্য-১</a>
           </li>
           <li class="nav-item">
               <a class="nav-link {{ request()->is('english/engStdSecondPage') ? 'active' : '' }}"
                  href="{{ url('english/engStdSecondPage') }}">শিক্ষার্থীর তথ্য-২</a>
           </li>
           <li class="nav-item">
               <a class="nav-link {{ request()->is('english/engTeachFirstPage') ? 'active' : '' }}"
                  href="{{ url('english/engTeachFirstPage') }}">শিক্ষকের তথ্য-১</a>
           </li>
           <?php }?>

        {{--Bibidh--}}
           <?php if (Auth::user()->institute_type!=12){?>
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
           <?php }?>
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

