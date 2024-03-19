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


                    Hello Prospective Candidate,

                    We are currently seeking individuals with both seasoned expertise and fresh perspectives in the
                    realm of accounting. We are on the lookout for skilled professionals in various roles, including
                    accountants, financial analysts, and auditors. If you possess a strong background in accounting and
                    are eager to contribute your talents to our team, we welcome your application.
                </p>
                <h5>Accountant</h5>
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
                        <span style="font-weight:700;">No. of Position(s) –
                        </span>3
                    </p>
                    <p>
                        <span style="font-weight:700;">Department -</span>
                        Accounts
                    </p>
                    <p>
                        <span style="font-weight:700;">Skills -</span> Analytical, Attention to Detail, Organizational
                    </p>
                    <p>
                        <span style="font-weight:700;">Salary –</span>
                        As per market standard
                    </p>
                </div>
                <button onclick="myFunction()" class="mt-3"
                    style="color:#fff;font-size: 16px;" id="myBtn">Show more

                </button>
            </div>
        </div>
    </div>
    <div class="hero-section ehite wf-section ">
        <div class="testbox container job_bg">
            <form action="Job_form" method="post" class="formbg"enctype="multipart/form-data">
                <div>
                    <h4>Apply for this Job</h4>
                </div>
                <hr>
                <div class="container">

                    <div class="row mt-4" style="justify-content: space-around;">
                        <div class="col-md-5 mt-3">
                            <h6>First Name<span class="star">*</span></h6>
                            <input class="name" type="text" name="name" required placeholder="First name" />
                        </div>
                        <div class="col-md-5 mt-3">
                            <h6>Last Name<span class="star">*</span></h6>
                            <input class="name" type="text" name="name" required placeholder="Last name" />
                        </div>
                    </div>
                    <div class="row " style="justify-content: space-around;">
                        <div class="col-md-5 mt-3">
                            <h6>Email<span class="star">*</span></h6>
                            <input class="email" type="email" name="email" required placeholder="Email" />

                        </div>
                        <div class="col-md-5 mt-3">
                            <h6>Contact Number<span class="star">*</span></h6>
                            <input type="tel" name="number" required placeholder="Phone number"/>
                        </div>
                    </div>
                    <div class="row " style="justify-content: space-around;">
                        <div class="col-md-5 mt-3">
                            <h6>Are you age 18 or older?<span class="star">*</span></h6>
                            <select name="age" required style="color: #000;">
                                <option value="title" selected style="color: #000;"> &nbsp;&nbsp;Age</option>
                                <option value="Yes"> Yes</option>
                                <option value="No"> No</option>

                            </select>

                        </div>
                        <div class="col-md-5 mt-3">
                            <h6>Where are you currently based?<span class="star">*</span></h6>
                            <input type="text" name="location" required placeholder="City"/>
                        </div>
                    </div>
                    <div class="row " style="justify-content: space-around;">
                        <div class="col-md-11 mt-3">
                            <h6>Resume<span class="star">*</span></h6>
                            <input type="file" name="img"  required>

                        </div>

                    </div>


                    <div class="col-md-11 mt-3">
                        <div class="btn-block">
                            <button type="submit" value="submit">Submit</button>
                        </div>
                    </div>
<br><br>
                </div>

            </form>
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