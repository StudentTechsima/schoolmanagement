<?php
include('layout/aheader.php');
?>

<!-- sidebar section start -->
<?php
include('layout/aaside.php');
?>

<!-- sidebar section end -->

<!-- main section start -->
<div class="admin-dashboard">
    <!-- header section start -->
    <div class="admin-dashboard-header">
        <div class="toggle-btn"><i class="fa fa-bars"></i></div>
        <div class="admin-headerRight-header-left">
            <div class="admin-headerRight-wallet">
                <h4>Branch Wallet<span class="admin-headerRight-walletMoney">&#8377;7800</span></h4>
            </div>
            <div class="admin-headerRight-logo">
                <img src="block-bg-5.jpg" alt="" id="admin-profileImage">
                <div id="admin-profileImage-popup" class="admin-headerRight-profileImage-popup">
                    <div class="admin-headerRight-popupContent">
                        <h2 class="admin-headerRight-popup-contentText">Webadmin</h2>
                        <h3 class="admin-headerRight-popup-contentText">Student Study Point & IT Education
                        </h3>

                        <div class="admin-headerRight-popupButton">
                            <button class="admin-headerRight-profileButton">
                                <a href="" class="admin-headerRight-profileButton-text">Profile</a>
                            </button>
                            <button class="admin-headerRight-profileButton">
                                <a href="" class="admin-headerRight-profileButton-text">Sign Out</a>
                            </button>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- header section end -->
    <!-- dashboard Data -->
    <div class="admin-dashboard-main">
        <main class="admin-main-section">
            <section class="admin-container-panel" id="admin-panel">
                <div class="admin-containerPanel-header">
                    <h3 class="admin-containerPanel-text">Control Panel</h3>
                    <h2 class="admin-containerPanel-controlText"><a href="" class="controlText-link"><i
                                class="fa-solid fa-gauge"></i>
                            Home ›</a><span class="admin-containerPanel-spanText">Dashboard</span></h2>
                </div>

                <div class="admin-containerPanel-content">

                    <!-- copy and paste section start -->
                    <div class="admin-wallet-container">
                        <h2 class="admin-wallet-text"><i class="fa fa-file"></i> ADD BRANCH PAYMENT</h2>

                        <form action="">
                            <table class="admin-walletTable">
                                <tbody class="admin-walletTablebody">
                                    <tr class="admin-walletTablerow">
                                        <td class="admin-walletTablelabel">Branch* :</td>
                                        <td class="admin-walletTabledata">
                                            <select name="" id="" class="admin-walletInput">
                                                <option value="">--Select Branch--</option>
                                                <option value="1901">Kalki Computers</option>
                                                <option value="Demo">CT</option>
                                                <option value="0001">Radha Krishna Computer</option>
                                                <option value="8401">Maa Sharde Computer Academy</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr class="admin-walletTablerow">
                                        <td class="admin-walletTablelabel">Payment Mode* :</td>
                                        <td class="admin-walletTabledata">
                                            <select name="" id="" class="admin-walletInput">
                                                <option value="">--Select Payment Mode--</option>
                                                <option value="cash">Cash</option>
                                                <option value="credit_card">Credit Card</option>
                                                <option value="bank_transfer">Bank Transfer</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr class="admin-walletTablerow">
                                        <td class="admin-walletTablelabel">Amt* :</td>
                                        <td class="admin-walletTabledata">
                                            <input type="text" name="amount" class="admin-walletInput">
                                        </td>
                                    </tr>
                                    <tr class="admin-walletTablerow">
                                        <td class="admin-walletTablelabel">Date* :</td>
                                        <td class="admin-walletTabledata">
                                            <input type="date" name="date" class="admin-walletInput">
                                        </td>
                                    </tr>
                                    <tr class="admin-walletTablerow">
                                        <td class="admin-walletTablelabel">Details :</td>
                                        <td class="admin-walletTabledata">
                                            <textarea class="admin-walletInput" rows="3" name="details"></textarea>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="admin-walletForm-group">
                                <button type="submit" class="admin-walletSubmitbutton">SUBMIT</button>
                            </div>
                        </form>
                    </div>
                    <!-- copy and paste section start -->

                </div>

            </section>


        </main>
    </div>
    <!-- main section end -->


    <?php
    include('layout/afooter.php');
    ?>