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
            <div class="admin-manageUserform-container">
                <h2 class="admin-manageUserform-text"><i class="fa fa-file"></i> Add User</h2>



                <form action="" class="admin-manageUserform-form">

                    <div class="admin-manageUserform-formGroup">
                        <label for="code" class="admin-manageUserform-formLabel">USER TYPE*</label>
                        <select name="" id="" class="admin-manageUserform-formInput">
                            <option value="">--Select--</option>
                            <option value="">user</option>

                        </select>
                    </div>

                    <div class="admin-manageUserform-formGroup">
                        <label for="code" class="admin-manageUserform-formLabel">Name*</label>
                        <input type="text" name="Name" class="admin-manageUserform-formInput">
                    </div>

                    <div class="admin-manageUserform-formGroup">
                        <label for="code" class="admin-manageUserform-formLabel">Contact*</label>
                        <input type="text" name="Contact" class="admin-manageUserform-formInput">
                    </div>

                    <div class="admin-manageUserform-formGroup">
                        <label for="code" class="admin-manageUserform-formLabel">manageUserform*</label>
                        <select name="" id="" class="admin-manageUserform-formInput">
                            <option value="">--Select--</option>
                            <option value="">(Hanis) STUDENT STUDY POINT & IT EDUCATION </option>
                            <option value="">(1901) KALAI COMPUTERS</option>
                            <option value="">(DEMO)CT</option>
                            <option value="">(1902)RADAH KRISHNA COMPUTER</option>
                        </select>
                    </div>
                    <div class="admin-manageUserform-formGroup">
                        <label for="code" class="admin-manageUserform-formLabel">Login ID*</label>
                        <input type="text" name="Login ID" class="admin-manageUserform-formInput">
                    </div>
                    <div class="admin-manageUserform-formGroup">
                        <label for="code" class="admin-manageUserform-formLabel">Password*</label>
                        <input type="text" name="Password" class="admin-manageUserform-formInput">
                    </div>

                </form>




                <div class="admin-manageUserform-buttonGroup">
                    <button class="admin-manageUserform-button" value="">Exit</button>
                    <button class="admin-manageUserform-button" value="">Submit</button>
                </div>

                <hr>
                <div class="admin-manageUser-notes">
                    <p>* denotes required field ❌ denotes Form No. already Exist or less than 2 digits ✔️ denotes OK</p>
                </div>

            </div>


        </div>

    </section>


</main>


<?php
include('layout/footer.php');
?>