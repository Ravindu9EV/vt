<!DOCTYPE HTML>
<html>

    <head>

        <title>Third Party Account Setup</title>

        <link rel="stylesheet" href="thirdpartyaccountsetup.css">

    </head>

    <body>

        <div class="wrapper">

            <form action="thirdpartyaccountsetupAddPrc.php" method="POST" enctype="multipart/form-data">

                <h1>Setup Your Third Party Account</h1>

                <div class="input-box">
                    <label for="setusername">Set Username</label>
                    <input type="text" id="Set Username" name='name' minlength="8" maxlength="24" required>
                </div>
                <div class="input-box">
                    <label for="setemail">Set Email</label>
                    <input type="email" id="Set Username" name='email' minlength="8" maxlength="24" required>
                </div>
                <div class="input-box">
                    <label for="setpassword">Set Password</label>
                    <input type="password" id="Set Password" name='password' minlength="8" maxlength="16" required>
                </div>
                <div class="input-box">
                    <label for="repeatpassword">Repeat Password</label>
                    <input type="password" id="Repeat Password" minlength="8" maxlength="16" required>
                </div>

                <button type="submit" class="button">Register</button>

            </form>

        </div>

        <button type="button" class="back-button">Back</button>

    </body>

</html>