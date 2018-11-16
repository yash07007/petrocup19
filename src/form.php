<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/form.css">
    </head>
    <body>
        <div class="container">
            <php include('errors.php'); ?>
            <div class="register-form">
                <div class="register-image">
                    <!-- <img src="https://image.ibb.co/kUagtU/rocket_contact.png" alt="rocket_contact"/> -->
                    <!-- <img src="https://img.etimg.com/thumb/msid-59081102,width-300,imgsize-59610,resizemode-4/how-to-correct-errors-in-gst-registration.jpg" alt="Register"> -->
                    <img src="imgs/petroLogo.png" alt="Register">
                </div>
                <form method="post" action="form.php">
                    <h3 class="heading">Registeration Form</h3>
                    <div class="row">
                            <label class="inpLabel" for="collegeName">College/University Name</label>
                            <input type="text" name="collegeName" class="form-control" placeholder="" value="" />
                    </div>
                    <h4>Representative Information</h4>
                    <div class="row">
                            <label class="inpLabel" for="r-name">Name *</label>
                            <input type="text"  name="r-name" class="form-control" placeholder="" value="" />
                    </div>
                    <div class="row">
                            <label class="inpLabel" for="r-phone">Phone Number *</label>
                            <input type="text" name="r-phone" class="form-control" placeholder="" value="" />
                    </div>
                    <div class="row">
                            <label class="inpLabel" for="r-email">Email *</label>
                            <input type="email" name="r-email" class="form-control" placeholder="" value="" />
                    </div>
                    <h4>Faculty Mentor Information</h4>
                    <div class="row">
                            <label class="inpLabel" for="f-name">Name *</label>
                            <input type="text"  name="f-name" class="form-control" placeholder="" value="" />
                    </div>
                    <div class="row">
                            <label class="inpLabel" for="f-phone">Phone Number *</label>
                            <input type="text" name="f-phone" class="form-control" placeholder="" value="" />
                    </div>
                    <div class="row">
                            <label class="inpLabel" for="f-email">Email *</label>
                            <input type="email" name="f-email" class="form-control" placeholder="" value="" />
                    </div>
                    <h4>Select Events</h4>
                    <h5>Mens Sports</h5>
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input"  name="events[]" value="m-Atheletics" id="m-Atheletics">
                                <label class="custom-control-label" for="m-Atheletics">Atheletics</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input"  name="events[]" value="m-Basketball" id="m-Basketball">
                                <label class="custom-control-label" for="m-Basketball">Basketball</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input"  name="events[]" value="m-Badminton" id="m-Badminton">
                                <label class="custom-control-label" for="m-Badminton">Badminton</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input"  name="events[]" value="m-Cricket" id="m-Cricket">
                                <label class="custom-control-label" for="m-Cricket">Cricket</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input"  name="events[]" value="m-Gym" id="m-Gym">
                                <label class="custom-control-label" for="m-Gym">Extreme-Gym</label>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input"  name="events[]" value="m-Football" id="m-Football">
                                <label class="custom-control-label" for="m-Football">Football</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input"  name="events[]" value="m-Kabaddi" id="m-Kabaddi">
                                <label class="custom-control-label" for="m-Kabaddi">Kabaddi</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input"  name="events[]" value="m-Khokho" id="m-Khokho">
                                <label class="custom-control-label" for="m-Khokho">Kho-Kho</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input"  name="events[]" value="m-Lawntennis" id="m-Lawntennis">
                                <label class="custom-control-label" for="m-Lawntennis">Lawn-Tennis</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input"  name="events[]" value="m-Handball" id="m-Handball">
                                <label class="custom-control-label" for="m-Handball">Handball</label>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" name="events[]"  value="m-Skating" id="m-Skating">
                                <label class="custom-control-label" for="m-Skating">Skating</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input"  name="events[]" value="m-Tabletennis" id="m-Tabletennis">
                                <label class="custom-control-label" for="m-Tabletennis">Table-Tennis</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input"  name="events[]" value="m-Taekwondo" id="m-Taekwondo">
                                <label class="custom-control-label" for="m-Taekwondo">Taekwondo</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input"  name="events[]" value="m-Volleyball" id="m-Volleyball">
                                <label class="custom-control-label" for="m-Volleyball">Volleyball</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" name="events[]"  value="m-Yoga" id="m-Yoga">
                                <label class="custom-control-label" for="m-Yoga">Yoga</label>
                            </div>
                        </div>
                    </div>
                    <h5>Womens Sports</h5>
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input"  name="events[]" value="f-Atheletics" id="f-Atheletics">
                                <label class="custom-control-label" for="f-Atheletics">Atheletics</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input"  name="events[]" value="f-Basketball" id="f-Basketball">
                                <label class="custom-control-label" for="f-Basketball">Basketball</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input"  name="events[]" value="f-Badminton" id="f-Badminton">
                                <label class="custom-control-label" for="f-Badminton">Badminton</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input"  name="events[]" value="f-Football" id="f-Football">
                                <label class="custom-control-label" for="f-Football">Football</label>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input"  name="events[]" value="f-Kabaddi" id="f-Kabaddi">
                                <label class="custom-control-label" for="f-Kabaddi">Kabaddi</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input"  name="events[]" value="f-Khokho" id="f-Khokho">
                                <label class="custom-control-label" for="f-Khokho">Kho-Kho</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input"  name="events[]" value="f-Lawntennis" id="f-Lawntennis">
                                <label class="custom-control-label" for="f-Lawntennis">Lawn-Tennis</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" name="events[]"  value="f-Skating" id="f-Skating">
                                <label class="custom-control-label" for="f-Skating">Skating</label>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input"  name="events[]" value="f-Tabletennis" id="f-Tabletennis">
                                <label class="custom-control-label" for="f-Tabletennis">Table-Tennis</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input"  name="events[]" value="f-Taekwondo" id="f-Taekwondo">
                                <label class="custom-control-label" for="f-Taekwondo">Taekwondo</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input"  name="events[]" value="f-Volleyball" id="f-Volleyball">
                                <label class="custom-control-label" for="f-Volleyball">Volleyball</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" name="events[]"  value="f-Yoga" id="f-Yoga">
                                <label class="custom-control-label" for="f-Yoga">Yoga</label>
                            </div>
                        </div>
                    </div>
                    <h5>General Sports</h5>
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input"  name="events[]" value="Chess" id="Chess">
                                <label class="custom-control-label" for="Chess">Chess</label>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input"  name="events[]" value="Carrom" id="Carrom">
                                <label class="custom-control-label" for="Carrom">Carrom</label>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input"  name="events[]" value="Frisbee" id="Frisbee">
                                <label class="custom-control-label" for="Frisbee">Frisbee</label>
                            </div>
                        </div>
                    </div>
                    <h4>Accomodation Details</h4>
                    <label for="accomodation">If you want accomodation, type in the required number?</label>
                    <input type="number" name="accomodation" class="form-control" value="0" min="0" />
                    <div class="row">
                            <input type="submit" name="submit" class="btnRegister" value="Submit" />
                    </div>
                </form>
            </div>
        </div>
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript">
            $('.inpLabel').click(function () {
                $('.inpLabel + input').blur();
                $(this).next().focus();
            });
            $('.inpLabel + input').focus(function() {
                $(this).prev().addClass('focused');
            });
            $('.inpLabel + input').blur(function() {
                if($(this)[0].value){
                    console.log($(this)[0].value);
                }
                else{
                    $(this).prev().removeClass('focused');
                }
            });
        </script>
    </body>
</html>
