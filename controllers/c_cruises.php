<?php

class cruises_controller extends base_controller
{
    
    /*-------------------------------------------------------------------------------------------------
    
    -------------------------------------------------------------------------------------------------*/
    public function __construct()
    {
        parent::__construct();
    }
    
    /*-------------------------------------------------------------------------------------------------
    Accessed via http://localhost/cruises/index/
    -------------------------------------------------------------------------------------------------*/
    public function index()
    {
        
        # Any method that loads a view will commonly start with this
        # First, set the content of the template with a view file
        $this->template->content = View::instance('v_cruises_search');
        
        # Now set the <title> tag
        $this->template->title = "DBO - Cruise Search";
        
        $q       = "SELECT DISTINCT dboLine FROM cruises";
        # Query Database
        $results = DB::instance(DB_NAME)->select_rows($q);
        
       $this->template->content->dboLine =($results);
        
        $q       = "SELECT DISTINCT chiefSci FROM cruises";
        # Query Database
        $results = DB::instance(DB_NAME)->select_rows($q);
        
        $this->template->content->chiefSci = ($results);
        
        $q       = "SELECT DISTINCT vessel FROM cruises";
        # Query Database
        $results = DB::instance(DB_NAME)->select_rows($q);
        
        $this->template->content->vessel = ($results);
        
        $q       = "SELECT DISTINCT cruiseID FROM cruises";
        # Query Database
        $results = DB::instance(DB_NAME)->select_rows($q);
        
        $this->template->content->cruiseID = ($results);
        
       
        
        $client_files_body                 = Array(
            "/js/cruises_search.js"
        );
        $this->template->client_files_body = Utils::load_client_files($client_files_body);
        
        # Render the view
        echo $this->template;
        
    } # End of method
    
    public function submit($error = NULL)
    {
        
        #Set up the view
        $this->template->content = View::instance('v_cruises_submit');
        
        # Pass data to the view
        $this->template->content->error = $error;
        
        
        #Render the view
        echo $this->template;
    }
    
    
    
    
    public function p_submit()
    {
        
        
        # Checking for empty fields
        
        if ("" == trim($_POST['contactName']) || "" == trim($_POST['contactEmail']) || "" == trim($_POST['dboLine']) || "" == trim($_POST['chiefSci'] || "" == trim($_POST['vessel'] || "" == trim($_POST['cruiseID']) || "" == trim($_POST['sDate']) || "" == trim($_POST['eDate'])))) {
            Router::redirect("/cruises/submit/missingField");
        }
        
        #Checking for duplicate cruises
        
        $q = "SELECT * FROM cruises WHERE cruiseID = '" . $_POST['cruiseID'] . "'";
        
        # Query Database
        $cruise_exists = DB::instance(DB_NAME)->select_rows($q);
        
        # If cruise exists in database
        if ($cruise_exists) {
            //Redirect to error page 
            Router::redirect('/cruises/submit/cruiseExists');
        }
        
        $_POST['status'] = 'submitted';
        
        
        DB::instance(DB_NAME)->insert('cruises', $_POST);
        
        
        //print_r($_POST);
        
        Router::redirect("/cruises/thanks");
        
    }
    
    public function thanks()
    {
        
        #Set up the view
        $this->template->content = View::instance('v_cruises_thanks');
        
        
        #Render the view
        echo $this->template;
    }
    
    
    public function p_search()
    {
        
        //print_r($_POST);
        
        $dboLine = $_POST['dboLine'];
        $chiefSci = $_POST['chiefSci'];
        $cruiseID = $_POST['cruiseID']; 
        $vessel = $_POST['vessel'];
                
        $view = new View('v_cruises_p_search');
        
        //$q = "SELECT * FROM cruises WHERE " . $_POST['header'] . " = '" . $_POST['value'] . "'";
        
        unset($sql);
        
        if ($dboLine>0) {
			$sql[] = " dboLine = '$dboLine' ";
		}
		
		if ($chiefSci!='0') {
			$sql[] = " chiefSci = '$chiefSci' ";
		}
		
	    if ($cruiseID!='0') {
			$sql[] = " cruiseID = '$cruiseID' ";
		}
		
	    if ($vessel!='0') {
			$sql[] = " vessel = '$vessel' ";
		}
		
		$query = "SELECT * FROM cruises";
		
		if (!empty($sql)) {
		    $query .= ' WHERE ' . implode(' AND ', $sql);
		    
		 }
		
		//echo $query;

 
              # Query Database
        $cruise = DB::instance(DB_NAME)->select_rows($query);
        
        //$view->name=($_POST['name']);
        $view->data = ($cruise);
        
        
        #Render the view
        echo $view;
    }
    
    
    
    
    
} # 
