p4.carolinanobre.biz
====================

project 4 for class e-15

My application is an interactive database of oceanographic cruise metadata.

The cruises in this database are the ones conducted along 5 standard DBO lines. 
Chief Scientists can both submit metadata from their cruises as well as search the 
database for cruise info from other cruises.

To submit meta data,  all fields are required.

When searching for other cruises, the user can filter the cruises by 
several criteria:
 1) DBO Line
 2) Chief Scientist 
 3) Cruise ID
 4) Vessel
 5) Year

Application Features: 
 1) Ability to submit cruise metadata to the database.
 2) Field Validation on both the client side (JavaScript) and server side (PHP)
 3) Ability to filter cruises in database by several criteria (done through ajax calls)
 4) Filter option elements are dynamically created based on database contents
 

JavaScript managed features: 
  Client side validation of fields when user is submitting data (error_checking.js)
  Response to filter selection is done though ajax calls to the database. 
  
