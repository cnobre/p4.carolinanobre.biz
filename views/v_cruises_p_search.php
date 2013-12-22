 <?php
foreach ($data as $value) {
    echo ('<a href="#" onclick="return false" class="list-group-item '.$value['status']. '"> 
					<h4 class="list-group-item-heading">' . $value['cruiseID'] . '</h4>
					 <p class="list-group-item-text">
					  <strong>Contact Name:</strong>: ' . $value['contactName'] . '</br> <strong>Contact Email: </strong>: ' 
					 . $value['contactEmail'] . '</br>
					 <strong>Chief Scientist</strong>: ' . $value['chiefSci'] . '</br>
					 <strong>Vessel</strong>: ' . $value['vessel'] . '</br>
					 <strong>DBO Line</strong>: ' . $value['dboLine'] . '</br>
					  <strong>Year</strong>: ' . $value['year'] . '</br>
					 
					
					 
					 </p> </a>');
					 
					 
    
    // ("<option value='".$value['cruiseID']."'>".$value['cruiseID']."</option>\n");					 
};
if (empty($data)){
	echo(
	'<div class="alert alert-warning"> <strong>Oops!</strong> It seems no cruises match your search criteria! Please try again!</div>');
	
};
?>
						 
						 
