<?php
session_start();
ob_start();

if(isset($_SESSION['s_msg']))
{
   $tmsg= $_SESSION['s_msg'];
   unset($_SESSION['s_msg']);
}


// if(count($_POST)>0)
// {
//    $_SESSION['post'] = $_POST;
//    $_SESSION['files'] = $_FILES;
//    header("location:pdf.php");
// }

?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Woodside Dental Practice">
    <meta name="keywords" content="Woodside Dental Practice, Dental">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Woodside Dental Practice – Secure dental messaging</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&amp;display=swap"
    rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/flaticon.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">

    <!-- Image uploading -->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" crossorigin="anonymous">
    <link href="file/css/fileinput.css" media="all" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" crossorigin="anonymous">
    <link href="file/themes/explorer-fas/theme.css" media="all" rel="stylesheet" type="text/css"/>



</head>
<style>
    #drop-zone {
  width: 100%;
  min-height: 150px;
  border: 3px dashed rgba(0, 0, 0, .3);
  border-radius: 5px;
  font-family: Arial;
  text-align: center;
  position: relative;
  font-size: 20px;
  color: #7E7E7E;
}
#drop-zone input {
  position: absolute;
  cursor: pointer;
  left: 0px;
  top: 0px;
  opacity: 0;
}
/*Important*/

#drop-zone.mouse-over {
  border: 3px dashed rgba(0, 0, 0, .3);
  color: #7E7E7E;
}
/*If you dont want the button*/

#clickHere {
  display: inline-block;
  cursor: pointer;
  color: white;
  font-size: 17px;
  width: 150px;
  border-radius: 4px;
  background-color: #4679BD;
  padding: 10px;
}
#clickHere:hover {
  background-color: #376199;
}
#filename {
  margin-top: 10px;
  margin-bottom: 10px;
  font-size: 14px;
  line-height: 1.5em;
}
.file-preview {
  background: #ccc;
  border: 5px solid #fff;
  box-shadow: 0 0 4px rgba(0, 0, 0, 0.5);
  display: inline-block;
  width: 60px;
  height: 60px;
  text-align: center;
  font-size: 14px;
  margin-top: 5px;
}
.closeBtn:hover {
  color: red;
  display:inline-block;
}
}

</style>

