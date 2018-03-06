 <script type="text/javascript" src="http://ajax.googleapis.com/
ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function()
{
	$(".country").change(function()
	{
		var id = $(this).val();
		$.ajax
		({
			type: "POST",
			url: "ajex_state.php",
			data: {id:id,},
			success: function(html)
			{
				$(".city").html(html);
				//alert(html);
			}
		});
	});
});
</script>

Country :
<select name="country" class="country">
<option selected="selected">--Select Country--</option>
<?php
	include('db.php');
	$sql = mysqli_query($db, "select * from country");
	while($row = mysqli_fetch_array($sql, MYSQLI_ASSOC))
	{
		$id = $row['id'];
		$name = $row['name'];
		echo '<option value="'.$id.'">'.$name.'</option>';
	} 
?>
</select> <br/><br/>

City :
<select name="city" class="city">
<option selected="selected">--Select City--</option>
</select>