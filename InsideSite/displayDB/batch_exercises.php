<?php
	//kiểm tra edit
	if(isset($_GET['edit'])){
		//lấy dữ liệu (nếu có)
		$sql = "select * from batch_exercises
				where id = '".$_GET['edit']."'";
		$stmt = $conn->prepare($sql);
		$stmt->execute();
		$profile=$stmt->fetch(PDO::FETCH_ASSOC);
		include_once 'editDB/batch_exercises_editDP.php';
		include_once 'editDB/batch_exercises_editDB.php';
		if(isset($error))
	    {
	      	foreach($error as $err)
	      	{
	          	?>
              	<div class="container body">
                  	<div class="main_container">
                      	<div class="right_col" role="main">
                        	<div class="alert alert-danger">
                            <i class="fa fa-warning"></i> &nbsp; <?php echo $err; ?>
                        	</div>
                      	</div>
                  	</div>
              	</div>
	          	<?php
	      	}
	  	}	
	}
	//kiểm tra delete
	else if(isset($_GET['del'])){
		$sql = "DELETE from batch_exercises
				where id = '".$_GET['del']."'";
		$stmt = $conn->prepare($sql);
		$stmt->execute();
		setcookie("success","xóa thành công",time()+1,"/","");
		header("location:manageDatabase.php?page=batch_exercises");
	}
	//kiểm tra insert
	else if(isset($_GET['insert'])){
		include_once 'insertDB/batch_exercises_insertDP.php';
		include_once 'insertDB/batch_exercises_insertDB.php';
		if(isset($error))
	    {
	      	foreach($error as $err)
	      	{
	          	?> 
              	<div class="right_col" role="main">
                	<div class="alert alert-danger">
                    	<i class="fa fa-warning"></i> &nbsp; <?php echo $err; ?>
                	</div>
              	</div>
	          	<?php
	      	}
	  	}
	}
	else{
		if(isset($_COOKIE['success'])){
			
			echo '<div class="right_col">';
			echo $_COOKIE['success'];
			echo '</div>';
		}	
?>
  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="right_col" role="main">
          <div class="row">
            <div class="col-md-12 col-sm-12 ">
              <div class="x_panel">
                <div class="row">
                  <div class="col-sm-12">
                    <div class="card-box table-responsive">
                    <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                      <thead>
                        <tr>
                          	<th>id</th>
							<th>name</th>
							<th>number topic</th>
					
							<th>start date</th>
							<th>deadline</th>
							<th>end date</th>
						
							<th>status</th>
						
							<th>classroom id</th>
							<th>created at</th>
							<th>updated at</th>
							<th>deleted at</th>
							<th>created by</th>
							<th>udpated by</th>
							<th>deleted by</th>
							<th>type</th>
							<th>content</th>
							<th>file id</th>
                        </tr>
                      </thead>

                      <tbody>
                        
<?php
	$sql = "select * from batch_exercises";
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	
	while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
		echo '<tr><td>'.$row['id'].'</td>';
		echo '<td>'.$row['name'].'</td>';
		echo '<td>'.$row['number_topic'].'</td>';
	
		echo '<td>'.$row['start_date'].'</td>';
		echo '<td>'.$row['deadline'].'</td>';
		echo '<td>'.$row['end_date'].'</td>';


		echo '<td>'.$row['status'].'</td>';

		echo '<td>'.$row['classroom_id'].'</td>';
		echo '<td>'.$row['created_at'].'</td>';
		echo '<td>'.$row['updated_at'].'</td>';
		echo '<td>'.$row['deleted_at'].'</td>';
		echo '<td>'.$row['created_by'].'</td>';
		echo '<td>'.$row['updated_by'].'</td>';
		echo '<td>'.$row['deleted_by'].'</td>';
		echo '<td>'.$row['type'].'</td>';
		echo '<td>'.$row['content'].'</td>';
		echo '<td>'.$row['file_id'].'</td>';
?>
		<td>
			<a href="manageDatabase.php?page=batch_exercises&&edit=<?php echo $row['id'];?>" class=" btn-outline-dark ">Sửa</a>
			<a href="manageDatabase.php?page=batch_exercises&&del=<?php echo $row['id'];?>" class=" btn-outline-dark ">Xóa</a>
		</td>
		</tr>
<?php
	}
?>

                      </tbody>
					</table>
					<a href="manageDatabase.php?page=batch_exercises&&insert" class="btn btn-outline-dark" >Thêm</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
	</div>
	
  </body>
<?php
	}
?>