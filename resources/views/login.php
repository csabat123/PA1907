<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
        }


        /* Full-width input fields */
        input[type=text],
        input[type=password] {
            width: 25%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        /* Styles for buttons */
        button {
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px -0px;
            border: none;
            cursor: pointer;
            width: 100%;
        }



        /* Styles for the cancel button */
        .cancelbtn {
            background-color: rgb(255, 46, 46);
            border: none;
            padding: 15px 30px;
            text-align: center;
            font-size: 16px;
            margin: auto;
            width: auto;
        }

        .cancelbtn2 {
            background-color: rgb(52, 199, 64);
        }

    </style>
</head>





<body>







    <form class="modal-content animate" action="/action_page.php">
        <div class="imgcontainer">

            <img src="pic\123.jpg">
            <html>

            <head>
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <style>
                    body {
                        font-family: Arial, Helvetica, sans-serif;
                    }






                    /* Center the image and position the close button */
                    .imgcontainer {
                        text-align: center;
                        margin: 24px 0 12px 0;
                        position: relative;
                    }

                    img.avatar {
                        width: 40%;
                        border-radius: 50%;
                    }

                    .container {
                        padding: 16px;
                    }

                    span.psw {
                        float: right;
                        padding-top: 16px;
                    }

                    /* The Modal (background) */
                    .modal {
                        display: none;
                        /* Hidden by default */
                        position: fixed;
                        /* Stay in place */
                        z-index: 1;
                        /* Sit on top */
                        left: 0;
                        top: 0;
                        width: 100%;
                        /* Full width */
                        height: 100%;
                        /* Full height */
                        overflow: auto;
                        /* Enable scroll if needed */
                        background-color: rgb(0, 0, 0);
                        /* Fallback color */
                        background-color: rgba(0, 0, 0, 0.4);
                        /* Black w/ opacity */
                        padding-top: 60px;
                    }






                    /* Zoom Animation */
                    .animate {
                        -webkit-animation: animatezoom 0.6s;
                        animation: animatezoom 0.6s
                    }

                    @-webkit-keyframes animatezoom {
                        from {
                            -webkit-transform: scale(0)
                        }

                        to {
                            -webkit-transform: scale(1)
                        }
                    }

                    @keyframes animatezoom {
                        from {
                            transform: scale(0)
                        }

                        to {
                            transform: scale(1)
                        }
                    }

                </style>

            </head>




            <body style="background-color:#0000000">
                <title>Login Page</title>
                <h2>Professional Development</h2>


                <div id="id01" class="modal">

                    <form class="modal-content animate" action="/action_page.php">
                        <div class="imgcontainer">
                            <img src="pic/123.jpg" class="avatar">
                        </div>
                    </form>

                </div>





            </body>

            </html>



            <form method="post" action="" id="formwrap">
                <div class="container">
                    <label for="uname"><b>
                            <center>Username</center>
                        </b></label>
                    <input type="text" placeholder="Enter Username" name="uname" style="width: 15%;" required>
<br>

                   <br> <label for="psw"><b>
                            <center>Password</center>
                        </b></label>
                    <input type="password" placeholder="Enter Password" name="psw" style="width: 15%;" required>
						<br><a href="forgotpsw">Forgot Password?</a><br>
						<br>
                    <div>

                        <button type="submit" class="cancelbtn cancelbtn2">Login</button>

                    </div>
					<p>
                     <label>
                            <input type="checkbox" checked="checked" name="remember"> Remember me
                        </label>

                </div>

            </form>


            <script>
                document
                    .getElementById("formwrap")
                    .addEventListener("submit", function(e) {
                        e.preventDefault();
                        window.location.href = "formwrap";
                    });

            </script>



</body>

</html>
