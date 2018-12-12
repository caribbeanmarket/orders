<?php require 'C:\wamp\www\orders\app\views\header.php'; ?>

<?php require 'C:\wamp\www\orders\app\views\menu.php'; ?>
<?php  
	$colspan="9";
	if($_SESSION['orders']['role'] == 6)
	{
		$colspan="8";
	}
	$type = array(
		0 => "Normal", 
		1 => "Vendor",
		2 => "Section", 
		3 => "Vendor section", 
		4 => "Excel"
		);
	$r_status = array(1 => "New", 2 => "Edited", 3 => "Pending", 4 => "Received", 5 => "Ignored");
	$status = array(0 => "OPEN", 1 => "CLOSED");
?>

<div class="row newReport">
	
	<table class="table table-bordered">
		  <thead>
		  	<tr><th colspan="<?= $colspan ?>">ORDERS</th></tr>
		  	<tr>
		  	<?php  
	  		if($_SESSION['orders']['role'] == 7)
	  		{
	  			echo '<th class="tdminus"></th>';
	  		}
		  	?>
			  	<th>ORDER NAME</th>
			  	<th>ORDER DATE</th>
			  	<th>SALES FROM DATE</th>
			  	<th>SALES TO DATE</th>
			  	<th>USER</th>
			  	<th>STATUS</th>
			  	<th>TYPE</th>
		  	</tr>
		  </thead>
		  <tbody>
		  	<?php 
		  	if(!empty($data['reports']))
		  	{
		  		for($i=0;$i<count($data['reports']);$i++)
		  		{
		  			echo "<tr>";
		  			if($_SESSION['orders']['role'] == 7)
			  		{
		  				echo "<td class = 'tdminus'><a href='/orders/public/reports/delete_report/".$data['reports'][$i]['id']."'><span class='glyphicon glyphicon-minus'></span></a></td>";
			  		}
		  			echo "<td><a href='/orders/public/reports/single/".$data['reports'][$i]['id']."'>".strtoupper($data['reports'][$i]['name'])."</a></td>";
		  			echo "<td>".date("D, F d-Y H:i:s",strtotime($data['reports'][$i]['timestamp']))."</td>";
		  			echo "<td>".$data['reports'][$i]['date_from']."</td>";
		  			echo "<td>".$data['reports'][$i]['date_to']."</td>";
		  			echo "<td>".$data['reports'][$i]['user_firstname']." ".$data['reports'][$i]['user_lastname']."</td>";
		  			echo "<td>".$status[$data['reports'][$i]['status']]."</td>";
		  			echo "<td>".strtoupper($type[$data['reports'][$i]['type']])."</td>";
		  			
		  			echo "<tr>";
		  		}
		  	}
		  	?>
		  </tbody>
		  <tfoot>
		  	<tr><th colspan="<?= $colspan ?>"></th></tr>
		  </tfoot>
		</table>
</div>

<?php require 'C:\wamp\www\orders\app\views\footer.php'; ?>