<body>
    <!-- Page Preloder -->
    <!-- <div id="preloder">
        <div class="loader"></div>
    </div> -->

    <!-- Offcanvas Menu Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
        <div class="offcanvas__logo">
            <a href="index.php"><img src="img/logo.png" alt=""></a>
        </div>
        <div id="mobile-menu-wrap"></div>
        <div class="offcanvas__btn">
            <a href="#" class="primary-btn">Appointments</a>
        </div>
        <ul class="offcanvas__widget">
            <li><i class="fa fa-phone"></i>  020 8947 5520</li>
            <li><i class="fa fa-map-marker"></i> 49 Woodside, Wimbledon, London SW19</li>
            <li><i class="fa fa-clock-o"></i> Mon to Sat 9:00am to 18:00pm</li>
        </ul>
        <div class="offcanvas__social">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-instagram"></i></a>
            <a href="#"><i class="fa fa-dribbble"></i></a>
        </div>
    </div>
    <!-- Offcanvas Menu End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <ul class="header__top__left">
                            <li><i class="fa fa-phone"></i> 020 8947 5520</li>
                            <li><i class="fa fa-map-marker"></i> 49 Woodside, Wimbledon, London SW19</li>
                            <li><i class="fa fa-clock-o"></i> Mon to Sat 9:00am to 18:00pm</li>
                        </ul>
                    </div>
                    <div class="col-lg-4">
                        <div class="header__top__right">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-dribbble"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="header__logo">
                        <a href="index.php"><img src="img/logo.png" alt="logo" height="50px"></a>
                    </div>
                </div>
                <div class="col-lg-10">
                    <div class="header__menu__option">
                        <nav class="header__menu">
                            <ul>
                                <li class="active"><a href="index.php">Home</a></li>
                                <li><a href="index.php">About</a></li>
                                <li><a href="index.php">Services</a></li>
                                <!-- <li><a href="index.php">Pages</a>
                                    <ul class="dropdown">
                                        <li><a href="index.php">Pricing</a></li>
                                        <li><a href="index.php">Doctor</a></li>
                                        <li><a href="index.php">Blog Details</a></li>
                                    </ul>
                                </li> -->
                                <li><a href="index.php">News</a></li>
                                <li><a href="index.php">Contact</a></li>
                            </ul>
                        </nav>
                        <div class="header__btn">
                            <a href="#" class="primary-btn">Appointment</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="canvas__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    <!-- Header Section End -->

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-option spad set-bg" data-setbg="img/breadcrumb-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Referral Form</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Contact Section Begin -->
    <section class="contact spad">
        <div class="container">

            <div class="contact__content">
                        <div class="contact__form">
                          <div class="col-sm-12 main-box p-0">
                            <?php if(isset($tmsg) && !empty($tmsg) || isset($fmsg) && !empty($fmsg)){ ?>
                            <div class="alert  <?php if(isset($tmsg)){ echo "alert-success background-success"; }else{echo "alert-danger background-danger"; } ?>">

                            <button type="button" class="close m-0" data-dismiss="alert" aria-label="Close">
                                      <i class="icofont icofont-close-line-circled text-white"></i>
                            </button>
                                      <strong><?php if(isset($tmsg)){echo $tmsg; }else{echo $fmsg; } ?></strong>
                              </div>
                            <?php } ?>
                          </div>

                            <form  method="POST" enctype="multipart/form-data" action="pdf.php" id="main">
                            <h3 class="mb-4">Patient Details</h3>
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="main-box">
                                            <h5 class="mb-3">Patient First Name*</h5>
                                            <input type="text" name="patient_first_name" placeholder="Patient First Name">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="main-box">
                                            <h5 class="mb-3">Patient Surname*</h5>
                                            <input type="text" name="patient_surname_name" placeholder="Patient Surname">
                                        </div>
                                    </div>
                                </div>

                                <!-- Address -->
                                <div class="row">
                                    <div class="col-lg-12 col-md-12">
                                            <h5 class="mb-3">Address*</h5>
                                            <div class="main-box">
                                                <label>Street Address</label>
                                                <input type="text" name="patient_location" placeholder="Enter a location">
                                            </div>
                                            <div class="main-box">
                                                <label>Address Line 2</label>
                                                <input type="text" name="patient_address" placeholder="Address Line 2">
                                            </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                            <div class="main-box">
                                                <label>City</label>
                                                <input type="text" name="patient_city" placeholder="Enter city">
                                            </div>
                                            <div class="main-box">
                                                <label>Post Code</label>
                                                <input type="text" name="patient_post_code" placeholder="Enter post code">
                                            </div>

                                            <h5 class="mb-3">Patient Date of Birth*</h5>
                                            <div class="dob-box main-box">
                                                <select class="dob" name="patient_date" id="patient_date" data-error="#errNm2">
                                                    <option value = "">Date</option>
                                                    <?php for($i=1;$i<=31;$i++) {
                                                      $dateOfMonth = $i <= 9 ? "0".$i : $i;
                                                    ?>
                                                        <option value="<?php echo $dateOfMonth; ?>"><?php echo $dateOfMonth; ?></option>
                                                    <?php } ?>
                                                </select>

                                                <select class="dob" name="patient_month" id="patient_month" data-error="#errNm3">
                                                    <option value="">Month</option>
                                                    <?php
                                                      $months = array("January", "February", "March","April","May","June","July","August","September","October","November", "December");
                                                      foreach ($months as $month) {
                                                          echo "<option value=\"" . $month . "\">" . $month . "</option>";
                                                      }
                                                    ?>
                                                </select>
                                                <select class="dob" name="patient_year" id="patient_year" data-error="#errNm4">
                                                    <option value="">Year</option>
                                                    <?php for($i=date("Y");$i>=1920;$i--){ ?>
                                                        <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                                    <?php } ?>
                                                </select>

                                            </div>
                                            <div>
                                                <span id="errNm2"></span>

                                                <span id="errNm3"></span>

                                                <span id="errNm4"></span>
                                            </div>

                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                            <div class="main-box">
                                                <h5 class="mb-3 top-space">Patient Gender*</h5>
                                                <div class="row">
                                                        <div class="col-md-3">
                                                            <input type="radio" name="patient_gender" value="male" class="form-gender" data-error="#errNm1"> <label>Male</label>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <input type="radio" name="patient_gender" value="female" class="form-gender" data-error="#errNm1"> Female
                                                        </div>
                                                </div>
                                                <span id="errNm1"></span>
                                            </div>
                                            <div class="main-box">
                                                <h5 class="mb-3 mt-3">Patient Email Address</h5>
                                                <input type="text" name="patient_email" placeholder="Patient Email Address">
                                            </div>
                                            <div class="main-box">
                                                <h5 class="mb-3 mt-3">Patient Phone Number*</h5>
                                                <input type="text" name="patient_phone_no" placeholder="Patient Phone Number">
                                            </div>
                                    </div>
                                </div>

                                  <!-- Referring Dentist Details form -->
                                  <h3 class="mb-4 mt-3">Referring Dentist Details</h3>
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="main-box">
                                            <h5 class="mb-3">Name of Dentist*</h5>
                                            <input type="text" name="dentist_name" placeholder="Name of Dentist">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="main-box">
                                            <h5 class="mb-3">Practice Phone Number*</h5>
                                            <input type="text" name="dentist_phone_no" placeholder="Practice Phone Number">
                                        </div>
                                    </div>
                                </div>

                                <!-- Address -->
                                <div class="row">
                                    <div class="col-lg-12 col-md-12">
                                            <div class="main-box">
                                                <h5 class="mb-3">Practice Name*</h5>
                                                <input type="text" name="dentist_location" placeholder="Enter Practice Name">
                                            </div>
                                            <div class="main-box">
                                                <label>Street Address</label>
                                                <input type="text" name="dentist_street_address" placeholder="Street Address">
                                            </div>
                                            <div class="main-box">
                                                <label>Address Line 2</label>
                                                <input type="text" name="dentis_address" placeholder="Address Line 2">
                                            </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                    <div class="main-box">
                                            <label>City</label>
                                            <input type="text" name="dentist_city" placeholder="Enter city">
                                            </div>
                                            <div class="main-box">
                                                <label>Post Code</label>
                                                <input type="text" name="dentist_post_code" placeholder="Enter post code">
                                            </div>

                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="main-box">
                                            <h5 class="mb-3 top-space-number">Referring Dentist's Phone Number</h5>
                                            <input type="text" name="dentist_referring_phone_no" placeholder="Referring Dentist's Phone Number">
                                        </div>
                                        <div class="main-box">
                                                <h5 class="mb-3 mt-3">Referring Dentist's Email*</h5>
                                                <input type="text" name="dentist_referring_email" placeholder="Referring Dentist's Email">
                                        </div>
                                    </div>
                                </div>

                                <!-- Referral Details Form -->
                                <h3 class="mb-4 mt-3">Referral Details</h3>
                                <h5 class="mb-3">Dental Speciality</h5>
                                <div class="row error-message">

                                    <div class="col-lg-4 col-md-4">
                                            <ul class="dental-specialist-list">
                                                    <li> <input type="checkbox" name="dental_specialist_list[]"  class="checkbox-details" value="Orthodontics">&nbsp;Orthodontics</li>
                                                    <li> <input type="checkbox" name="dental_specialist_list[]"  class="checkbox-details" value="Endodontics">&nbsp;Endodontics</li>
                                                    <li> <input type="checkbox" name="dental_specialist_list[]"  class="checkbox-details" value="Prosthodontics (FIXED/REMOVABLE)">&nbsp;Prosthodontics (FIXED/REMOVABLE)</li>

                                            </ul>
                                    </div>
                                    <div class="col-lg-4 col-md-4">
                                            <ul class="dental-specialist-list">
                                                    <li> <input type="checkbox" name="dental_specialist_list[]"  class="checkbox-details" value="Implant Surgery">&nbsp;Implant Surgery</li>

                                                    <li> <input type="checkbox" name="dental_specialist_list[]"  class="checkbox-details" value="Implant & Restoration">&nbsp;Implant & Restoration</li>

                                                    <li> <input type="checkbox" name="dental_specialist_list[]"  class="checkbox-details" value="Zygomatic Implants">&nbsp;Zygomatic Implants</li>

                                                    <li> <input type="checkbox" name="dental_specialist_list[]"  class="checkbox-details" value="Sinus Lift">&nbsp;Sinus Lift</li>

                                                    <li> <input type="checkbox" name="dental_specialist_list[]"  class="checkbox-details" value="Bone Graft">&nbsp;Bone Graft</li>

                                            </ul>
                                    </div>
                                    <div class="col-lg-4 col-md-4">
                                            <ul class="dental-specialist-list">
                                                    <li> <input type="checkbox" name="dental_specialist_list[]"  class="checkbox-details" value="Surgical Extraction">&nbsp;Surgical Extraction</li>

                                                    <li> <input type="checkbox" name="dental_specialist_list[]"  class="checkbox-details" value="Apisectomy">&nbsp;Apisectomy</li>

                                                    <li> <input type="checkbox" name="dental_specialist_list[]"  class="checkbox-details" value="Cone Beam CT/Radiography">&nbsp;Cone Beam CT/Radiography</li>
                                                    <li> <input type="checkbox" name="dental_specialist_list[]"  class="checkbox-details" value="Mentoring">&nbsp;Mentoring</li>
                                            </ul>
                                    </div>
                                </div>

                                <!-- Referral Details Form -->
                                 <!-- Address -->
                                 <div class="row mt-3">
                                    <div class="col-lg-12 col-md-12">
                                            <div class="main-box">
                                                <h5 class="mb-3">Reason for Referral*</h5>
                                                <textarea  name="reason_for_referral"></textarea>
                                            </div>
                                            <div class="main-box">
                                                <h5 class="mb-3">Relevant Medical History*</h5>
                                                <textarea name="referral_medical_history"></textarea>
                                            </div>
                                            <div class="main-box">
                                                <h5 class="mb-3">Do you have any attachments you wish to submit with this referral?</h5>
                                                <label><input type="checkbox" id="file_upload" name="is_upload" value="1"  class="checkbox-details" > Yes, I have attachments to upload</label>
                                            </div>
                                            <div class="mb-4" id="image_description">
                                                <h5 class="mb-3"><b>File Attachments</b></h5>
                                                <p class="mb-1">Please include any relevant file attachment such as radiographs, clinical notes or photographs.</p>
                                                <p class="mb-1">We accept the following files: JPG, PNG, DOC, DOCX, PDF, JPEG</p>
                                            </div>
                                    </div>
                                </div>
                        </div>
                        <div class="row">
                        <div class="col-md-12 main-box">
                            <div id="drop-zone" >
                            <p>Drop files here...</p>
                            <div id="clickHere">or click here.. <i class="fa fa-upload"></i>
                                <input type="file" name="files[]" id="file" multiple />
                            </div>
                            <div id='filename'></div>
                            </div>
                          </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                            <button type="submit" class="site-btn">Submit</button>
                            </div>
                        </div>

                        </form>
            </div>
        </div>


    </section>
    <!-- Contact Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer">

        <div class="container">
            <div class="row">
        <div class="footer__copyright">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        <div class="footer__copyright__text">
                            <p>Copyright &copy; <script>document.write(new Date().getFullYear());</script> All rights reserved to <a href="http://www.woodsidedental.co.uk" target="_blank">Woodside Dental Practice </a></p>
                        </div>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </div>
                    <div class="col-lg-5">
                        <ul>
                            <li>All Rights Reserved</li>
                            <li>Terms & Use</li>
                            <li>Privacy Policy</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/masonry.pkgd.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-23581568-13');
  </script>


