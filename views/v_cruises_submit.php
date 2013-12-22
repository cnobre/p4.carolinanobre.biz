<div class="container theme-showcase">
   <!-- Header -->
   <h3>Submit Cruise Data </h3>
   <div class="row">
      <div class="col-md-8">
         <div class="well">
         

<form method ='POST' action = '/cruises/p_submit' id="submit_data_form">
            <div class="input-group input-group-lg padded" >
               <span class="input-group-addon">Name</span>
               <input type="text" class="form-control"  name="contactName" placeholder="Contact person for data" id="contactName">
            </div>
            <div class="input-group input-group-lg padded" >
               <span class="input-group-addon">Email </span>
               <input type="text" class="form-control"  name="contactEmail" placeholder="Email for contact person above" id="contactEmail">
            </div>
            
                   <div class="padded">
              <select id="dbo" class="input-group input-group-lg selectpicker" data-width="100%" name="dboLine" title="All DBO Lines"  >
              	  <option value ='0'>Select a DBO Line</option>
                  <option value ='1' data-subtext="St. Lawrence">DBO 1</option>
                  <option value ='2' data-subtext ="Chirikov">DBO 2</option>
                  <option value ='3' data-subtext ="Pt. Hope">DBO 3</option>
                  <option value ='4'data-subtext ="Pt. Lay">DBO 4</option>
                  <option value ='5' data-subtext ="Barrow Canyon">DBO 5</option>
               </select>
               </div>
               
               
            <div class="input-group input-group-lg padded">
               <span class="input-group-addon">Cruise Dates </span>
               <input type="text" class="form-control"  name="sDate" placeholder="Start Date in mm-dd-yyyy format">
               <input type="text" class="form-control"   name="eDate" placeholder="End Date in mm-dd-yyyy format">
            </div>
            <div class="input-group input-group-lg padded">
               <span class="input-group-addon">Cruise ID</span>
               <input type="text" class="form-control"  name="cruiseID" placeholder="ex: HLY1303">
            </div>
            <div class="input-group input-group-lg padded">
               <span class="input-group-addon">Chief Scientist</span>
               <input type="text" class="form-control"  name="chiefSci" placeholder="Chief Scientist">
            </div>
            <div class="input-group input-group-lg padded">
               <span class="input-group-addon">Vessel </span>
               <input type="text" class="form-control"  name="vessel" placeholder="ex: Healy">
            </div>
            
            
     
            
        <div class = " get_data" >
    <input type ='submit' class="btn btn-lg btn-primary" value = 'Submit Cruise Info'>
    </div>
            </form>
            
            <div id='results'></div>
            
<?php if(isset($error) && $error == 'missingField'): ?>
	<div class='error'>
		Submit failed. Please make sure all fields have values!
	</div>
<br>
<?php endif; ?>

<?php if(isset($error) && $error == 'cruiseExists'): ?>
<div class='error'>
This cruise has already been submitted to the database! 
</div>
<br>
<?php endif; ?>

<?php if(isset($error) && $error == 'dboLine'): ?>
<div class='error'>
* Please Select a DBO Line! *
</div>
<br>
<?php endif; ?>

<?php if(isset($error) && $error == 'invalidDates'): ?>
<div class='error'>
* Cruise start date must be before end date! * 
</div>
<br>
<?php endif; ?>

<?php if(isset($error) && $error == 'invalidEmail'): ?>
<div class='error'>
* Oops, email address entered seems to be invalid! * 
</div>
<br>
<?php endif; ?>

           

 <!-- <div class = "padded"><span> <button type="button" class="btn btn-default ">Upload Files</button></span></div>
            
            
           <input type = "submit" class = "get_data padded send"><span> <button type="button" class="btn-lg btn-success">Submit Data</button></span></div> -->
               
               
         </div>
        
            
           
         
      </div>
   <div class="col-md-4" id="right_panel">
   <div >
     <img src="/imgs/arctic_image.jpg" alt="Arctic Satellite Image" width="400" >
     </div>
</div>
</div>
