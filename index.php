
<?php  include('php_code.php'); ?>

<!DOCTYPE html>
<html>
<head>
	<title>CRUD: CReate, Update, Delete PHP MySQL</title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>

<?php require_once('navbar.php') ?>

<div class="jumbotron text-center text-white bg-dark my-5" style="background-color: #0d1521;">
    <h1 class="display-4">Lontchi Lionelle</h1>
    <p class="lead"> Welcome to my Blog Post </p>
    <hr class="my-4">
    <p>What do you want to read about today?</p>
	<a href="addpost.php" class="btn btn-primary">Add Post</a>
	
    
</div>

<?php if (isset($_SESSION['message'])): ?>
	<div class="msg">
		<?php 
			echo $_SESSION['message']; 
			unset($_SESSION['message']);
		?>
	</div>
<?php endif ?>


<?php $results = mysqli_query($db, "SELECT * FROM info"); ?>

	
	<div class="container">
	<div class="row">
	<?php while ($row = mysqli_fetch_array($results)) { ?>
		
		
				<div class=" col-md-4 ">
					<div class="card">
						<img class="card-img-top" src="assets/images/nature.jpg" alt="Card image cap" style="height: 200px;">
						<div class="card-body">
							<h5 class="card-title"><?php echo $row['title']; ?></h5>
							<p class="card-text"><?php echo $row['post']; ?></p>
							<a href="addpost.php?edit=<?php echo $row['id']; ?>" class="edit_btn  pl-3 pr-3" >Edit</a>
							<a href="php_code.php?del=<?php echo $row['id']; ?>" class="del_btn">Delete</a>
						</div>
					</div>
				</div>
			
		

	<?php } ?>
	</div>
	</div>

	
	<footer>
     <div class="container-fluid bg-primary py-3">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
            <div class="row py-0">
          <div class="col-sm-1 hidden-md-down">
              
            </div>
            <div class="col-sm-11 text-white text-center">
                <div><h4>Lontchi Lionelle</h4>
                    <p>   <span class="header-font">M</span>y<span class="header-font">B</span>log</p>
                </div>
            </div>
        </div>
        </div>
        
           
      </div>
    </div>
    
</footer>


	<script src="assets/js/jquery.slim.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
</body>
</html>