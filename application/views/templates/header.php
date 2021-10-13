<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>blog tut's</title>
	<link rel="stylesheet" href="<?php echo 'base_url'('Foundation/assets/css/foundation.css'); ?>">
		<link rel="stylesheet" href="<?php echo 'base_url'('/css/main.css'); ?>">
		<link rel="stylesheet" href="<?php echo 'base_url'('FontAwesome/css/fontawesome.css'); ?>">
</head>
<body>
	<div class="grid-container fluid">
		<div class="grid-x grid-padding-x">
			<div class="cell small-12 medium-12 large-12">
				<div class="grid-x grid-margin-x align-spaced"> 
  <div class="cell small-2 align-self-middle" >logo</div> 
  <div class="cell small-8" style="margin-top:10px"><div class="input-group">
  <input class="input-group-field" type="search">
  <div class="input-group-button">
    <input type="submit" class="button primary" value="Submit">
  </div>
</div> </div>
	 <div class="cell small-2 text-right align-self-middle">test</div>
</div>
				<div class="top-bar">
  <div class="top-bar-left">
    <ul class="dropdown menu color" data-dropdown-menu>
      <li class="menu-text">blog tut's</li>
      <li>
        <a href="<?php echo base_url()?>">Home</a>
      </li>
      <li><a href="<?php echo base_url()?>about">About</a></li>
      <li><a href="<?php echo base_url()?>posts">Blog</a></li>
    </ul>
  </div>
  <div class="top-bar-right">
    <ul class="menu">
			<?php if(!$this->session->userdata('Logged_in')){ ?>
      <li> <a href="<?php echo base_url()?>register"><button class="button">Sign-up</button></a></li>
      <li><a href="<?php echo base_url()?>login"><button class="button">Login</button></a></li>
			<?php }?>
				<?php if($this->session->userdata('Logged_in')){ ?>
						<li><a href="<?php echo base_url()?>dashboard"><button class="button">Dashboard</button></a></li>
					<li><a href="<?php echo base_url()?>logout"><button class="button">Logout</button></a></li>
					<?php }?>
    </ul>
  </div>
	
</div>
<div class="cell text-center">messages here</div>
</div>
	
