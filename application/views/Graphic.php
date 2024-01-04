<link href="<?php echo base_url(); ?>/assets/css/mainpage.css" rel="stylesheet">
<style>
    .main_bg {
        background-color: aliceblue;
    }

    .job_bg {
        background-color: #fff;
    }

    #more {
        display: none;
    }

    .zoom:hover {
        transition: transform 1.2s;
        transform: scale(1.4);
        /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
    }

    .star {
        color: red;
    }

    .small {
        font-size: 10px;
        line-height: 18px;
    }

    .testbox {
        display: flex;
        justify-content: center;
        align-items: center;
        height: inherit;
        padding: 3px;
    }

    .formbg {
        width: 100%;
        padding: 20px;


    }

    input {
        width: calc(100% - 10px);
        padding: 5px;
        border: 1px solid #ccc;
        border-radius: 3px;
        vertical-align: middle;
    }

    input:hover,
    textarea:hover,
    select:hover {
        outline: none;
        border: 1px solid #095484;
        background: #e6eef7;
    }

    .title-block select,
    .title-block input {
        margin-bottom: 10px;
    }

    select {
        padding: 7px 0;
        border-radius: 3px;
        border: 1px solid #ccc;
        background: transparent;
    }

    select,
    table {
        width: 100%;
    }

    option {
        background: #fff;
    }

    .day-visited,
    .time-visited {
        position: relative;
    }

    input[type="date"]::-webkit-inner-spin-button {
        display: none;
    }

    input[type="time"]::-webkit-inner-spin-button {
        margin: 2px 22px 0 0;
    }

    .day-visited i,
    .time-visited i,
    input[type="date"]::-webkit-calendar-picker-indicator {
        position: absolute;
        top: 8px;
        font-size: 20px;
    }

    .day-visited i,
    .time-visited i {
        right: 5px;
        z-index: 1;
        color: #a9a9a9;
    }

    [type="date"]::-webkit-calendar-picker-indicator {
        right: 0;
        z-index: 2;
        opacity: 0;
    }

    .question-answer label {
        display: block;
        padding: 0 20px 10px 0;
    }

    .question-answer input {
        width: auto;
        margin-top: -2px;
    }

    th,
    td {
        width: 18%;
        padding: 15px 0;
        border-bottom: 1px solid #ccc;
        text-align: center;
        vertical-align: unset;
        line-height: 18px;
        font-weight: 400;
        word-break: break-all;
    }

    .first-col {
        width: 25%;
        text-align: left;
    }

    textarea {
        width: calc(100% - 6px);
    }

    .btn-block {
        margin-top: 20px;
        text-align: center;
    }

    button {
        width: 150px;
        padding: 10px;
        border: none;
        -webkit-border-radius: 5px;
        -moz-border-radius: 5px;
        border-radius: 5px;
        background-color: #095484;
        font-size: 16px;
        color: #fff;
        cursor: pointer;
    }

    button:hover {
        background-color: #0666a3;
    }

    @media (min-width: 568px) {
        .title-block {
            display: flex;
            justify-content: space-between;
        }

        .title-block select {
            width: 30%;
            margin-bottom: 0;
        }

        .title-block input {
            width: 31%;
            margin-bottom: 0;
        }

        th,
        td {
            word-break: keep-all;
        }
    }
