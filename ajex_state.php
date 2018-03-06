 <?php
include('db.php');
if($_POST['id'])
{
	$id = $_POST['id'];
	$sql = mysqli_query($db, "SELECT * FROM state INNER JOIN country ON country.id = state.country_id WHERE state.country_id = '$id'");
	while($row = mysqli_fetch_array($sql, MYSQLI_ASSOC))
	{
		$id = $row['id'];
		$data = $row['state_name'];
		echo '<option value="'.$id.'">'.$data.'</option>';
	}
}
?>