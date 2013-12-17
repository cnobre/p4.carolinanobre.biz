<div class="container theme-showcase">
      <!-- Header -->
      
      <h3>Search Criteria </h3>
      <div class="row">
         <div class="col-md-3">
            <div class="panel panel-default">
               <div class="panel-heading">
                  <h3 class="panel-title">
                     Select a DBO Line
                     <!--<span class="glyphicon glyphicon-minus"></span> 
                        <span class="glyphicon glyphicon-minus"></span> -->
                  </h3>
               </div>
               <div class="panel-body">
                  <select id="dbo" class="selectpicker" multiple title="All DBO Lines" >
                     <option value ='1'>St. Lawrence (DBO 1)</option>
                     <option value ='2'>Chirikov (DBO 2)</option>
                     <option value ='3'>Pt. Hope (DBO 3)</option>
                     <option value ='4'>Pt. Lay (DBO 4)</option>
                     <option value ='5'>Barrow Canyon (DBO 5)</option>
                  </select>
               </div>
            </div>
            <div class="panel panel-default">
               <div class="panel-heading">
                  <h3 class="panel-title">
                     Select a Chief Scientist
                     <!--<span class="glyphicon glyphicon-user"></span> -->
                  </h3>
               </div>
               <div class="panel-body">
                  <select id="chief_sci" class="selectpicker" data-live-search="true" >
                     <option value='0'>Any</option>
                  </select>
               </div>
            </div>
            <div class="panel panel-default">
               <div class="panel-heading">
                  <h3 class="panel-title">
                     Select a Vessel
                     <!--<span class="glyphicon glyphicon-plane"></span>-->
                  </h3>
               </div>
               <div class="panel-body">
                  <select id="vessel" class="selectpicker" data-live-search="true" >
                     <option value='0'>Any</option>
                  </select>
               </div>
            </div>
            <div class="panel panel-default">
               <div class="panel-heading">
                  <h3 class="panel-title">
                     Enter a Cruise Id
                     <!--<span class="glyphicon glyphicon-text-height"></span>-->
                  </h3>
               </div>
               <div class="panel-body">
                  <select id = "cruise_id" class="selectpicker" data-live-search="true" >
                     <option value='0'>Any</option>
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
                  <select id = "year" class="selectpicker" data-live-search="true" >
                     <option value='0'>Any</option>
                  </select>
               </div>
            </div>
         </div>
         <div class="col-md-3" id="right_panel">
            <div class="panel panel-default ">
               <div class="panel-heading">
                  <h3 class="panel-title">Cruise Results</h3>
               </div>
               <div class="panel-body">
                  <div class="list-group">
                  </div>
               </div>
            </div>
            <!--<button type="button" class="btn btn-lg btn-success">Download Data for Selected Cruises</button>-->
         </div>
         <div class="col-md-6">
            <div class="panel panel-default" >
               <div class="page-header" id="time_series_title">
                  <h2>Density of DBO occupations <br><small>mouse over a month to see the no. of occupations </small></h2>
               </div>
               <div class="panel-body" id="time_series" >
               </div>
            </div>
         </div>
      </div>
      
      <div class = "well"> Features to implement for P4: 
      <ul>
      <li>The functionality of the "Get Cruise Data" buttons (get data from server) </li>
      <li>Store data in SQL database instead of data.js file</li>
      <li> Ability to submit data as well as retrieve data</li> 
      </ul> 
       </div>
      </div>
      
      
      
      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
      <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
      <script src="js/data.js"></script>
      <script src="js/dbo.js"></script>
      <script src="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/js/bootstrap.min.js"></script>
      <script src="http://silviomoreto.github.io/bootstrap-select/javascripts/bootstrap-select.js"></script>
      <script type="text/javascript">
         $(document).ready(function(e) {
             $('.selectpicker').selectpicker();
         });
      </script>