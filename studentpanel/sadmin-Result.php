<?php include('./layout/studentheader.php'); ?>
<!-- Header Section End -->
<!-- Dashboard Section Start -->
<div class="sadmin-main-dash">
    <div class="sadmin-panel-lftside">
        <div class="sadmin-userPannal">
            <div class="sadmin-info">
                <p>Rajeev Patel</p>
                <p><i class="fa fa-circle text-success"></i>Online</p>
            </div>
        </div>
        <div class="sadmin-navMenu">
            <div class="sadmin-heading">
                <p><b> MAIN NAVIGATION</b></p>
            </div>
            <div class="li">
                <a href="./sadmin-dash.php">
                    <div class="icon"><i class="fa-solid fa-gauge"></i></div>
                    <div class="sadmin-panel-lftside-text"><span class="sadmin-span">Dashboard</span></div>
                </a>
            </div>
            <div class="li">
                <a href="./student-profile.php">
                    <div class="icon"><i class="fa fa-user"></i></div>
                    <div class="sadmin-panel-lftside-text"><span class="sadmin-span">Profile</span></div>
                </a>
            </div>
            <div class="li">
                <a href="./sadmin-youtube.php">
                    <div class="icon"><i class="fa fa-tv"></i></div>
                    <div class="sadmin-panel-lftside-text"><span class="sadmin-span">YouTube Live Classes</span></div>
                </a>
            </div>
            <div class="li">
                <a href="./sadmin-zoom.php">
                    <div class="icon"><i class="fa fa-tv"></i></div>
                    <div class="sadmin-panel-lftside-text"><span class="sadmin-span">Zoom Live Classes</span></div>
                </a>
            </div>
            <div class="li">
                <a href="./sadmin-study.php">
                    <div class="icon"><i class="fa fa-bookmark"></i></div>
                    <div class="sadmin-panel-lftside-text"><span class="sadmin-span">Study Material</span></div>
                </a>
            </div>
            <div class="li">
                <a href="./sadmin-Video.php">
                    <div class="icon"><i class="fa fa-tv"></i></div>
                    <div class="sadmin-panel-lftside-text"><span class="sadmin-span">Video Classes</span></div>
                </a>
            </div>
            <div class="li">
                <a href="./sadmin-syllabus.php">
                    <div class="icon"><i class="fa fa-book"></i></div>
                    <div class="sadmin-panel-lftside-text"><span class="sadmin-span">Syllabus</span></div>
                </a>
            </div>
            <div class="li">
                <a href="./sadmin-online-test.php">
                    <div class="icon"><i class="fa fa-address-card"></i></div>
                    <div class="sadmin-panel-lftside-text"><span class="sadmin-span">Online Test</span></div>
                </a>
            </div>
            <div class="li">
                <a href="./sadmin-Result.php">
                    <div class="icon"><i class="fa fa-bookmark"></i></div>
                    <div class="sadmin-panel-lftside-text"><span class="sadmin-span">Result</span></div>
                </a>
            </div>
            <div class="li">
                <a href="./sadmin-fees.php">
                    <div class="icon"><i class="fa fa-inr"></i></div>
                    <div class="sadmin-panel-lftside-text"><span class="sadmin-span">Due Amt: 1000</span></div>
                </a>
            </div>
        </div>
    </div>
    <!--------------------------------------->
    <div class="sadmin-panel-rhtside">
        <div class="sadmin-main-stu-panal">
            <div class="sadmin-stu-panal">
                <h2>STUDENT STUDY POINT & IT EDUCATION </h2><span>student panal</span>
            </div>
            <div class="sadmin-stu-panal">
                <h5><i class="fa-solid fa-gauge"></i> HOME </h5><i class="fa-light fa-greater-than"
                    style="color: #000;"></i> <span class="sadmin-stp-ryt">dashboard</span>
            </div>
        </div>
        <div class="dashbox">
            <div class="sadmin-exam-report-container">
                <table class="sadmin-exam-report-table">
                    <thead>
                        <tr>
                            <th>Sn.</th>
                            <th>Date</th>
                            <th>Test Name</th>
                            <th>Tot.Q.</th>
                            <th>Attempted</th>
                            <th>L.Q.</th>
                            <th>R.Q.</th>
                            <th>W.Q.</th>
                            <th>(&minus;M.)</th>
                            <th>Tot.M</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="sadmin-exam-report">
                            <td colspan="10">No Report Found</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- Dashboard Section End -->
<!-- footer start -->
<?php include('./layout/studentfooter.php'); ?>