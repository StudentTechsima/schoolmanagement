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
            <div class="admin-manBannerform-container">
                <h2 class="admin-manBannerform-text"><i class="fa fa-file"></i> MANAGE NEWS & NOTICE</h2>

                <!-- <form action="">
                    <table class="admin-manBannerform-Table">
                        <tbody class="admin-manBannerform-Tablebody">
                            <tr class="admin-manBannerform-Tablerow">
                                <td class="admin-manBannerform-Tablelebal">News Title :</td>
                                <td class="admin-manBannerform-Tabledata">
                                    <input type="url" name="manBannerform- URL" class="admin-manBannerform-Input">
                                </td>
                            </tr>
                            <tr class="admin-manBannerform-Tablerow">
                                <td class="admin-manBannerform-Tablelebal">Description :</td>
                                <td class="admin-manBannerform-Tabledata">
                                    <textarea name="" id="mytextarea" class="admin-manBannerform-Input"></textarea>
                                </td>
                            </tr>
                            <tr class="admin-manBannerform-Tablerow">
                                <td class="admin-manBannerform-Tablelebal">News Photo :</td>
                                <td class="admin-manBannerform-Tabledata">
                                    <input type="file" class="admin-manBannerform-Input">
                                </td>
                            </tr>
                        </tbody>


                    </table>
                    <div class="admin-manBannerform-Form-group">
                        <button type="submit" class="admin-manBannerform-Upadtebutton">ADD PAGE</button>
                    </div>

                </form> -->


                <h1 style="text-align:center; font-size:100px; margin:100px auto;">404</h1>


            </div>


        </div>
        <script src="/adminZone/admin/tinymce/js/tinymce/tinymce.min.js"></script>
        <script>
            tinymce.init({
                selector: '#mytextarea'
            });
        </script>

    </section>


</main>


<?php
include('layout/footer.php');
?>