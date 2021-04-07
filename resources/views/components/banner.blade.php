<div class="row justify-content-center pt-3">
    <p class="text-center" style="line-height: 20px">
        <img src="{{ URL::to('/') }}/img/mujib_borsho.png" alt="মুজিব বর্ষ" class="mujib_borsho">
        গণপ্রজাতন্ত্রী বাংলাদেশ সরকার <br>
        শিক্ষা মন্ত্রণালয়<br>
        বাংলাদেশ শিক্ষাতথ্য ও পরিসংখ্যান ব্যুরো(ব্যানবেইস)<br>
        www.banbeis.gov.bd, e-mail: info@banbeis.gov.bd<br><br>
        <b style="font-size: 18px;">শিক্ষা প্রতিষ্ঠান বার্ষিক জরিপ, ২০২১</b><br>
        <b>শিক্ষা প্রতিষ্ঠান: <?php echo (Auth::user()->user_name); ?> (EIIN: <?php echo (Auth::user()->eiin); ?>)</b>
    </p>
</div>
