@extends('layout.default')
@section('content') <!--section of the content -->
	<p>Fill up the form for license</p>
	<div id="fill-form">
	<form method="post">
		<label>First Name:</label><br/><input type="text" name="first_name" class="span2"><br/>
		<label>Last Name:</label><br/><input type="text" name="last_name" class="span2"><br/>
		<label>Address:</label><br/><input type="text" name="address" class="span2"><br/>
		<label>Gender:</label><br/><label><input type="radio" name="optionsRadios" id="optionsRadios1" 
         value="Male" > Male</label>
   		<label><input type="radio" name="optionsRadios" id="optionsRadios2" 
         value="option2"> Female</label><br/>
        <label>Mobile Number</label><br/><input type="text" name="mobile" class="span2"><br/>
        <label>Email:</label><br/><input type="text" name="email" class="span2"><br/>
        
       		<select type="text" for="vehicle_type" name="vehicle_type" class="selectoption"   maxlength="50" >
      
          		<option value="0"class='place'>Please choose vehicle type</option>
        		<option value="Motor-bikes">Motor-bikes and Scooters</option>
          		<option value="four-wheeled">Four-wheeled</option>
          		<option value="heavy">Heavy vehicles</option>
          		
  
    </select>
  
   
	</form>
</div>
@stop