<!-- Image uploading -->

<script>
$(document).ready(function() {
    $("#input-res-1").fileinput({
        uploadUrl: "file_upload.php",
        enableResumableUpload: true,
        initialPreviewAsData: true,
        maxFileCount: 5,
        theme: 'fas',
        deleteUrl: 'file_upload.php',
        fileActionSettings: {
            showZoom: function(config) {
                if (config.type === 'pdf' || config.type === 'image') {
                    return true;
                }
                return false;
            }
        }
    });
});
</script>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script>
$('#drop-zone').hide();
$('#image_description').hide();
$('#file_upload').click(function(){
    if($(this).is(":checked"))
    {
            $('#drop-zone').show();
            $('#image_description').show();
            var dropZoneId = "drop-zone";
    var buttonId = "clickHere";
    var mouseOverClass = "mouse-over";

    var dropZone = $("#" + dropZoneId);
    var ooleft = dropZone.offset().left;
    var ooright = dropZone.outerWidth() + ooleft;
    var ootop = dropZone.offset().top;
    var oobottom = dropZone.outerHeight() + ootop;
    var inputFile = dropZone.find("input");
    document.getElementById(dropZoneId).addEventListener("dragover", function (e) {
        e.preventDefault();
        e.stopPropagation();
        dropZone.addClass(mouseOverClass);
        var x = e.pageX;
        var y = e.pageY;

        if (!(x < ooleft || x > ooright || y < ootop || y > oobottom)) {
            inputFile.offset({
                top: y - 15,
                left: x - 100
            });
        } else {
            inputFile.offset({
                top: -400,
                left: -400
            });
        }

    }, true);

    if (buttonId != "") {
        var clickZone = $("#" + buttonId);

        var oleft = clickZone.offset().left;
        var oright = clickZone.outerWidth() + oleft;
        var otop = clickZone.offset().top;
        var obottom = clickZone.outerHeight() + otop;

        $("#" + buttonId).mousemove(function (e) {
            var x = e.pageX;
            var y = e.pageY;
            if (!(x < oleft || x > oright || y < otop || y > obottom)) {
                inputFile.offset({
                    top: y - 15,
                    left: x - 160
                });
            } else {
                inputFile.offset({
                    top: -400,
                    left: -400
                });
            }
        });
    }

    document.getElementById(dropZoneId).addEventListener("drop", function (e) {
        $("#" + dropZoneId).removeClass(mouseOverClass);
    }, true);

    inputFile.on('change', function (e) {
        $('#filename').html("");
        var fileNum = this.files.length,
            initial = 0,
            counter = 0,
            fileNames = "";

        for (initial; initial < fileNum; initial++) {
            counter = counter + 1;
            fileNames += this.files[initial].name + '&nbsp;';
        }
        if(fileNum > 1)
            fileNames = 'Files selected...';
        else
            fileNames = this.files[0].name + '&nbsp;';

        $('#filename').append('<span class="fa-stack fa-lg"><i class="fa fa-file fa-stack-1x "></i><strong class="fa-stack-1x" style="color:#FFF; font-size:12px; margin-top:2px;">'+ fileNum + '</strong></span><span">' + fileNames + '</span>&nbsp;<span class="fa fa-times-circle fa-lg closeBtn" title="remove"></span><br>');

        // add remove event
      $('#filename').find('.closeBtn').click(function(){
          $('#filename').empty();
          inputFile.val('');
      });
      ///End change
    });
    }
    else
    {
            $('#drop-zone').hide();
            $('#image_description').hide();
    }
});
</script>

