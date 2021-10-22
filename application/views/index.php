 <style>
 	a {
 		text-decoration: none;
 		display: inline-block;
 		padding: 8px 16px;
 	}

 	a:hover {
 		background-color: #ddd;
 		color: black;
 	}

 	.previous {
 		background-color: #f1f1f1;
 		color: black;
 	}

 	.next {
 		background-color: #04AA6D;
 		color: white;
 	}

 	.round {
 		border-radius: 50%;
 	}

 	.wish_sucsess_msg {
 		padding: 20px;
 		width: 100%;
 		background: #00800094;
 		color: white;
 		margin-bottom: 30px;
 	}

 </style>

 <body>
 	<?php
include 'lib/SausageHTTP.php';
	
$page = isset($_GET['page']) ? $_GET['page'] : '';

  
 if(empty($page)){
	 $page = 1;
 }else{
	 $page = $_GET['page'];
 }
/**
* Tips: Please always set HEADER for POST Request
*/

$client = new SausageHTTP\SausageHTTP\SausageHTTP();
$client->setRequest([
		"URL" => 'https://libraries.io/api/search?keywords=php&languages=PHP&sort=latest_release_published_at&per_page=10&page='.$page.'&api_key=3fe6bc1b0864b074c5af2beb85945cf1', 
		"METHOD" => 'POST', 
		"HEADER" => array(
						'Content-Type: application/json'
					),		
		"OPTIONS" => array(
			'languages' => 'PHP',
			'order' => 'desc',
			'sort' => 'latest_release_published_at',
		) 
	]);

 
// Decoding response from JSON to array
$result = json_decode($client->response, 1);
?>
 	<div class="container h-100">
 		<div class="d-flex justify-content-center h-100">
 			<div class="searchbar">
 				<form action="search">
 					<input class="search_input" type="text" name="search" placeholder="Търсене..." style=" width: 89%; border-radius: 20px; text-align: center; ">
 					<input type="submit" value="Търси" style=" background: green; color: white; border-radius: 16px; border: 0; cursor: pointer; padding: 4px; width: 10%;text-align: center;">
 				</form>
 			</div>
 		</div>
 	</div>
 	<hr>
 	<div class="container">
 		<div class="row-fluid ">
 			<!-- my php code which uses x-path to get results from xml query. -->
 			<?php
//echo $_POST['name'];
$package_name = isset($_POST['name']) ? $_POST['name'] : '';
$package_desc = isset($_POST['description']) ? $_POST['description'] : '';
$package_date = isset($_POST['latest_release_published_at']) ? $_POST['latest_release_published_at'] : '';
$package_url = isset($_POST['package_manager_url']) ? $_POST['package_manager_url'] : '';
$package_submit = isset($_POST['wishlist']) ? $_POST['wishlist'] : '';


if(isset($_POST['wishlist']))
{
	$data = array(
		'user_id' => $_SESSION['id'],
        'name' => $package_name,
        'description'  => $package_desc,
        'date'  => $package_date,
		'url' => $package_url
		
);
   $this->db->insert('wishlist',$data);



if($this->db->affected_rows() > 0){
	echo "<div class='wish_sucsess_msg'>Успешно добавихте артикула към своя Wishlist</div>";
}
//$sql = $this->db->set($data)->get_compiled_insert('wishlist');
 
}

?>
 			<div>
 				PHP ТОП 10 Последно обновени пакета
 				<br><br>
 				<table class="table">

 					<tr>
 						<td>Име</td>
 						<td>Описание</td>
 						<td>Дата</td>
 						<td>Линк</td>
 						<td>WishList</td>
 					</tr>

 					<?php foreach ( $result as $elements) : ?>
 					<tr>
 						<td><?php echo $elements['name'];?></td>
 						<td><?php echo $elements['description'];?></td>
 						<td><?php echo $elements['latest_release_published_at'];?></td>
 						<td>
 							<a href="<?php echo $elements['package_manager_url'];?>" target="_blank">Прочети повече</a>

 						</td>
 						<td>
 							<form method="post" action="" role="form">
 								<input name="name" type="hidden" value="<?php echo $elements['name'];?>">
 								<input name="description" type="hidden" value="<?php echo $elements['description'];?>">
 								<input name="latest_release_published_at" type="hidden" value="<?php echo $elements['latest_release_published_at'];?>">
 								<input name="package_manager_url" type="hidden" value="<?php echo $elements['package_manager_url'];?>">
 								<input type="submit" name="wishlist" style=" border-radius: 50px; font-size: 12px; border: 0;padding: 10px; " Value="Добави в моя WishList">
 							</form>



 						</td>





 					</tr>


 					<?php endforeach; ?>


 				</table>
 			</div>

 			<center>
 				<a href="?page=<?php echo $page - 1;?>" class="previous">&laquo; Предишна</a>
 				<a href="?page=<?php echo $page + 1;?>" class="next">Следваща &raquo;</a>
 			</center>
 			<br><br>
 		</div>
 	</div>
 	<!--container div  -->
