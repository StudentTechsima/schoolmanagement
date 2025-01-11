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
            <div class="admin-courseForm-container">
                <h2 class="admin-courseForm-text"><i class="fa fa-file"></i> MANAGE COURSES</h2>

                <form action="">
                    <table class="admin-courseForm-Table">
                        <tbody class="admin-courseForm-Tablebody">
                            <tr class="admin-courseForm-Tablerow">
                                <td class="admin-courseForm-Tablelebal">Program Name:</td>
                                <td class="admin-courseForm-Tabledata">
                                    <select name="" id="" class="admin-courseForm-Input">
                                        <option value="">Top</option>
                                        <option value="">Basic Courses</option>
                                        <option value="">Diploma Courses</option>
                                        <option value="">Language Courses</option>
                                        <option value="">Typing Courses</option>
                                    </select>
                                </td>
                            </tr>
                            <tr class="admin-courseForm-Tablerow">
                                <td class="admin-courseForm-Tablelebal">Course Code:</td>
                                <td class="admin-courseForm-Tabledata">
                                    <input type="url" name="courseForm- URL" class="admin-courseForm-Input">
                                </td>
                            </tr>
                            <tr class="admin-courseForm-Tablerow">
                                <td class="admin-courseForm-Tablelebal">Course Name:</td>
                                <td class="admin-courseForm-Tabledata">
                                    <input type="url" name="courseForm- URL" class="admin-courseForm-Input">
                                </td>
                            </tr>
                            <tr class="admin-courseForm-Tablerow">
                                <td class="admin-courseForm-Tablelebal">Course Fees:</td>
                                <td class="admin-courseForm-Tabledata">
                                    <input type="url" name="courseForm- URL" class="admin-courseForm-Input">
                                    <span style="color: #bbb; font-weight:normal;">Rs./</span>
                                </td>
                            </tr>
                            <tr class="admin-courseForm-Tablerow">
                                <td class="admin-courseForm-Tablelebal">Duration:</td>
                                <td class="admin-courseForm-Tabledata">
                                    <input type="url" name="courseForm- URL" class="admin-courseForm-Input">
                                    <span style="color: #bbb; font-weight:normal;">In Month</span>
                                </td>
                            </tr>
                            <tr class="admin-courseForm-Tablerow">
                                <td class="admin-courseForm-Tablelebal">Description :</td>
                                <td class="admin-courseForm-Tabledata">
                                    <textarea name="" id="mytextarea" class="admin-courseForm-Input"></textarea>
                                </td>
                            </tr>
                            <tr class="admin-courseForm-Tablerow">
                                <td class="admin-courseForm-Tablelebal">Addmision fee per student:</td>
                                <td class="admin-courseForm-Tabledata">
                                    <input type="url" name="courseForm- URL" class="admin-courseForm-Input">
                                </td>
                            </tr>
                            <tr class="admin-courseForm-Tablerow">
                                <td class="admin-courseForm-Tablelebal">Program Photo :</td>
                                <td class="admin-courseForm-Tabledata">
                                    <input type="file" class="admin-courseForm-Input">
                                </td>
                            </tr>
                        </tbody>


                    </table>
                    <div class="admin-courseForm-Form-group">
                        <button type="submit" class="admin-courseForm-Upadtebutton">ADD PAGE</button>
                    </div>

                </form>


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