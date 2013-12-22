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
        
        $this->template->content->dboLine = ($results);
        
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
        
        $q       = "SELECT DISTINCT year FROM cruises ORDER BY year";
        # Query Database
        $results = DB::instance(DB_NAME)->select_rows($q);
        
        $this->template->content->year = ($results);
        
        
        
        $client_files_body                 = Array(
            "/js/cruises_search.js"
        );
        $this->template->client_files_body = Utils::load_client_files($client_files_body);
        
        
        # Render the view
        echo $this->template;
        
        $view = new View('v_cruises_p_search');
        //$view->name=($_POST['name']);
        
        $q       = "SELECT * FROM cruises";
        # Query Database
        $results = DB::instance(DB_NAME)->select_rows($q);
        
        $view->data = ($results);
        
        
        #Render the view
        //echo $view;
        
        
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
        
        if ("" == trim($_POST['contactName']) || "" == trim($_POST['contactEmail']) || "0" == trim($_POST['dboLine']) || "" == trim($_POST['chiefSci'] || "" == trim($_POST['vessel'] || "" == trim($_POST['cruiseID']) || "" == trim($_POST['sDate']) || "" == trim($_POST['eDate'])))) {
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
        
        $_POST['sDate'] = strtotime($_POST['sDate']);
        
        $_POST['eDate'] = strtotime($_POST['eDate']);
        
        $_POST['year'] = date('Y', $_POST['sDate']);
        
        # If start date is after end date
        if ($_POST['sDate'] > $_POST['eDate']) {
            //Redirect to error page 
            Router::redirect('/cruises/submit/invalidDates');
        }
        
        if (!filter_var(trim($_POST['contactEmail']), FILTER_VALIDATE_EMAIL)) {
            //Redirect to error page 
            Router::redirect('/cruises/submit/invalidEmail');
            
        }
        
        print_r($_FILES);
        
        if ($_FILES['file']['size']=='0'){
        Router::redirect('/cruises/submit/nofilesuploaded')   ;
        };
        
        //print_r($_POST);
        $file = Upload::upload($_FILES, "/uploads/data/", array(
            "txt",
            "zip",
            "cnv"
        ), $_POST['cruiseID']);
        
        if ($file == 'Invalid file type.') {
            // return an error
            Router::redirect("/cruises/submit/filetype");
        } else {
            
            DB::instance(DB_NAME)->insert('cruises', $_POST);
            
            Router::redirect("/cruises/thanks");
        }
        
        
        
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
        
        $dboLine  = $_POST['dboLine'];
        $chiefSci = $_POST['chiefSci'];
        $cruiseID = $_POST['cruiseID'];
        $vessel   = $_POST['vessel'];
        $year     = $_POST['year'];
        
        $view = new View('v_cruises_p_search');
        
        //$q = "SELECT * FROM cruises WHERE " . $_POST['header'] . " = '" . $_POST['value'] . "'";
        
        unset($sql);
        
        if ($dboLine > 0) {
            $sql[] = " dboLine = '$dboLine' ";
        }
        
        if ($chiefSci != '0') {
            $sql[] = " chiefSci = '$chiefSci' ";
        }
        
        if ($cruiseID != '0') {
            $sql[] = " cruiseID = '$cruiseID' ";
        }
        
        if ($vessel != '0') {
            $sql[] = " vessel = '$vessel' ";
        }
        
        if ($year != '0') {
            $sql[] = " year = '$year' ";
        }
        
        $query = "SELECT * FROM cruises";
        
        if (!empty($sql)) {
            $query .= ' WHERE ' . implode(' AND ', $sql) .'ORDER BY year';
            
        }
        else{
	        $query .=' ORDER BY year';
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