</style>
<section class="top p-0 main_bg">
    <div class="hero-section ehite wf-section ">
        <div class="container job_bg">
            <div class="p_desk">
                <h1 class="pt-3 pl-3">Job Description</h1>
                <p style="margin-top:10px;">

                    Hello Dear Aspirant,
                    We are looking for some experienced as well as fresh talent of graphic designers, web developers,
                    business development managers, and social media managers in their particular field.
                </p>
                <h5>BUSINESS DEVELOPMENT MANAGER</h5>
                <p class="m-0">
                    Selected candidate’s day-to-day responsibilities include:<br>


                    <span id="dots"></span>
                <div id="more">

                    </p>
                    <p>
                        <span style="font-weight:700;">Experience -</span>
                        2+ years
                    </p>
                    <p>
                        <span style="font-weight:700;">No. of Position –
                        </span>5
                    </p>
                    <p>
                        <span style="font-weight:700;">Department -</span>
                        Design
                    </p>
                    <p>
                        <span style="font-weight:700;">Skills -</span>Adobe Creative Suite, CorelDraw, MS-Office, UI/UX
                        Design, Creative mind-set
                    </p>
                    <p>
                        <span style="font-weight:700;">Salary –</span>
                        As per market standard
                    </p>
                </div>
                <button onclick="myFunction()" class="zoom"
                    style="color:#f26522;font-size: 20px;background: none;border: none;" id="myBtn">Show more

                </button>
            </div>
        </div>
    </div>
    <div class="hero-section ehite wf-section ">
        <div class="testbox container job_bg">
            <form action="Job_form" method="post" class="formbg">
                <div>
                    <h4>Apply for this Job</h4>
                </div>
                <hr>
                <div class="container">

                    <div class="row " style="justify-content: space-around;">
                        <div class="col-md-5 mt-3">
                            <h6>Name<span class="star">*</span></h6>
                            <input class="name" type="text" name="name" required placeholder="First" />
                        </div>
                        <div class="col-md-5 mt-3">
                            <h6>Last<span class="star">*</span></h6>
                            <input class="name" type="text" name="name" requiredplaceholder="Last" />
                        </div>
                    </div>
                    <div class="row " style="justify-content: space-around;">
                        <div class="col-md-5 mt-3">
                            <h6>Email<span class="star">*</span></h6>
                            <input class="email" type="email" name="email" requiredplaceholder="email" />

                        </div>
                        <div class="col-md-5 mt-3">
                            <h6>Contact Number<span class="star">*</span></h6>
                            <input type="tel" name="number" required />
                        </div>
                    </div>
                    <div class="row " style="justify-content: space-around;">
                        <div class="col-md-5 mt-3">
                            <h6>Are you age 18 or older?<span class="star">*</span></h6>
                            <select name="age" required>
                                <option value="title" selected>Age</option>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>

                            </select>

                        </div>
                        <div class="col-md-5 mt-3">
                            <h6>Where are you currently based?<span class="star">*</span></h6>
                            <input type="text" name="location" required />
                        </div>
                    </div>
                    <div class="row " style="justify-content: space-around;">
                        <div class="col-md-11 mt-3">
                            <h6>Resume<span class="star">*</span></h6>
                            <input type="file" name="attachment" id="fileToUpload" required>

                        </div>

                    </div>


                    <div class="col-md-11 mt-3">
                        <div class="btn-block">
                            <button type="submit" value="submit">Submit</button>
                        </div>



                    </div>

                </div>









            </form>
        </div>
    </div>
    <div class="section-3 wf-section">
        <div>
            <div class="container ready_bg">
                <div class="row justify-content-between items-center">
                    <div class="col-md-7">
                        <h2 class="aside-title">
                            Join the ChargeSol
                            <span class="teal">Revolution</span>: Powering the future of Electric Mobility
                        </h2>
                        <p class="aside-p">
                            Gain a competitive advantage by joining the world’s largest
                            eRoaming network.
                        </p>
                        <a href="<?php echo base_url('Contact'); ?>" data-w-id="c17c272e-a5d2-ba46-c5b9-42170fb868df"
                            class="aside-btn button w-button">Get Started Today</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    function myFunction() {
        var dots = document.getElementById("dots");
        var moreText = document.getElementById("more");
        var btnText = document.getElementById("myBtn");

        if (dots.style.display === "none") {
            dots.style.display = "inline";
            btnText.innerHTML = "Read more";
            moreText.style.display = "none";
        } else {
            dots.style.display = "none";
            btnText.innerHTML = "Show less";
            moreText.style.display = "inline";
        }
    }
</script>