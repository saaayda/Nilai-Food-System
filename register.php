
<!DOCTYPE html>
<html>
    <head>
	<title>Register</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <style>
 /*                 body {
    background-image: url("paper.jpg");
*/
}
h1 {
          color: darkred;
         }
     body {
          color:darkred;
         }
      body {
    background-image: url("paper.jpg");
}

     .button{
    background-color: maroon;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration:white;
    display: inline-block;
    font-size: 20px;
    margin:10px auto;
    cursor: right-side;
    float:left;

}
</style>

    </head>
    <body>

       <div class="container">
        <div class ="header">

            <h2>Create New Account</h2>
        </div>

	<form  action ="process.php" method ="POST">

            <table>
              <script type="text/javascript">
              $(document).ready(function() {

                  $('#btnSubmit').click(function() {

                      $(".error").hide();
                      var hasError = false;
                      var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;

                      var emailaddressVal = $("#email").val();
                      if(emailaddressVal == '') {
                          $("#email").after('<span class="error">Please enter your email address.</span>');
                          hasError = true;
                      }

                      else if(!emailReg.test(emailaddressVal)) {
                          $("#email").after('<span class="error">Enter a valid email address.</span>');
                          hasError = true;
                      }

                      if(hasError == true) { return false; }

                  });
              });

              </script>


              <div id="form_wrapper" class="form_wrapper">
              	 <table>
              					<form class="register active"  id="myForm" method="POST" action="insertCustomer.php">


                     <th colspan="3"><h2>CUSTOMER REGISTRATION:</h2> </th>




                 <tr>
                  <td>

              		<label> Email:</label>
              		<input type="text" name="email" id="email"/>
              		<span class="error">This is an error</span>


              	</td>
                  <td>



              		<label> FullName:</label>
              		<input type="text" name="name" />
              		<span class="error">This is an error</span>

                 </td>


                 </tr>

                  <tr>
                  <td>

              		<label>Password:</label>
              		<input type="password" name="password1" id="password1" />

              	</td>

                 <td>
                   	  <label>UserName:</label>
              			<input type="text" name="username" id="username"/>
              			<span class="error">This is an error</span>

              	</td>

                 </tr>

                 <tr>
                  <td>

              		<label> Re-Password:</label>
              		<input type="password" name="password2"id="password2" />
              		<div id="pass-info"> </div>
              	</td>

                 <td>

              			<label> Phone:</label>
              			<input type="text" name="tell" id="tell"/>
              			<span class="error">This is an error</span>

                 </td>


                 </tr>

                  <tr>
                  <td>

              		<label> Cuntery:</label>
                      <script type="text/javascript" src="js/countries.js"></script>
                      <select onchange="print_state('state',this.selectedIndex);" id="country" name ="country"></select>

                 </td>

                  <td>

                      <label>Address:</label>
              		<input type="text" name="address" id="address"/>
              		<span class="error">This is an error</span>


                 </td>


                 </tr>


                 <tr>
                    <td>

                          <label> City:</label>
              			<select name ="City" id ="state"></select>
              		    <script language="javascript">print_country("country");</script>
              			<span class="error">This is an error</span>
                  </td>

                    <td>

              			<label>Postal code:</label>
              			<input type="text" name="pcode" id="pcode"/>
              			<span class="error">This is an error</span>

                 </td>

                 </tr>


                <tr>
              						<div class="bottom">

              						<td colspan="3">
              						<button  id="btnSubmit" type="submit" name="submit"> Register</button>

              							<div class="clear"></div>
              						</div>


                 </tr>
              					</form>

              					</table>


              <script type="text/javascript">

              $(document).ready(function(){
                  $("#btnSubmit").click(function() {
                  alert("Are You Want To Save A New Customer !!!");
                      $.ajax({
                      cache: false,
                      type: 'POST',
                      url: 'insertCustomer.php',
                      data: $("#myForm").serialize(),
                      success: function(d) {
                          $("#someElement").html(d);


                                                                                     );
                  });
              });

              </script>
						<tr>
							<td><label for="registeras">Register As:</label></td>
							<td>
                                <select name="regusertype">
                                    <option value="user">Customer</option>
                                    <option value="manager">Restaurant Operator</option>
                                </select>
                            </td>
                 <tr>
                    <td></td>
                    <td><input type="submit" name="register_btn" value="Register">
                        <input type ="reset" value="Reset"/></td>
                </tr>

        </table>

        </form>
        </div>
    </body>

</html>
