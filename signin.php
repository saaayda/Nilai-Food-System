<?php
   session_start();
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>

        <meta charset="UTF-8">
        <title>LOGIN PAGE</title>
	<link rel="stylesheet"type="text/css"href="style.css">

    </head>

    <body>
        <div class="header">
            <h1>Log In</h1>
        </div>

	<form action="loginprocess.php" action="{{ route('login')}}"method="POST">
            <table>
                <tr>
                    <td>Username</td>
                    <td><input type="text" name="username" class="textInput"></td>
	        </tr>


                <tr>
                    <td>Password</td>
                    <td><input type="password" name="password" name="textInput"></td>
	        </tr>

                <tr>
                    <td><input type="submit" name="btn" value="Login"></td>
	        </tr>
            </table>
        </form>


    </body>
</html>

<article id="content">

					<section class="col-1-3"><div class="wrap-col">
						<div class="box">First time here ?<span> Register now</span>
								<ul class="list1 pad_bot1">
								<a href="register.php" class="button1">Register</a>
							</div>
						</div>
					</div></section>
