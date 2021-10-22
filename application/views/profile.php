<?php
    $default = "path/to/defava.png"; // Set a Default Avatar
    $emailavatar = md5(strtolower(trim($email)));
    $gravurl = "";
    $imageProfile = '<img src="http://www.gravatar.com/avatar/'.$emailavatar.'?d='.$default.'&s=140&r=g&d=mm" class="img-circle" alt="">';
?>

<div class="col-md-8 col-lg-offset-2">
	<br><br>
	<div class="container well col-md-12">
		<div class="row">
			<div class="col-md-3">
				<?php echo $imageProfile; ?>
			</div>
			<div class="col-md-7">
				<h3><i class="fa fa-user-circle" aria-hidden="true"></i> <?php echo $first_name ." ". $last_name; ?></h3>
				<h5><i class="fa fa-envelope-o" aria-hidden="true"></i> <?php echo $email; ?></h5>
				<h5><i class="fa fa-sign-in" aria-hidden="true"></i> <?php echo $last_login; ?></h5>
			</div>
			<div class="col-md-2">
				<div class="btn-group">
					<a class="btn dropdown-toggle btn-info" data-toggle="dropdown" href="#">
						Действие
						<span class="icon-cog icon-white"></span><span class="caret"></span>
					</a>
					<ul class="dropdown-menu">
						<li><a href="<?php echo site_url();?>main/changeuser"><span class="icon-wrench"></span> Редакция</a></li>
					</ul>
				</div>
			</div>
		</div>




	</div>
	<div class="container well col-md-12">
		<center>
			<h1>Моя списък с "Любими"</h1>
		</center>
		<br><br>
		<?php
$query = $this->db->get_where('wishlist', array('user_id' => $_SESSION['id']));


foreach ($query->result() as $row)
{
	?>
		<div class="card" style="width: 100%;">
			<img class="card-img-top" src="https://about.gitlab.com/images/blogimages/package-hunter.png" alt="Card image cap" style="width:100% !important">
			<div class="card-body">
				<h5 class="card-title"><?php  echo $row->name;?></h5>
				<p class="card-text"><?php  echo $row->description;?></p>
				<a href="<?php  echo $row->url;?>" class="btn btn-primary">Прочети Повече</a>
			</div>
		</div>
		<hr>


		<?php
}
	?>
	</div>
</div>
