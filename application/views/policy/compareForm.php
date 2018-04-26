
<div class="form-group" >
	<h3>Compare Insurance Policy</h3>
			
		<form id="form" method="post" action="<?php echo base_url();?>form/search">

			<label for="policy">Policy Type</label>
               	<select class="form-control" name="policy_type">
               		<?php
               		 	foreach($type_list as $row){
                    ?>
               			<option value="<?php echo $row->id;?>"><?php echo $row->name;?></option>
               		<?php
               			}
               		?> 
               	</select>

			<label for="age">Age (in year)</label>
               	<input type="text" class="form-control" name="age">
			
			<label for="term">Term (in year)</label>
				<input type="text" class="form-control" name="term">
				
			<label for="investment">Investment per year</label>
				<input type="text" class="form-control" name="investment"><br />
						
			<button class="btn btn-primary btn-lg btn-block" type="submit">Compare</button>

		</form>
</div>