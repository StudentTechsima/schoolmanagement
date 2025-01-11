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
            <div class="admin-suggestionBox-container">
                <h2 class="admin-suggestionBox-text"><i class="fa fa-file"></i> MANAGE BRANCH SUGESTION</h2>


                <form action="" class="admin-suggestionBox-form">

                    <div class="admin-suggestionBox-formGroup">
                        <select name="" id="" class="admin-suggestionBox-formInput">
                            <option value="">--SELECT BRANCH--</option>
                            <option value="">Student Study Point & it Education</option>
                            <option value="">Kalki Computers</option>
                            <option value="">CT</option>
                            <option value="">Radha Krishna Computer</option>

                        </select>
                    </div>

                    <div class="admin-suggestionBox-formButton">
                        <input type="submit" value="Search" class="admin-suggestionBox-formButtoninput">
                    </div>

                </form>


                <table class="admin-suggestionBox-tableOuter">
                    <thead>
                        <tr>
                            <th class="admin-suggestionBox-tableHead">S.No</th>
                            <th class="admin-suggestionBox-tableHead">DATE</th>
                            <th class="admin-suggestionBox-tableHead">SUGGESTIONS</th>
                            <th class="admin-suggestionBox-tableHead">DESCR</th>
                            <th class="admin-suggestionBox-tableHead">FILE</th>
                            <th class="admin-suggestionBox-tableHead">CENTER NAME</th>
                            <th class="admin-suggestionBox-tableHead">ACTION</th>


                        </tr>
                    </thead>

                    <tbody>

                    </tbody>

                </table>


            </div>


        </div>

    </section>


</main>


<?php
include('layout/footer.php');
?>