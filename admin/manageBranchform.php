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
            <div class="admin-manageBranchform-container">
                <h2 class="admin-manageBranchform-text"><i class="fa fa-file"></i> MANAGE BRANCH FORM</h2>


                <div class="admin-manageBranchform-formContain">
                    <h3 class="admin-manageBranchform-cInfo">Center Information</h3>
                    <form action="" class="admin-manageBranchform-form">

                        <div class="admin-manageBranchform-formGroup">
                            <label for="code" class="admin-manageBranchform-formLabel">Code</label>
                            <input type="text" name="code" class="admin-manageBranchform-formInput">
                        </div>

                        <div class="admin-manageBranchform-formGroup">
                            <label for="code" class="admin-manageBranchform-formLabel">Center Name</label>
                            <input type="text" name="Center Name" class="admin-manageBranchform-formInput">
                        </div>

                        <div class="admin-manageBranchform-formGroup">
                            <label for="code" class="admin-manageBranchform-formLabel">Society/Trust/Company</label>
                            <input type="text" name="Society/Trust/Company" class="admin-manageBranchform-formInput">
                        </div>
                        <div class="admin-manageBranchform-formGroup">
                            <label for="code" class="admin-manageBranchform-formLabel">Registration Number</label>
                            <input type="text" name="Registration Number" class="admin-manageBranchform-formInput">
                        </div>
                        <div class="admin-manageBranchform-formGroup">
                            <label for="code" class="admin-manageBranchform-formLabel">Registration Year</label>
                            <input type="text" name="Registration Year" class="admin-manageBranchform-formInput">
                        </div>
                        <div class="admin-manageBranchform-formGroup">
                            <label for="code" class="admin-manageBranchform-formLabel">Center Address</label>
                            <input type="text" name="Center Address" class="admin-manageBranchform-formInput">
                        </div>
                        <div class="admin-manageBranchform-formGroup">
                            <label for="code" class="admin-manageBranchform-formLabel">Select State</label>
                            <select name="" id="" class="admin-manageBranchform-formInput">
                                <option value="">--Select--</option>
                                <option value="">Delhi</option>
                                <option value="">Uttar Pradesh</option>
                                <option value="">Bihar</option>
                                <option value="">Karnataka</option>
                            </select>
                        </div>
                        <div class="admin-manageBranchform-formGroup">
                            <label for="code" class="admin-manageBranchform-formLabel">District</label>
                            <select name="" id="" class="admin-manageBranchform-formInput">
                                <option value="">--Select--</option>
                                <option value="">Delhi</option>
                                <option value="">Lucknow</option>
                                <option value="">Ayodhya</option>
                                <option value="">Deoria</option>
                            </select>
                        </div>
                        <div class="admin-manageBranchform-formGroup">
                            <label for="code" class="admin-manageBranchform-formLabel">Office Contact No.</label>
                            <input type="text" name="Office Contact No." class="admin-manageBranchform-formInput">
                        </div>

                    </form>
                </div>

                <div class="admin-manageBranchform-formContain">
                    <h3 class="admin-manageBranchform-cInfo">Center Head Profile</h3>
                    <form action="" class="admin-manageBranchform-form">

                        <div class="admin-manageBranchform-formGroup">
                            <label for="code" class="admin-manageBranchform-formLabel">Name</label>
                            <input type="text" name="Name" class="admin-manageBranchform-formInput">
                        </div>

                        <div class="admin-manageBranchform-formGroup">
                            <label for="code" class="admin-manageBranchform-formLabel">Gender</label>
                            <select name="" id="" class="admin-manageBranchform-formInput">
                                <option value="">Select Gender</option>
                                <option value="">Male</option>
                                <option value="">Female</option>
                            </select>
                        </div>

                        <div class="admin-manageBranchform-formGroup">
                            <label for="code" class="admin-manageBranchform-formLabel">Mobile Number</label>
                            <input type="Number" name="Mobile Name" class="admin-manageBranchform-formInput">
                        </div>

                        <div class="admin-manageBranchform-formGroup">
                            <label for="code" class="admin-manageBranchform-formLabel">Email Account</label>
                            <input type="email" name="Email Account" class="admin-manageBranchform-formInput">
                        </div>
                        <div class="admin-manageBranchform-formGroup">
                            <label for="code" class="admin-manageBranchform-formLabel">Address</label>
                            <input type="text" name="Address" class="admin-manageBranchform-formInput">
                        </div>
                        <div class="admin-manageBranchform-formGroup">
                            <label for="code" class="admin-manageBranchform-formLabel">Address Proof</label>
                            <select name="Address Proof" id="" class="admin-manageBranchform-formInput">
                                <option value="">--Select--</option>
                                <option value="">Adhar Card</option>
                                <option value="">Pan Card</option>
                                <option value="">Votar Card</option>
                                <option value="">Passport</option>
                                <option value="">Driving licences</option>
                                <option value="">Other</option>
                            </select>
                        </div>

                        <div class="admin-manageBranchform-formGroup-outer">
                            <div class="admin-manageBranchform-formGroup">
                                <label for="code" class="admin-manageBranchform-formLabel">Id Number</label>
                                <input type="text" name="Id Number" class="admin-manageBranchform-formInput">
                            </div>
                            <div class="admin-manageBranchform-formGroup formGroup-file">
                                <label for="code" class="admin-manageBranchform-formLabel">Center Logo</label>
                                <input type="file" name="Office Contact No." class="admin-manageBranchform-formInput">
                            </div>
                        </div>

                    </form>
                </div>

                <div class="admin-manageBranchform-buttonGroup">
                    <button class="admin-manageBranchform-button" value="">Add New</button>
                </div>

            </div>


        </div>

    </section>


</main>


<?php
include('layout/footer.php');
?>