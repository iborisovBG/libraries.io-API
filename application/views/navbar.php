        <?php
        //check user level
	    $dataLevel = $this->userlevel->checkLevel($role);

        $result = $this->user_model->getAllSettings();
	    $site_title = $result->site_title;
	    //check user level
        ?>
        <nav class="navbar navbar-inverse">
        	<div class="container">
        		<div class="container-fluid">
        			<!-- Brand and toggle get grouped for better mobile display -->
        			<div class="navbar-header">
        				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        					<span class="sr-only">Toggle navigation</span>
        					<span class="icon-bar"></span>
        					<span class="icon-bar"></span>
        					<span class="icon-bar"></span>
        				</button>
        				<a class="navbar-brand" href="<?php echo site_url();?>main/"><?php echo $site_title; ?></a>
        			</div>

        			<!-- Collect the nav links, forms, and other content for toggling -->
        			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        				<ul class="nav navbar-nav">
        					<li><a href="<?php echo site_url();?>main/"><i class="fa fa-tachometer" aria-hidden="true"></i> Табло</a></li>
        					<?php
                        if($dataLevel == 'is_admin'){ //Check user level if is Admin
                            echo'
                            <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-users" aria-hidden="true"></i> Потребители <span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                <li><a href="'.site_url().'main/users">Потребители</a></li>
                                <li><a href="'.site_url().'main/adduser">Добави потребител</a></li>
                                <li><a href="'.site_url().'main/banuser">Блокирай потребител</a></li>
                                <li><a href="'.site_url().'main/changelevel">Роли</a></li>
                              </ul>
                            </li>
                            <li><a href="'.site_url().'main/settings"><i class="glyphicon glyphicon-cog" aria-hidden="true"></i> Настройки</a></li>
                            ';
                        }
                    ?>
        				</ul>
        				<ul class="nav navbar-nav navbar-right">
        					<li class="dropdown">
        						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user-circle" aria-hidden="true"></i> <?php echo $first_name; ?> <span class="caret"></span></a>
        						<ul class="dropdown-menu">
        							<li><a href="<?php echo site_url();?>main/profile"><?php echo $email; ?></a></li>
        							<li><a href="<?php echo site_url();?>main/changeuser">Редактирай профила</a></li>
        							<li role="separator" class="divider"></li>
        							<li><a href="<?php echo base_url().'main/logout' ?>">Изход</a></li>
        						</ul>
        					</li>
        				</ul>
        			</div><!-- /.navbar-collapse -->
        		</div><!-- /.container-fluid -->
        	</div>
        </nav>
        <style>
        	.navbar-nav {
        		display: inline-block !important;
        		flex-direction: column;
        		padding-left: 0;
        		margin-bottom: 0;
        		list-style: none;
        	}

        	.navbar-brand {
        		padding-top: 1.3125rem !important;
        		padding-bottom: .3125rem !important;
        		margin-right: 1rem !important;
        		font-size: 2.25rem !important;
        		text-decoration: none;
        		white-space: nowrap;
        	}

        </style>
