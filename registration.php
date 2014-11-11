<!--header starts-->
<?php
require_once('header.php');
?>
<script type="text/javascript">
function check()
{
	var password = document.getElementById('password').value;
	var confirm_password = document.getElementById('confirm_password').value;
	
	if(password!=confirm_password)
		{
			alert('Password did not match');
			document.getElementById('c_pwd').className="has-error";
			return false;
		}

}

</script>
<!--header ends-->
<?php
if(@$_REQUEST['email_exists']==1)
	{
?>
<script type="text/javascript">
	
	$( window ).load(function() {
        $('#email_exists_modal').modal('show');

    });

</script>
<?php
	}
if(@$_REQUEST['signUp_state']==1)
	{
?>
<script type="text/javascript">
	
	$( window ).load(function() {
        $('#sign_up_confirmation_modal').modal('show');

    });

</script>
<?php
	}
if(isset($_REQUEST['sign_in_state']) && @$_REQUEST['sign_in_state']==0)
	{
?>
<script type="text/javascript">
	
	$( window ).load(function() {
        $('#sign_in_state_modal').modal('show');

    });

</script>

 <!-- Fixed navbar starts-->
 <?php
 	}
 	require_once('menu.php');
 ?>
 <!--Fixed navbar ends-->



<!--Registration Part Start-->
<div class="top_margin">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<h1>Sign Up for Free Membership</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-md-5">
				<h3>Create Your Account:</h3>
				<form role="form" method="post" action="controller/registration.php">
				  <div class="form-group">
					<label for="email">User name:</label>
					<input type="text" class="form-control" id="username" name="username" required/>
				  </div>
				  <div class="form-group">
					<label for="email">Email address:</label>
					<input type="email" class="form-control" id="email" name="email" required/>
				  </div>
				  <div class="form-group">
					<label for="pwd">Password:</label>
					<input type="password" class="form-control" id="password" name="password" 
					required placeholder="Minimum 6 characters including lower,upper &amp; special characters"
					maxlength="20" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" onchange="form-group.confirm_password.pattern = this.value;" />
				 </div>
				  <div class="form-group" id="c_pwd">
					<label for="pwd">Confirm password:</label>
					<input type="password" class="form-control" id="confirm_password" name="confirm_password" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}"/>
				  <span><?php echo @$_REQUEST['pass_match'];?></span>
				  </div>
				  <div class="checkbox">
				  	<label><input type="checkbox"> Sign me up for free updates on design trends, tutorials, and special offers via email.</label>
				  </div>
				  <div class="checkbox">
					<label><input type="checkbox" onclick="check();"> I agree to URO Design Network Website Terms and Licensing Terms.</label>
				  </div>
				  <button type="submit" class="btn btn-default">Submit</button>
				 </form>
				
				<div>
					<h3>As a Member You Can:</h3>
					<ul class="list-group" style="font-size:12px;">
						<li class="list-group-item list-group-item-success">Browse through 27,743,322 royalty-free stock photos, vector images and videos.</li>
						<li class="list-group-item list-group-item-info">Use Favorites for your projects, create folders and send them to your friends and colleagues.</li>
						<li class="list-group-item list-group-item-warning">Take part in our Referral Program and get 15% from every purchase.</li>
						<li class="list-group-item list-group-item-danger">And lots of other offers! More than 1,915,517 customers have rated our service highly.</li>
					</ul>
				</div>
				
			</div>
			<div class="col-md-2">
				<div class="border_middle_line text-center">
				</div>
			</div>
			<div class="col-md-5">
				<h3>Already have an account?</h3>
				   <form role="form" method="post" action="controller/sign_in.php">
				  <div class="form-group">
					<label for="email">Email address:</label>
					<input type="email" class="form-control" id="email" name="email" required/>
				  </div>
				  <div class="form-group">
					<label for="pwd">Password:</label>
					<input type="password" class="form-control" id="pwd" name="password" required/>
				  </div>
				    <button type="submit" class="btn btn-default">Sign In</button> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <a href="#">Forgot your password?</a>
				</form>
			</div>
			</div>
		</div>
	</div>
<!--Registration Body Part End-->



<hr>

<!--Footer Start-->
<?php
	require_once('footer.php');
?>
<!--Footer  End-->

<!--Bottom Footer Start-->
<?php
	require_once('bottom_footer.php');
?>
<!--Bottom Footer End-->
<!--Successful sign up form starts-->
<div class="modal fade" id="sign_up_confirmation_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Congratulation, <?php echo @$_REQUEST['username'];?></h4>
      </div>
      <div class="modal-body">
       <p>You've successfully registered</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <!--<button type="button" class="btn btn-primary">Save changes</button>-->
      </div>
    </div>
  </div>
</div>
<!--Successful sign up form ends-->
<!--Email Already Exists form starts-->
<div class="modal fade" id="email_exists_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Sorry</h4>
      </div>
      <div class="modal-body">
       <p class="blink_me">Email Already Exists</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <!--<button type="button" class="btn btn-primary">Save changes</button>-->
      </div>
    </div>
  </div>
</div>
<!--Email Already Exists form ends-->
<!--Sign In State form starts-->
<div class="modal fade" id="sign_in_state_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Sorry</h4>
      </div>
      <div class="modal-body">
       <p class="blink_me">Wrong Credentials</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <!--<button type="button" class="btn btn-primary">Save changes</button>-->
      </div>
    </div>
  </div>
</div>
<!--Sign In State form ends-->
