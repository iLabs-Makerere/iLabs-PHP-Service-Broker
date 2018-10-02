
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
   

    <title>Welcome | <?php echo 'welcome to ilabs'?></title>


  </head>

  <body>
		<p> You are welcome to ilabs page</p>
		<form method="post" action="<?php echo base_url();?>students/register">
			<div class="form-group"
				<div class="form-group">
								<label>First_name</label>
								<input class="form-control" type="text" name="first_name" value="<?php echo set_value('first_name');?>" placeholder="Enter first_name"/>
							</div>
							<div class="form-group">
								<label>Last_name</label>
								<input class="form-control" type="text" name="last_name" value="<?php echo set_value('last_name');?>" placeholder="Enter first_name"/>
							</div>
							<div class="form-group">
								<label>Registration number</label>
								<input class="form-control" type="text" name="regno" value="<?php echo set_value('registration number');?>" placeholder="Enter registration number"/>
							</div>
							<div class="form-group">
								<label>Email</label>
								<input class="form-control" type="email" name="email" value="<?php echo set_value('email');?>" placeholder="Enter email"/>
							</div>
							<div class="form-group">
								<label>Password</label>
								<input class="form-control" type="password" name="password" value="<?php echo set_value('password');?>" placeholder="Enter password"/>
							</div>
							<div class="form-group">
								<label>Confirm Password</label>
								<input class="form-control" type="password" name="confirm_password" value="<?php echo set_value('confirm_password');?>" placeholder="Confirm Password"/>
							</div>
							<div class="form-group">
								<label>Course</label>
								<select name="course" class="form-control">
									<?php foreach($courses as $course):?>
										<option value="<?php echo $course->id?>"><?php echo $course->name;?></option>
									<?php endforeach;?>
								</select>
							</div>
							<div class="form-group">
								<label>year of study</label>
								<select name="year" class="form-control">
									<?php foreach($years as $year):?>
										<option value="<?php echo $year->id?>"><?php echo $year->name;?></option>
									<?php endforeach;?>
								</select>
							</div>		
				<div class="col-md-6">
						<div class="btn-group pull-right">
							<input type="submit" id="page_submit" name="submit" class="btn btn-default" value="save"/>
										</div>				
		</form>
    
 </body>
      <footer class="footer">
        <p>&copy; iLabs@Mak.</p>
      </footer>

    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
