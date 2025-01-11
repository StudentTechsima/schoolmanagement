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
            <div class="admin-admitCardform-container">
                <h2 class="admin-admitCardform-text"><i class="fa fa-file"></i> MANAGE ADMIT CARD</h2>

                <form action="">
                    <table class="admin-admitCardform-table">
                        <tbody class="admin-admitCardform-tableBody">
                            <tr class="admin-admitCardform-tableRow">
                                <td class="admin-admitCardform-tableLabel">STUDENT REG. NO:</td>
                                <td class="admin-admitCardform-tableData">
                                    <input type="text" name="subject Name" class="admin-admitCardform-input">
                                </td>
                            </tr>

                        </tbody>
                    </table>
                    <div class="admin-admitCardform-form-group">
                        <button type="button" class="admin-admitCardform-submitButton">SEARCH</button>
                    </div>
                </form>
            </div>
        </div>

    </section>


</main>


<?php
include('layout/footer.php');
?>