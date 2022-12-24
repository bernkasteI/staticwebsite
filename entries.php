<script src="assets/js/jquery-3.5.1.js"></script>
<?php			
 echo '<h3 align="center">Contact Form Data Results</h3>';
 echo '<table border = "1" width = "100%">';
 echo '<tr>';
 echo '<th>Record #</th>
 	   <th>First Name</th>
 	   <th>Last Name</th>
	   <th>E-mail</th>
	   <th>Username</th>
	   <th>Comments</th>';
 echo '</tr>';
 echo '<tbody id = "results">';
 echo '</tbody>';
 echo '</table>';

?>

<script>
	function refresh_div() {
		$.ajax({
			type: 'post',
		url: 'https://ec2-18-118-136-225.us-east-2.compute.amazonaws.com/HW13/query.php',
			success: function(data) {
				$('#results').html(data);
			}
		});
	};
	setInterval(function() { refresh_div(); }, 500);
</script>