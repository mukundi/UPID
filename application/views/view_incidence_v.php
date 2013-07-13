<style>
	.reportCase {
		height: 80%;
		margin: 0 auto;
		padding: 20px;
		background: #DDD;
		width: 70%;
	}

</style>
<?php 

?>
<div class="reportCase">
	<form action="<?php echo base_url().'c_incident/setIncident'; ?>" method="post">
	<legend>
		Incident Details
	</legend>
	<div id="Category">
		<label>Incident Type</label>
		<select name="incident_type"  id="incident_type" style="height: 2.5em">
			<option>--Select One--</option>
			<?php
			foreach ($incident_types as $incident_type) {
				echo "<option value='" . $incident_type['incident_type_id'] . "'>" . $incident_type['incident_type_name'] . "</option>";
			}
			?>
		</select>
	</div>
	<label>Claimant's Name</label>
	<div id="email">
		<input type="text" name="full_name" id="full_name" style="height: 2.5em;width:50%;" />
	</div>
	<div style="width:50%;">
		<div id="Location" style="float:left;">
			<label>County</label>
			<select style="height:2.5em;" id="county" name="county">
				<option selected="selected" >--Select County--</option>
				<?php
				foreach ($counties as $county) {
					echo "<option value='" . $county['county_id'] . "'>" . $county['county_name'] . "</option>";
				}
				?>
			</select>
		</div>
		<div id="Location" style="float:right;">
			<label>Constituency</label>
			<select style="height:2.5em;" name="constituency" id="constituency">
				<option selected="selected" >--Select Constituency--</option>
				<?php
				foreach ($constituencies as $constituency) {
					echo "<option value='" . $constituency['constituency_id'] . "'>" . $constituency['constituency_name'] . "</option>";
				}
				?>
			</select>
		</div>
	</div>
	<div id="date" style="width:50%;clear:both;">
		<label>Date of Reporting</label>
		<input type="text" name="dor" id="dor" style="height: 2.5em"/>
	</div>
	<div id="magnitude" >
		<label>Police Station</label>
		<select style="height:2.5em;" name="station" id="station">
			<option selected="selected" >--Select Police Station--</option>
			<?php
				foreach ($stations as $station) {
					echo "<option value='" . $station['station_id'] . "'>" . $station['station_name'] . "</option>";
				}
				?>
		</select>
	</div>
	<div id="description">
		<label>Incident Description</label>
		<textarea name="description" id="description">
			
		</textarea>
	</div>
	<div id="button">
		<input type="submit" value="Submit" class="btn"/>
	</div>
</form>
</div>
<script type="text/javascript">
	$(document).ready(function() {
		//Attach date picker for date of reporting
		$("#dor").datepicker({
			yearRange : "-120:+0",
			maxDate : "0D",
			dateFormat : $.datepicker.ATOM,
			changeMonth : true,
			changeYear : true
		});
	});

</script>
