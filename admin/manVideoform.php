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
            <div class="admin-manVideoform-container">
                <h2 class="admin-manVideoform-text"><i class="fa fa-file"></i> VIDEO CATEGORY</h2>

                <form action="">
                    <table class="admin-manVideoform-table">
                        <tbody class="admin-manVideoform-tableBody">
                            <tr class="admin-manVideoform-tableRow">
                                <td class="admin-manVideoform-tableLabel"> Name :</td>
                                <td class="admin-manVideoform-tableData">
                                    <input type="text" name="subject Name" class="admin-manVideoform-input">
                                </td>
                            </tr>

                        </tbody>
                    </table>
                    <div class="admin-manVideoform-form-group">
                        <button type="add new" class="admin-manVideoform-submitButton">Add Category</button>
                    </div>
                </form>
            </div>

        </div>

    </section>


</main>


<?php
include('layout/footer.php');
?>