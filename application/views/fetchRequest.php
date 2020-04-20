<?php
$connect = mysqli_connect("localhost", "root", "", "loginphp");
$output = '';
if(isset($_POST["query"]))
{
	$search = mysqli_real_escape_string($connect, $_POST["query"]);
	$query = "
	SELECT * FROM payment 
	WHERE id LIKE '%".$search."%'
	OR stuff_name LIKE '%".$search."%' 
	OR staff_id LIKE '%".$search."%' 
	OR date LIKE '%".$search."%' 
	OR status LIKE '%".$search."%'
	";
}
else
{
	$query = "
	SELECT * FROM payment ORDER BY id";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
	$output .= '<div class="table-responsive">
					<table class="table table bordered">
						<tr class="table-primary">
							<th>ID</th>
							<th>Stuff</th>
							<th>Staff ID</th>
							<th>Date</th>
							<th>Action</th>
						</tr>';
	while($row = mysqli_fetch_array($result))
	{
		
		$output .= '
			<tr>
				<td>'.$row["id"].'</td>
				<td>'.$row["stuff_name"].'</td>
				<td>'.$row["staff_id"].'</td>
				<td>'.$row["date"].'</td>
				<td>
						<button type="button" class="btn btn-primary">
                                            <span class="fab fa-facebook-messenger"></span>
                        </button>
                        <button type="button" class="btn btn-success">
                                            <span class="fas fa-check"></span>
                        </button>
                        <button type="button" class="btn btn-danger">
                                            <span class="fas fa-trash-alt"></span>
                        </button>
				</td>
			</tr>
		';
	}
	echo $output;
}
else
{
	echo 'Data Not Found';
}
?>