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
            <div class="admin-site-container">
                <h2 class="admin-site-text"><i class="fa fa-file"></i> SOFTWARE <span class="admin-span">/</span> WEBSITE SETTING</h2>

                <form action="">
                    <table class="admin-siteTable">
                        <tbody class="admin-siteTablebody">
                            <tr class="admin-siteTablerow">
                                <td class="admin-siteTablelebal">SITE NAME :</td>
                                <td class="admin-siteTabledata">
                                    <input type="text" name="SITE NAME" class="admin-siteInput">
                                </td>
                            </tr>
                            <tr class="admin-siteTablerow">
                                <td class="admin-siteTablelebal">SITE URL :</td>
                                <td class="admin-siteTabledata">
                                    <input type="url" name="SITE URL" class="admin-siteInput">
                                </td>
                            </tr>
                            <tr class="admin-siteTablerow">
                                <td class="admin-siteTablelebal">ADMIN TITLE :</td>
                                <td class="admin-siteTabledata">
                                    <input type="text" name="ADMIN TITLE" class="admin-siteInput">
                                </td>
                            </tr>
                            <tr class="admin-siteTablerow">
                                <td class="admin-siteTablelebal">EMAIL ID :</td>
                                <td class="admin-siteTabledata">
                                    <input type="email" name="EMAIL ID" class="admin-siteInput">
                                </td>
                            </tr>
                            <tr class="admin-siteTablerow">
                                <td class="admin-siteTablelebal">PHONE NUMBER :</td>
                                <td class="admin-siteTabledata">
                                    <input type="number" name="PHONE NUMBER" class="admin-siteInput">
                                </td>
                            </tr>
                            <tr class="admin-siteTablerow">
                                <td class="admin-siteTablelebal">SERVICE TEX(%) :</td>
                                <td class="admin-siteTabledata">
                                    <input type="number" name="SERVICE TEXT" class="admin-siteInput">
                                </td>
                            </tr>
                            <tr class="admin-siteTablerow">
                                <td class="admin-siteTablelebal">MOBILE NUMBER :</td>
                                <td class="admin-siteTabledata">
                                    <input type="number" name="MOBILE NUMBER" class="admin-siteInput">
                                </td>
                            </tr>
                            <tr class="admin-siteTablerow">
                                <td class="admin-siteTablelebal">ADDRESS :</td>
                                <td class="admin-siteTabledata">
                                    <textarea class="admin-siteInput" rows="3" TYPE="text" name="ADDRESS"></textarea>
                                </td>
                            </tr>



                        </tbody>


                    </table>
                    <div class="admin-siteForm-group">
                        <button type="submit" class="admin-siteUpadtebutton">UPADATE SITE SETTINGS</button>
                    </div>

                </form>


            </div>


        </div>

    </section>


</main>


<?php
include('layout/footer.php');
?>