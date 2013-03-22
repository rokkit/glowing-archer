<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title></title>
<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/css/bootstrap-combined.min.css" rel="stylesheet">
</head>
<body>
<div class="navbar navbar-fixed-top ">
      <div class="navbar-inner">
        <div class="container">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand" href="#">Контакты</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="active"><a href="#">Home</a></li>
            </ul>
             <ul class="nav pull-right">
          <?php if(!$this->session->userdata('user')) : ?>
          <li><?php echo anchor('users/signup', 'Sign Up'); ?></li>
          
          <li class="divider-vertical"></li>
          <li class="dropdown">
            <a class="dropdown-toggle" href="#" data-toggle="dropdown">Sign In <strong class="caret"></strong></a>
            <div class="dropdown-menu" style="padding: 15px; padding-bottom: 0px;">
              <!-- Login form here -->
              <?php echo form_open('users/login',array('class' => "form-signin" )); ?>
			  <?php
				echo form_input('user[name]', set_value('user[name]'),"id='name' style='margin-bottom: 15px;' size='30' placeholder='email'");
			  ?>
			  <?php
				echo form_input('user[password]', set_value('user[password]'),"id='name' style='margin-bottom: 15px;' size='30' placeholder='password'");
			  ?>
		 
			  <input class="btn btn-primary" style="clear: left; width: 100%; height: 32px; font-size: 13px;" type="submit" name="commit" value="Sign In" />
			</form>
            </div>
          </li>
          <?php else : ?>
          		<li><?php echo anchor('users/logout', 'Logout'); ?></li>
          <?php endif; ?>
        </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>
    <div class="container" style="margin-top:50px;">