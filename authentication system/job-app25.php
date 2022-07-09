<?php
session_start();

$name = explode(" ",$_SESSION['user']);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iofrm</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/fontawesome-all.min.css">
    <link rel="stylesheet" type="text/css" href="css/iofrm-style.css">
    <link rel="stylesheet" type="text/css" href="css/iofrm-theme23.css">
</head>
<body>
    <div class="form-body on-top-mobile">
        <div class="website-logo">
            <a href="index.html">
                <div class="logo">
                    <img class="logo-size" src="images/logo-light.svg" alt="">
                </div>
            </a>
        </div>
        <div class="row">
            <div class="img-holder">
                <div class="bg"></div>
                <div class="info-holder simple-info">
                    <div><img src="images/graphic6.svg" alt=""></div>
                    <div><h3>We’re Accepting applications!</h3></div>
                    <div><p><?php echo "welcome ".$_SESSION['user']."<br>"?>Fill the form, attach your  latest CV <br>and portfolio to get listed.</p></div>
                </div>
            </div>
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <form action="includes/job-app.inc.php" method="POST" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control" value="<?php echo $name[1]; ?>" readonly name="fname">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control" value="<?php echo $name[0]; ?>" readonly name="lname">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control" value="<?php echo $_SESSION['mail']; ?>" readonly name="email">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control" placeholder="Phone Number" name="phone">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control" placeholder="Country" name="country">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control" placeholder="Linkedin link" name="linkeldn">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control" placeholder="state of origin" name="state">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control" placeholder="Website, other links" name="website">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <textarea class="form-control" placeholder="Tell us about yourself.." name="intro"></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-sm-6">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="validatedCustomFile" name="cv">
                                        <label class="custom-file-label" for="validatedCustomFile">CV (Resume)</label>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="validatedCustomFile" name="file">
                                        <label class="custom-file-label" for="validatedCustomFile">Other attachments</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row top-padding">
                                <div class="col-12 col-sm-6">
                                    <input type="checkbox" id="chk1" name="checkbox" required><label for="chk1">I agree on <a href="#">terms & conditions</a> of iofrm</label>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-button text-right">
                                        <button id="submit" type="submit" class="ibtn less-padding">submit form</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>
</body>


</html>