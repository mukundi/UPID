<style>
.reportCase{
	height:auto;
	width:15em;
	margin-left:1em;
	padding-top:0.3em;
	
	
}
.reportCase input[type="text"]{
display: inline-block; 
width: 420px; 
font-family: Arial, Tahoma, sans-serif; 
margin-bottom: 10px; 
padding: 5px 9px;
font-size: 1.2em;
	
}

#Category,#email,#date ,#Location,#description,#magnitude{
	background: transparent;
   	width: 100%;
   	padding: 3px;
	margin:0.6em;
}
	
	
</style>

<div class="reportCase"> 
		<h3>Enter details Below</h3>
			<div id="Category">
			<select name="category" style="height: 2.5em"><option selected="selected">Select Category</option></select>
			</div>	
		
			<div id="email">		
			<input type="text" name="email" style="height: 2.5em" />
			</div>	
			
			<div id="Location">
			<select style="height:2.5em">
				<option selected="selected" >Choose Location</option>
			</select>
			</div>	
			<div id="date">
		<input type="date" name="date" style="height: 2.5em"/>
		</div>	
		 
		 <div id="description">
			<textarea name="description" style="height: 8em"></textarea>
		</div>	
		<div id="magnitude" >
			<input type="text" name="magnitude" style="height: 2.5em" />
			</div>	
				
		 <div id="button">
			<input type="button" value="Submit" class="awesome blue"/>
			</div>	
		
	
</div>

