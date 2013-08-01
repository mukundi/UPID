<?php
/**
echo '<pre>';
print_r($constituencies);
echo '</pre>';
 */
?>
<style>
	.school {
		height: 80%;
		margin: 0 auto;
		padding: 20px;
		background: #DDD;
		width: 70%;
	}

</style>
<form  name="schools" method="post" action="<?php echo base_url().'c_schools/setschool' ?>">
		<div class="school"> 
		<h3>Enter School details</h3>
			<div id="County">
			<select name="county" style="height: 2.5em">
				<option selected="selected">Select County</option>
				<?php 
				foreach($counties as $county){
					echo "<option value='".$county['county_id']."'>".$county['county_name']."</option>";
				}
				?>
			</select>
			</div>	
			
			<div id="Constituency">
			<select name="Constituency" style="height: 2.5em">
				<option selected="selected">Select Constituencies</option>
				<?php 
				foreach($constituencies as $constituency){
					echo "<option value='".$constituency['constituency_id']."'>".$constituency['constituency_name']."</option>";
				}
				?>
			</select>
			</div>		
			<div id="Level">
			<select name="level" style="height: 2.5em" onchange="changecategory(this.value)">
				<option  value="" selected="selected">Select Level</option>
				<option value="Primary">Primary</option>
				<option value="Secondary">Secondary</option>
				<option value="Tertiary">Tertiary</option>
			</select>
			</div>	
			<div id="Category">
			<select name="category" style="height: 2.5em">
				<option selected="selected">Select Category</option>			
			</select>
			</div>		
			<div id="school_name">		
			<input type="text" name="school_name" style="height: 2.5em"  placeholder="school name"/>
			</div>	
			<div id="teachers">		
			<input type="text" name="teachers" style="height: 2.5em"  placeholder="No of teachers"/>
			</div>

		 <div id="button">
			<input type="submit" value="Submit" class="awesome blue"/>
			</div>				
</div>
</form>

<script type="text/javascript">
	document.schools.category.disabled = true;
	function changecategory(item)
	{
		if(item == '')
		{
			document.schools.category.disabled = true;
			document.schools.category.options.length = 0;
			document.schools.category.options[document.schools.category.options.length] = new Option('Select Category','');
		}
		else if(item == 'Tertiary')
		{
			document.schools.category.disabled = false;
			document.schools.category.options.length = 0;
			document.schools.category.options[document.schools.category.options.length] = new Option('Select Category','');
			document.schools.category.options[document.schools.category.options.length] = new Option('University','University');
			document.schools.category.options[document.schools.category.options.length] = new Option('College','College');
			document.schools.category.options[document.schools.category.options.length] = new Option('Training Institute','Training');
			document.schools.category.options[document.schools.category.options.length] = new Option('Technical Institute','Technical');
		}
		else
		{
			document.schools.category.disabled = false;
			document.schools.category.options.length = 0;
			document.schools.category.options[document.schools.category.options.length] = new Option('Select Category','');
			document.schools.category.options[document.schools.category.options.length] = new Option('Day School','University');
			document.schools.category.options[document.schools.category.options.length] = new Option('Boarding School','College');			
		};	
	};
</script>

