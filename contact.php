<?php require('contact_header.php') ?>
   
    <!-- Banner area -->
    <section class="banner_area" data-stellar-background-ratio="0.5">
        <h2>Contact Us</h2>
        <ol class="breadcrumb">
            <li><a href="index.php">Home</a></li>
            <li><a href="#" class="active">Contact Us</a></li>
        </ol>
    </section>
    <!-- End Banner area -->

    <!-- All contact Info -->
    <section class="all_contact_info">
        <div class="container">
            <div class="row contact_row">
                    <div class="status">
                        <?php require('contact_form.php') ?>
                    </div>
                <div class="col-sm-6 contact_info">
                    <h2>Contact Info</h2>
                    <div class="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1771.017957486202!2d7.001873802577368!3d4.8042207718700265!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1069cf1d1b886da9%3A0x48ad10fbe91bc1a3!2sNowerox%20Nigeria%20Limited!5e0!3m2!1sen!2sng!4v1570120031693!5m2!1sen!2sng" width="100%" height="450" frameborder="0" style="border:0; border-radius: 30px" allowfullscreen=""></iframe>
                    </div>
                    <div class="location">
                       <h2>Other Branches</h2>
                        <div class="address" style="margin-top: 30px;">
                            <a href="#"><span style="font-weight: bold">LAGOS BRANCH:</span> 15, Covenant Drive, Awoyaya, Ibeju-Lekki, Lagos State, Nigeria</a>
                            <a href="#"><span style="font-weight: bold">DELTA BRANCH:</span> 5, Ezewu Street, Ughelli, Delta State, Nigeria</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 contact_info send_message">
                    <h2>Send Us a Message</h2>
                    <form class="form-inline contact_box" method="post">
                        <input type="text" name="name" class="form-control input_box" placeholder="Full Name *" required>
                        <input type="number" name="phone" class="form-control input_box" placeholder="Mobile Phone No *" required>
                        <input type="text" name="email" class="form-control input_box" placeholder="Email Address *" required>
                        <input type="text" name="subject" class="form-control input_box" placeholder="Subject">
                        <input type="text" name="website" class="form-control input_box" placeholder="Your Website">
                        <textarea name="message" class="form-control input_box" placeholder="Message" required></textarea>
                        <div class="g-recaptcha" data-sitekey="6Lel7roUAAAAAKH8ywQe0NBTQDzyFo9ugaqQ4Ycf"></div>
                        <button type="submit" name="submit" class="btn btn-default">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- End All contact Info -->
    
 <?php require('footer.php') ?>
