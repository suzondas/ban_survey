<div class="row justify-content-center pt-3">
    <div class="text-center" style="">
        <img src="{{ URL::to('/') }}/img/mujib_borsho.png" alt="মুজিব বর্ষ" class="mujib_borsho">
        <div class="d-table-cell" style="font-size: 18px;line-height: 20px">
            গণপ্রজাতন্ত্রী বাংলাদেশ সরকার <br>
            শিক্ষা মন্ত্রণালয়<br>
            বাংলাদেশ শিক্ষাতথ্য ও পরিসংখ্যান ব্যুরো(ব্যানবেইস)<br>
            www.banbeis.gov.bd, e-mail: info@banbeis.gov.bd<br><br>
            <span style="font-weight: bold;">শিক্ষা প্রতিষ্ঠান বার্ষিক জরিপ, ২০২১<br>
            <?php if (Auth::check()) {?>
            শিক্ষা প্রতিষ্ঠান: <?php echo(Auth::user()->user_name); ?> (EIIN: <?php echo(Auth::user()->eiin); ?>)
            <?php }?>
        </span>
        </div>
    </div>
</div>

