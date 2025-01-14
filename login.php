<?php
include 'layout/header.php';
date("e");
date_default_timezone_set("Asia/kolkata");
?>
<div class="inner-log">
    <div class="student-log">
        <div class="student-log-left">
            <div class="std-text">
                <p><span>Lorem ipsum dolor sit amet</span></p>
                <h1><span>Login</span> Now</h1>
            </div>
            <div class="std-time-log">
                <div class="std-login-circle">
                    <h1><?= date("d") ?></h1>
                    <p>days</p>
                </div>
                <div class="std-login-circle">
                    <h1><?= date("h") ?></h1>
                    <p>hours</p>
                </div>
                <div class="std-login-circle">
                    <h1><?= date("i") ?></h1>
                    <p>mintues</p>
                </div>
                <div class="std-login-circle">
                    <h1><?= date("s") ?></h1>
                    <p>seconds</p>
                </div>
            </div>
        </div>
        <form class="inner-student">
            <h2>Student Login</h2>

            <input type="text" class="inp-log" placeholder="Enroll No./ Regs No.">
            <input type="text" class="inp-log" placeholder="Enter Password">
            <a href="" class="forget-pas"><u>Forgot Password?</u></a>
            <div class="cancel">
                <a href="" class="read-btn5">Login</a>
            </div>
            <p>* Password Recover By The Institute </p>
        </form>
    </div>
</div>

<!-- login section end -->
<?php
include 'layout/footer.php';
?>