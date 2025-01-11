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
            <div class="admin-dueFeereport-container">

                <h2 class="admin-dueFeereport-text"><i class="fa fa-file"></i> DUES FEE REPORT</h2>
                <p class="admin-dueFeereport-text">Search By :</p>
                <form action="" class="admin-dueFeereport-form">

                    <div class="admin-dueFeereport-formGroup">
                        <label for="Branch" class="admin-dueFeereport-formLabel">From Date</label>
                        <input type="date" class="admin-dueFeereport-formInput">
                    </div>
                    <div class="admin-dueFeereport-formGroup">
                        <label for="Branch" class="admin-dueFeereport-formLabel">To Date</label>
                        <input type="date" class="admin-dueFeereport-formInput">
                    </div>


                    <div class="admin-dueFeereport-formButton">
                        <input type="submit" value="Search" class="admin-dueFeereport-formButtoninput">
                    </div>


                </form>



                <table class="admin-dueFeereport-tableOuter">
                    <thead>
                        <tr>
                            <th class="admin-dueFeereport-tableHead">S.ID</th>
                            <th class="admin-dueFeereport-tableHead">Name</th>
                            <th class="admin-dueFeereport-tableHead">Contact No.</th>
                            <th class="admin-dueFeereport-tableHead">Course</th>
                            <th class="admin-dueFeereport-tableHead">Total Paid</th>
                            <th class="admin-dueFeereport-tableHead">Dues(Rs.)</th>
                            <th class="admin-dueFeereport-tableHead">Due Date</th>
                            <th class="admin-dueFeereport-tableHead">Remarks</th>
                            <th class="admin-dueFeereport-tableHead"><a href="#" class="admin-dueFeereport-bLink">Export</a>
                            </th>
                        </tr>
                    </thead>

                    <tbody>
                        <!--show here dues fee report/ data  -->
                    </tbody>

                </table>
                <p class="admin-duesFeereport-text">No Records Found</p>

            </div>


        </div>

    </section>


</main>


<?php
include('layout/footer.php');
?>