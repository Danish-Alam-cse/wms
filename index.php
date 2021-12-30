<?php include("config.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= SITE_NAME; ?></title>

    <link rel="stylesheet" href="bootstrap.css">
    <script src="jquery-3.5.1.min.js"></script>
    <script src="bootstrap.js"></script>
    
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
  
    
<nav class="navbar navbar-expand-lg bg-dark navbar-dark">
    
    
    <div class="container">
    <a href="index.php" class="navbar-brand">WMS</a>
    <ul class="navbar-nav me-auto">
        <li class="nav-item"><a href="quarter.php" class="nav-link">Quarter</a></li>
    </ul>
       
    <form action="" method="get" class="d-flex mx-auto">
              <input type="search" name="search" class="form-control form-control-sm" size="70" placeholder="Search here (e.g sbi loan,sbi etc) ">
              <input type="submit" name="find" value="Search" class="btn btn-success btn-sm ms-1">
          </form>
</nav>
<div class="container">
        <div class="row mt-2">
            <div class="col-lg-9">
            <?php 
            
                
                   if(isset($_GET['find'])){
                    $queried = mysqli_real_escape_string($connect, 
                    preg_replace('/\s+/', ' ',trim($_GET['search'])));

                    if(strpos($queried,", ")){
                        $query = str_replace(", "," ",$queried);
                        $keys = explode(" ",$query);
                    } else if(strpos($queried,",")){
                        $query = str_replace(","," ",$queried);
                        $keys = explode(" ",$query);	
                    } else {
                        $keys = explode(" ",$queried);
                    }
                    $sql = "SELECT * FROM post WHERE content LIKE '%$queried%' ";
                    foreach($keys as $k){
                        $sql .= " OR content LIKE '%$k%' ";
                    }
                    
                    
                       
                    $call = mysqli_query($connect, $sql);
                   }
                   else{
                     $call = mysqli_query($connect,"SELECT * FROM post");    
                     
                   }
                   ?>
                    <table class="table table-bordered table-hover table-responsive">

                        <tr>
                            <th>id</th>
                            <th>Content</th>
                            <th>Action</th>


                            </tr>
                
                        <?php while($row = mysqli_fetch_array($call)):
                    ?>

                   

                        <tr>
                            <td><?= $row['id'];?></td>
                            <td><h2 class="lead mb-0" style="max-width:800px"><?= $row['content'];?></h2></td>
                            <td>
                                <button type="button"  class="btn btn-danger" data-id="<?php echo $row['id']; ?>"
                                 onclick="confirmDelete(this);">
					        Delete
                        </a></td>

                        </tr>   
                    
                    <?php 
                    
                        endwhile;
                    
                    ?>
                    </table>
                
            </div>
            <div class="col-lg-3">
                 
                 <div class="card">
                     <div class="card-header">
                     <h2 class="lead">Insert Post here</h2>
                     </div>
                     <div class="card-body">
                         
                         <form action="index.php" method="post" enctype="multipart/form-data">
                            
                            <div class="form-group">
                                <label class="m-0 p-0 text-muted small">Content</label>
                                <input type="text" class="form-control" name="content">
                            </div>
                           
                            
                            <div class="form-group">
                                <input type="submit" class="btn btn-success mt-1 form-control" name="send" value="Insert Post">
                            </div>
                         </form>
                     </div>
                 </div>
            
            </div>
        </div>
                    </div>
    </div>
    
    <?php
    if(isset($_POST['send'])):
        $content = $_POST['content'];
        $query = mysqli_query($connect,"INSERT INTO post (content) value ('$content')");
    
        if($query):
            redirect('index');
        else:
            echo "Fail";
        endif;
    
    endif;
    ?>

<script>
	function confirmDelete(self) {
		var id = self.getAttribute("data-id");

		document.getElementById("form-delete-user").id.value = id;
		$("#myModal").modal("show");
	}
</script>

<div id="myModal" class="modal">
	<div class="modal-dialog">
		<div class="modal-content">
			
			<div class="modal-header">
				<h4 class="modal-title">Delete User</h4>
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>

			<div class="modal-body">
				<p>Are you sure you want to delete this user ?</p>
				<form method="GET" action="" id="form-delete-user">
					<input type="hidden" name="id">
                    
				</form>
			</div>

			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button type="submit" form="form-delete-user" class="btn btn-danger">Delete</button>
			</div>

		</div>
	</div>
</div>
    
   
    
</body>
</html>

<?php 
 


if(isset($_GET['id'])){
	$id = $_GET['id'];

	$query = mysqli_query($connect,"DELETE FROM post where id = '$id'");

	if($query){
		redirect('index');
        
	}
	else{
		echo "not deleted";
	}
}

?>