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
                <img src="/schoolmanagement/admin/images/adminLogo.png" alt="" id="admin-profileImage">
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
                    <div class="student-registraiton">
                        <div class="stu-registn-head">
                            <h3>STUDENT REGISTRATION</h3>
                            <h3>STUDENT REGISTRATION (Wallet Balance : <span>₹7800</span>)</h3>
                        </div>
                        <!------ 1. personal-details form ---------->
                        <div class="personal-details">
                            <p> 1. PERSONAL DETAILS</p>
                        </div>
                        <div class="form-group">
                            <div class="form-field">
                                <label class="student-form-lebel">Admission Year <span>*</span></label>
                                <select>
                                    <option value="">Select year</option>
                                    <option value="2010">2010-2011</option>
                                    <option value="2011">2011-2012</option>
                                    <option value="2012">2012-2013</option>

                                </select>
                            </div>
                            <div class="form-field">
                                <label class="student-form-lebel">Student Name <span>*</span></label>
                                <input type="text">
                            </div>
                            <div class="form-field">
                                <label class="student-form-lebel">Father's Name <span>*</span></label>
                                <input type="text">
                            </div>
                            <div class="form-field">
                                <label class="student-form-lebel">Mother's Name</label>
                                <input type="text">
                            </div>
                            <div class="form-field">
                                <label class="student-form-lebel">Gender <span>*</span></label>
                                <select>
                                    <option value="">Select</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                    <option value="other">Other</option>

                                </select>
                            </div>
                            <div class="form-field">
                                <label class="student-form-lebel">Date Of Birth <span>*</span></label>
                                <input type="date">
                            </div>
                            <div class="form-field">
                                <label class="student-form-lebel">Category</label>
                                <select>
                                    <option value="">Select</option>
                                    <option value="sc">Sc</option>
                                    <option value="st">ST</option>
                                    <option value="gen">GEN</option>
                                    <option value="obs">OBS</option>

                                </select>
                            </div>
                            <div class="form-field">
                                <label class="student-form-lebel">Mobile No<span>*</span></label>
                                <input type="number">
                            </div>
                            <div class="form-field">
                                <label class="student-form-lebel">Parent's Contact</label>
                                <input type="number">
                            </div>
                            <div class="form-field">
                                <label class="student-form-lebel">Whatsapp Contact</label>
                                <input type="number">
                            </div>
                            <div class="form-field">
                                <label class="student-form-lebel">Select Your Religion</label>
                                <select>
                                    <option value="">Select</option>
                                    <option value="hindu">Hinduism</option>
                                    <option value="islam">Islam</option>
                                    <option value="Christian">Christian</option>
                                    <option value="other">other</option>

                                </select>
                            </div>
                            <div class="form-field">
                                <label class="student-form-lebel">Marital Status</label>
                                <select>
                                    <option value="">Select</option>
                                    <option value="Married">Married</option>
                                    <option value="Unmarried">Unmarried</option>
                                </select>
                            </div>
                            <div class="form-field">
                                <label class="student-form-lebel">Choose Your Idntity Type</label>
                                <select>
                                    <option value="">Select</option>
                                    <option value="adharcard">Adhar Card</option>
                                    <option value="voterid">Voter ID</option>
                                    <option value="other">Other</option>

                                </select>
                            </div>
                            <div class="form-field">
                                <label class="student-form-lebel">Id Number<span>*</span></label>
                                <input type="text">
                            </div>
                            <div class="form-field">
                                <label class="student-form-lebel">Last General Qualification</label>
                                <select>
                                    <option value="">Select</option>
                                    <option value="8">8th</option>
                                    <option value="10">10th</option>
                                    <option value="12">12th</option>
                                    <option value="Graduation">Graduation</option>
                                    <option value="Post Graduation">Post Graduation</option>
                                    <option value="others">Others</option>
                                </select>
                            </div>

                            <div class="form-field">
                                <label class="student-form-lebel">State<span>*</span></label>
                                <select>
                                    <option value="">Select</option>
                                    <option value="AP">Andhra Pradesh</option>
                                    <option value="AP">Arunanchal Pradesh</option>
                                    <option value="assam">Assam</option>
                                    <option value="bihar">Bihar</option>
                                    <option value="Chandigarh">Chandigarh (UT)</option>
                                    <option value="others">Chhattisgarh</option>
                                    <option value="others">Uttar Pradesh</option>

                                </select>
                            </div>
                            <div class="form-field">
                                <label class="student-form-lebel">District</label>
                                <select>
                                    <option value="">--Select--</option>
                                </select>
                            </div>
                            <div class="form-field">
                                <label class="student-form-lebel">Address</label>
                                <textarea name="text" id=""></textarea>
                            </div>
                            <div class="form-field">
                                <label class="student-form-lebel">Pincode<span>*</span></label>
                                <input type="text">
                            </div>
                            <div class="form-field">
                                <label class="student-form-lebel">Email Id<span>*</span></label>
                                <input type="text">
                            </div>
                            <div class="form-field">
                                <label class="student-form-lebel" for="image">Upload Image:</label>
                                <input type="file" id="image" name="image" accept="image/*" required>
                                <p class="image-imp">photo must be in .jpg/.jpeg/.bmp And Siz less than 500kb</p>
                            </div>
                            <div class="form-field">
                                <label class="student-form-lebel" for="image">Last Education Doc</label>
                                <input type="file" id="image" name="image" accept="image/*" required>
                                <p class="image-imp">photo must be in .jpg/.jpeg/.bmp And Siz less than 500kb</p>
                            </div>
                        </div>
                        <!------- 2. COURSE DETAILS ------->
                        <div class="personal-details">
                            <p> 2. COURSE DETAILS</p>
                        </div>

                        <div class="form-group">
                            <div class="form-field">
                                <label class="student-form-lebel">Course Category<span>*</span></label>
                                <select>
                                    <option value="">--Course Category--</option>
                                    <option value="AP">Basic Course</option>
                                    <option value="AP">Diploma Course</option>
                                    <option value="assam">language Course</option>
                                    <option value="bihar">Professional Course</option>
                                    <option value="Chandigarh">Typing Course</option>
                                    <option value="others">UPSC UG</option>
                                    <option value="others">CCC</option>
                                    <option value="others">PK Testing Program</option>
                                    <option value="others">CCA</option>
                                    <option value="others">ESDM</option>
                                    <option value="others">Certificate Cousres</option>
                                    <option value="others">tally2</option>
                                    <option value="others"></option>

                                </select>
                            </div>
                            <div class="form-field">
                                <label class="student-form-lebel">Course<span>*</span></label>
                                <select>
                                    <option value="">--Course--</option>
                                    <option value="AP">Andhra Pradesh</option>
                                    <option value="AP">Arunanchal Pradesh</option>
                                    <option value="assam">Assam</option>
                                    <option value="bihar">Bihar</option>
                                    <option value="Chandigarh">Chandigarh (UT)</option>
                                    <option value="others">Chhattisgarh</option>
                                    <option value="others">Uttar Pradesh</option>

                                </select>
                            </div>
                            <div class="form-field">
                                <label class="student-form-lebel">NET FEE <span>*</span></label>
                                <input type="number">
                            </div>
                            <div class="form-field">
                                <label class="student-form-lebel">DISCOUNT </label>
                                <input type="text">
                            </div>
                            <div class="form-field">
                                <label class="student-form-lebel">Other Charge </label>
                                <input type="text">
                            </div>
                            <div class="form-field">
                                <label class="student-form-lebel">Date of Admission</label>
                                <input type="date">
                            </div>

                            <div class="form-field">
                                <label class="student-form-lebel">Enquiry Source<span>*</span></label>
                                <select>
                                    <option value="">--Select--</option>
                                    <option value="AP">Banner</option>
                                    <option value="AP">Liflet</option>
                                    <option value="assam">Poster</option>
                                    <option value="bihar">New Paper</option>
                                    <option value="Chandigarh">SMS</option>
                                    <option value="others">Counselling Centre</option>
                                    <option value="others">Others</option>

                                </select>
                            </div>

                        </div>
                        <div class="form-group">
                            <div class="form-field">
                                <button type="submit" class="green">Submit</button>
                            </div>
                            <div class="form-field">
                                <button class="red">Exit </button>
                            </div>
                        </div>
                        <p class="student-form-Note">* denotes required field denotes Form No. already Exist or less than 2 digits denotes OK</p>
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