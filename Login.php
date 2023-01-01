








<!doctype html>
<html lang="en">
<head>
    <title>Login</title>
    <link rel="icon" href="pictures/pla.png" type="image/x-icon" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="css_2.css">

</head>
<body>
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-10">
                    <div class="wrap d-md-flex">
                        <div class="img" style="background-image: url(pictures/dsp_login.gif);">
                            
                        </div>
                        <div class="login-wrap p-4 p-md-5">
                            <div class="d-flex">
                                <div class="w-100">
                                    <h3 class="mb-4">Sign In</h3>
                                </div>
                                <div class="w-100">
                                    <p class="social-media d-flex justify-content-end">
                                       
                                    </p>
                                </div>
                            </div>
                            <form action="s_validate.php" method="POST" class="signin-form">
                                <div class="form-group mb-3">
                                    <label class="label" for="staff_id">Staff ID</label>
                                    <input type="text" name="staff_id" class="form-control" placeholder="Staff ID" required>
                                </div>

                                <div class="form-group mb-3">
                                    <label class="label" for="pass">Password</label>
                                    <input type="password" name="pass"  class="form-control" placeholder="Password" required>
                                </div>
                                <div class="form-group">
                                    
                                    <input type="submit" name="save" value="Login" class="form-control btn btn-primary rounded submit px-3"></input>
                                  
                                </div>
                                    
                            </form>
                            <p class="text-center">Not a member? <a data-toggle="tab" href="#signup" onclick="alert('Contact your Admin to Sign-up. NOTE: Hi sir and classmates! di kapo makaregister dito kasi sa system po namin ay admin po ang mag register ng staff. Input nlng po 1111 for staffid and Admin for password. Thankyou')" >Sign Up</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
	
	

	
	
	
	
	
	
	
	
	
	
	
</body>
</html>

