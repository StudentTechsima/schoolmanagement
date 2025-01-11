<?php
include('layout/header.php');
?>


<main class="admin-main-section">

    <?php
    include('layout/aside.php');
    ?>

    <section class="admin-container-panel" id="admin-panel">
        <div class="admin-containerPanel-header">
            <h3 class="admin-containerPanel-text">Control Panel</h3>
            <h2 class="admin-containerPanel-controlText"><a href="" class="controlText-link"><i class="fa-solid fa-gauge"></i>
                    Home ›</a><span class="admin-containerPanel-spanText">Dashboard</span></h2>
        </div>

        <div class="admin-containerPanel-content">
            <div class="aProfile-container">
                <div class="aProfile-header-container">
                    <div class="aProfile-header">Profile</div>
                    <div class="aProfile-breadcrumb">
                        <a href="#"><i class="fa fa-dashboard"></i> Home</a> &gt; <a href="#">Profile</a>
                    </div>
                </div>


                <table class="aProfile-profile-info">
                    <tr class="aProfile-info-top">
                        <td class="aProfile-td">Centre & Personal Information</td>
                    </tr>

                    <tr>
                        <th class="aProfile-th">Centre Code</th>
                        <td class="aProfile-td">HNIS</td>
                    </tr>
                    <tr>
                        <th class="aProfile-th">Centre Name</th>
                        <td class="aProfile-td">STUDENT STUDY POINT & IT EDUCATION</td>
                    </tr>
                    <tr>
                        <th class="aProfile-th">Centre Address</th>
                        <td class="aProfile-td">House No B-28, Part of Plot No B-28 Gate No 12 Gudamba Nirmal Homes Lucknow UP 226021 IN</td>
                    </tr>
                    <tr>
                        <th class="aProfile-th">Director's Name</th>
                        <td class="aProfile-td">Narendra Kumar</td>
                    </tr>
                    <tr>
                        <th class="aProfile-th">Mob. NO</th>
                        <td class="aProfile-td">+91 9044877444</td>
                    </tr>
                    <tr>
                        <th class="aProfile-th">E-MAIL</th>
                        <td class="aProfile-td"></td>
                    </tr>
                </table>
                <a href="#" class="aProfile-download-btn">Authorisation Certificate Download</a>
            </div>


        </div>

    </section>


</main>


<?php
include('layout/footer.php');
?>