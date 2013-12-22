<div class="container theme-showcase">
      <!-- Header -->
      
      <h3>Search Criteria </h3>
      <div class="row">
         <div class="col-md-3">
            <div class="panel panel-default">
               <div class="panel-heading">
                  <h3 class="panel-title">
                     Select a DBO Line
                  </h3>
               </div>
               <div class="panel-body">
                  <select id="dboLine" class="selectpicker"  title="All DBO Lines" >
                  <option value ='0'>Any</option>
                  <option value ='1' data-subtext="St. Lawrence">DBO 1</option>
                  <option value ='2' data-subtext ="Chirikov">DBO 2</option>
                  <option value ='3' data-subtext ="Pt. Hope">DBO 3</option>
                  <option value ='4'data-subtext ="Pt. Lay">DBO 4</option>
                  <option value ='5' data-subtext ="Barrow Canyon">DBO 5</option>
                  </select>
               </div>
            </div>
            <div class="panel panel-default">
               <div class="panel-heading">
                  <h3 class="panel-title">
                     Select a Chief Scientist
                  </h3>
               </div>
               <div class="panel-body">
                  <select id="chiefSci" class="selectpicker" data-live-search="true" >
                     <option value='0'>Any</option>
                     <?php 
						 foreach ($chiefSci as $value)
						 {echo ("<option value='".$value['chiefSci']."'>".$value['chiefSci']."</option>\n");					 
						 }?>
                  </select>
               </div>
            </div>
            <div class="panel panel-default">
               <div class="panel-heading">
                  <h3 class="panel-title">
                     Select a Vessel
                  </h3>
               </div>
               <div class="panel-body">
                  <select id="vessel" class="selectpicker" data-live-search="true" >
                     <option value='0'>Any</option>
                        <?php 
						 foreach ($vessel as $value)
						 {echo ("<option value='".$value['vessel']."'>".$value['vessel']."</option>\n");					 
						 }?>
                  </select>
               </div>
            </div>
            <div class="panel panel-default">
               <div class="panel-heading">
                  <h3 class="panel-title">
                     Enter a Cruise Id
                  </h3>
               </div>
               <div class="panel-body">
                  <select id = "cruiseID" class="selectpicker" data-live-search="true" >
                     <option value='0'>Any</option>
                     <?php 
						 foreach ($cruiseID as $value)
						 {echo ("<option value='".$value['cruiseID']."'>".$value['cruiseID']."</option>\n");					 
						 }?>
                  </select>
               </div>
            </div>
            <div class="panel panel-default">
               <div class="panel-heading">
                  <h3 class="panel-title">
                     Select a Year
                     <!--<span class="glyphicon glyphicon-send"></span>-->
                  </h3>
               </div>
               <div class="panel-body">
                  <select id = "sDate" class="selectpicker" data-live-search="true" >
                     <option value='0'>Any</option>
                  </select>
               </div>
            </div>
         </div>
         <div class="col-md-9" id="right_panel">
            <div class="panel panel-default ">
               <div class="panel-heading">
                  <h3 class="panel-title">Cruise Results</h3>
               </div>
               <div class="panel-body" >
                  <div class="list-group" id="results">
                  </div>
               </div>
            </div>
            <!--<button type="button" class="btn btn-lg btn-success">Download Data for Selected Cruises</button>-->
         </div>
        
      </div>
      
      
      </div>
      
      
    