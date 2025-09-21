<?php include('include/header.php'); ?>
<!--------------------------- banner section start ------------------------------------->
<div class="uk-inline uk-inner-banner">
    <img src="assets/img/vision.jpg" loading="lazy" alt="">
    <div class="uk-overlay uk-overlay-primary uk-position-cover uk-banner-overlay uk-flex uk-flex-column uk-flex-center">
        <div class=" uk-width-1-1 uk-text-center">
            <h3 class="uk-margin-remove">
                <a href="index.php">HOME</a> /
                Career
            </h3>
            <h1 class="uk-margin-small-top">Career</h1>
        </div>
    </div>
</div>
<!--------------------------- banner section end ------------------------------------->
<!--------------------------- table section start ------------------------------------->
<section class="uk-section">
    <div class="uk-container uk-container-large">
        <table class="uk-table uk-table-striped uk-table-responsive career-table border-rounded" style="overflow:hidden;">
            <thead class="career-head">
                <tr>
                    <th>Job Title</th>
                    <th>description</th>
                    <th>Type</th>
                    <th>Apply Now</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="bold-font">Geologist</td>
                    <td>Are you detail-oriented and experienced in your field? We’re seeking skilled and energetic professionals to join our team. If you meet the requirements, apply now for exciting career opportunities in the following positions!</td>
                    <td class="bold-font">full time</td>
                    <td>
                        <a href="#career-form" class="uk-know-btn" uk-toggle> Apply Now <span uk-icon="icon:  triangle-right"></span></a>
                    </td>
                </tr>
                <tr>
                    <td class="bold-font">Geologist</td>
                    <td>Are you detail-oriented and experienced in your field? We’re seeking skilled and energetic professionals to join our team. If you meet the requirements, apply now for exciting career opportunities in the following positions!</td>
                    <td class="bold-font">full time</td>
                    <td>
                        <a href="#career-form" class="uk-know-btn" uk-toggle> Apply Now <span uk-icon="icon:  triangle-right"></span></a>
                    </td>
                </tr>
                <tr>
                    <td class="bold-font">Geologist</td>
                    <td>Are you detail-oriented and experienced in your field? We’re seeking skilled and energetic professionals to join our team. If you meet the requirements, apply now for exciting career opportunities in the following positions!</td>
                    <td class="bold-font">full time</td>
                    <td>
                        <a href="#career-form" class="uk-know-btn" uk-toggle> Apply Now <span uk-icon="icon:  triangle-right"></span></a>
                    </td>
                </tr>

            </tbody>
        </table>
    </div>
</section>
<!-- This is the modal -->
<div id="career-form" uk-modal>
    <div class="uk-modal-dialog uk-modal-body uk-padding-remove">
        <button class="uk-modal-close-outside" type="button" uk-close></button>
        <div class="dialog-header">
            <h3 class="uk-margin-remove">KPL Hiring/ Application Form</h3>
        </div>
        <div class="uk-padding-small">
            <p class="uk-margin-remove">We are Kantipur Pharmaceutical Lab Limited; a diverse academic background team united to care and cure animal’s health. </p>
            <hr>
            <small class="uk-text-danger">Fields marked with * are required.</small>
            <form action="">
                <div class="uk-child-width-1-2@m uk-grid uk-margin-top">
                    <div class="uk-margin">
                        <label for="name">Your Full Name<span><small class="uk-text-danger">*</small></span></label>
                        <input class="uk-input" type="text" placeholder="" aria-label="Input" id="name">
                    </div>
                    <div class="uk-margin">
                        <label for="number">Your Phone Number<span><small class="uk-text-danger">*</small></span></label>
                        <input class="uk-input" type="email" placeholder="" aria-label="Input" id="email">
                    </div>
                    <div class="uk-margin">
                        <label for="email">Your Email<span><small class="uk-text-danger">*</small></span></label>
                        <input class="uk-input" type="text" placeholder="" aria-label="Input" id="name">
                    </div>
                    <div class="uk-margin">
                        <label for="year">Experience in Year<span><small class="uk-text-danger">*</small></span></label>
                        <input class="uk-input" type="text" placeholder="" aria-label="Input" id="year">
                    </div>
                    <div class="uk-margin">
                        <label for="ctc">Current CTC<span><small class="uk-text-danger">*</small></span></label>
                        <input class="uk-input" type="text" placeholder="" aria-label="Input" id="ctc">
                    </div>
                    <div class="uk-margin">
                        <label for="current">Current Organization<span><small class="uk-text-danger">*</small></span></label>
                        <input class="uk-input" type="text" placeholder="" aria-label="Input" id="current">
                    </div>
                </div>
            </form>
        </div>

    </div>
</div>
<!--------------------------- table section end ------------------------------------->
<?php include('include/footer.php'); ?>