p4.carolinanobre.biz
====================

project 4 for class e-15

My application is an interactive database of oceanographic cruise metadata.

The cruises in this database are the ones conducted along 5 standard DBO lines. 
Chief Scientists can both submit metadata from their cruises as well as search the 
database for cruise info from other cruises.

To submit meta data,  all fields are required.

When searching for other cruises, the user can filter the cruises by 
several criteria (DBO Line, Chief Scientist, Cruise ID, Vessel, Year)

Application Features: 
 1) Ability to submit cruise metadata to the database.
 2) Field Validation on both the client side (JavaScript) and server side (PHP)
 3) Field validation (on both client and server sides) include:
 	 - non empty fields
 	 - valid email format 
 	 - cruise start date is before cruise end date
 	 
 4) Duplicate cruises (identified by the cruise ID) are identified and not 
 allowed to be re-submitted
 	 
 5) Ability to filter cruises in database by several criteria (done through ajax calls)
 6) Filter option elements are dynamically created based on database contents
 

JavaScript managed features: 
  Client side validation of fields when user is submitting data (error_checking.js)
  Response to filter selection is done though ajax calls to the database. 
  
