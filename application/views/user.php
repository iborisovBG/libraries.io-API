    <div class="container">
    	<h2>Потребители</h2>
    	<table class="table table-hover table-bordered table-striped">
    		<tr>
    			<th>
    				Име
    			</th>
    			<th>
    				Потребителско име
    			</th>
    			<th>
    				Последен Логин
    			</th>
    			<th>
    				Роля
    			</th>
    			<th>
    				Статус
    			</th>
    			<th colspan="2">
    				Промени
    			</th>
    		</tr>
    		<?php
                    foreach($groups as $row)
                    { 
                    if($row->role == 1){
                        $rolename = "Админ";
                    }elseif($row->role == 4){
                        $rolename = "Потребител";
                    }
                    
                    echo '<tr>';
                    echo '<td>'.$row->first_name.'</td>';
                    echo '<td>'.$row->email.'</td>';
                    echo '<td>'.$row->last_login.'</td>';
                    echo '<td>'.$rolename.'</td>';
                    echo '<td>'.$row->status.'</td>';
                    echo '<td><a href="'.site_url().'main/changelevel"><button type="button" class="btn btn-primary">Роля</button></a></td>';
                    echo '<td><a href="'.site_url().'main/deleteuser/'.$row->id.'"><button type="button" class="btn btn-danger">Изтрии</button></a></td>';
                    echo '</tr>';
                    }
                ?>
    	</table>
    </div>
