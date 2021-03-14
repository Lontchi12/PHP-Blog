<!DOCTYPE html>
<html>
<head>
	<title>CRUD: CReate, Update, Delete PHP MySQL</title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>

<?php require_once('navbar.php') ?>

<?php  include('php_code.php'); ?>

<?php 
	if (isset($_GET['edit'])) {
		$id = $_GET['edit'];
		$update = true;
		$record = mysqli_query($db, "SELECT * FROM info WHERE id=$id");

		if (count($record) == 1 ) {
			$n = mysqli_fetch_array($record);
			$title = $n['title'];
			$post = $n['post'];
		}
        // echo gettype($record);
	}
?>


<div class="card">
<div class="card-title">
<h3>Add Your Blog Post</h3>
</div>
</div>
<form method="post" action="php_code.php" >
    
        
		<div class="input-group">
			<label>Title</label>
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <input type="text" name="title" placeholder="Add Title" value="<?php echo $title; ?>" style="height: 40px;">
            
		</div>
		<div class="input-group">
			<label>Post</label>
            <textarea name="post" id="" cols="80" rows="10"  placeholder="Your Post" ><?php echo $post; ?></textarea>
		</div>
		<div class="input-group">
            <?php if ($update == true): ?>
	        <button class="btn" type="submit" name="update"  >Update</button>
    <?php else: ?>
	            <button class="btn" type="submit" name="save" >Register</button>
    <?php endif ?>
		</div>
	</form>

    <script src="assets/js/jquery.slim.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>


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

</body>
</html>