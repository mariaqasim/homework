<?php 
	require_once("../keb/php/component.php");
 ?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>KEB</title>

	<!-- Fontawesome CDN -->

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

	<!-- Bootstrap CDN -->

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<!-- Custom Stylesheet -->

	<link rel="stylesheet" href="style.css">

</head>
<body>

	<!-- main start -->

	<main>
		<div class="container text-center">
			<h1 class="py-4 bg-dark text-light rounded"><i class="fas fa-swatchbook"></i> KICS BOOKS SHOP
			</h1>

			<div class="d-flex justify-content-center">
				<form action="" method="post" class="w-50">
                    <div class="py-2">
                         <?php inputElement("<i class='fas fa-id-badge'></i>","ID", "book_id",""); ?>
                    </div>
                    <div class="py-2">
                        <?php inputElement("<i class='fas fa-book'></i>","Book Name", "book_name",""); ?>
                    </div>
                    <div class="row pt-2">
                        <div class="col">
                            <?php inputElement("<i class='fas fa-people-carry'></i>","Publisher", "book_publisher",""); ?>
                        </div>
                        <div class="col">
                            <?php inputElement("<i class='fas fa-dollar-sign'></i>","Price", "book_price",""); ?>
                        </div>
					</div>

					<div class="d-flex justify-content-center">
						
						<?php buttonElement("btn-create","btn btn-success", "<i class='fas fa-plus'></i>" , "create", "data-toggle='tooltip' data-placement='bottom'title='Create'"); ?>
						<?php buttonElement("btn-read" , "btn btn-primary" , "<i class='fas fa-sync'></i>" , "read" , "data-toggle='tooltip' data-placement ='bottom' title='Read'");?>

						<?php buttonElement("btn-update","btn btn-light border","<i class='fas fa-pen-alt'></i>","update","data-toggle='tooltip' data-placement='bottom' title='Update'"); ?>
                        <?php buttonElement("btn-delete","btn btn-danger","<i class='fas fa-trash-alt'></i>","delete","data-toggle='tooltip' data-placement='bottom' title='Delete'"); ?>
					</div>					
				</form>
			</div>

			<!-- Bootstrap table -->

			<div class="d-flex table-data">
				<table class="table table-striped table-dark">
					<thead class="thead-dark">
						<tr>
							<th>ID</th>
                            <th>Book Name</th>
                            <th>Publisher</th>
                            <th>Book Price</th>
                            <th>Edit</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>1</td>
							<td>PHP Mysql</td>
							<td>KICS UET</td>
							<td>50</td>
							<td><i class="fas fa-edit btnedit"></i></td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</main>
	
</body>
</html>