<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>

<script type="text/javascript">
$('#patient_date').css({"display":"block","margin":"0","width":"0","opacity":"0"});
$('#patient_month').css({"display":"block","margin":"0","width":"0","opacity":"0"});
$('#patient_year').css({"display":"block","margin":"0","width":"0","opacity":"0"});

  $( "#main" ).validate({
  rules: {
    patient_first_name: {
      required:true
    },
    patient_surname_name: {
      required:true
    },
    patient_location: {
      required:true
    },
    patient_city: {
      required:true
    },
    patient_post_code: {
      required:true
    },
    patient_date: {
      required:true
    },
    patient_month: {
      required:true
    },
    patient_year: {
      required:true
    },
    patient_gender: {
      required:true
    },
    patient_phone_no: {
      required:true,
      number:true
    },
    dentist_name: {
      required:true
    },
    dentist_phone_no: {
      required:true,
      number:true
    },
    dentist_location: {
      required:true
    },
    dentist_street_address: {
      required:true
    },
    dentist_city: {
      required:true
    },
    dentist_post_code: {
      required:true
    },
    dentist_referring_email: {
      required:true,
      email : true
    },
    'dental_specialist_list[]': {
        required: true
    },
    reason_for_referral: {
      required:true
    },
    referral_medical_history: {
      required:true
    }
  },
  messages:{
    patient_first_name: {
        required : '<span style="color:red">Patient first name field is required.</span>'
      },
      patient_surname_name: {
        required : '<span style="color:red">Patient surname field is required.</span>'
      },
      patient_location: {
        required : '<span style="color:red">Patient street address field is required.</span>'
      },
      patient_city: {
        required : '<span style="color:red">Patient city field is required.</span>'
      },
      patient_post_code: {
        required : '<span style="color:red">Patient post code field is required.</span>'
      },
      patient_date: {
        required : '<span style="color:red">Patient date field is required.</span>'
      },
      patient_month: {
        required : '<span style="color:red">Patient month field is required.</span>'
      },
      patient_year: {
        required : '<span style="color:red">Patient year field is required.</span>'
      },
      patient_gender: {
        required : '<span style="color:red">Patient gender field is required.</span>'
      },
      patient_phone_no: {
        required : '<span style="color:red">Patient phone no field is required.</span>',
        number : '<span style="color:red">Enter only numbers.</span>'
      },
      dentist_name: {
        required : '<span style="color:red">Dentist name field is required.</span>'
      },
      dentist_phone_no: {
        required : '<span style="color:red">Practice phone no field is required.</span>',
        number : '<span style="color:red">Enter only numbers.</span>'
      },
      dentist_location: {
        required : '<span style="color:red">Practice Name field is required.</span>'
      },
      dentist_street_address: {
        required : '<span style="color:red">Practice street address field is required.</span>'
      },
      dentist_city: {
        required : '<span style="color:red">Practice city field is required.</span>'
      },
      dentist_post_code: {
        required : '<span style="color:red">Practice post code field is required.</span>'
      },
      dentist_referring_email: {
        required : '<span style="color:red">Referring dentist email field is required.</span>',
        email  : '<span style="color:red">Please enter valid email.</span>'
      },
      'dental_specialist_list[]': {
        required: '<span style="color:red">You must have to select at least one Dental Speciality</span>'
    },
      reason_for_referral: {
        required : '<span style="color:red">Referral reason field is required.</span>'
      },
      referral_medical_history: {
        required : '<span style="color:red">Relevant medical history field is required.</span>'
      }

  },errorPlacement: function(error, element)
        {
            $('#patient_date-error').css({"width":"100%"});
            $('#patient_month-error').css({"width":"100%"});
            $('#patient_year-error').css({"width":"100%"});

            // console.log(element.attr("name"));
            // console.log("***");
           // console.log();
            console.log($(element).data('error'));
            var placement = $(element).data('error');
            if(element.attr("name") == "dental_specialist_list[]") {
                error.insertAfter('.error-message');
            } else
             if (placement) {
                $(placement).append(error)
            } else {
                error.insertAfter(element);
            }
         }
});

</script>

</body>

</html>