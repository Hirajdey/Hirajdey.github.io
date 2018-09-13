


<div class="testlistOrderConfirmBox">

	<h2>Please fill in your details</h2>
	<a class="callBackBtn goBack"  href="#">Back</a>
	
	<div class="confirm-form-nav">
		<span filter_form="clinician">  
			<input type="radio" id="clinician" name="conf-radio-group" checked>
    	<label for="clinician">Clinician</label>
  	</span>
  	<span filter_form="patient">
  		<input type="radio" id="patient" name="conf-radio-group">
    	<label for="patient">Patient</label>
  	</span>
	</div>
		
	<div class="clinician-confirmBox testlistFormStyle confirm_form_box" trgt_form="clinician">
		<form action="testorder-confirm-success.php" method=""> 
			<div class="form-control-box">
				<div class="form-control">
					<input type="text" name="" placeholder="Name*" required>
				</div>

				<div class="form-control">
					<input type="text" name="" placeholder="Patient Name*" required>
				</div>

				<div class="form-control">
					<input type="text" name="" placeholder="Hospital Name*" required>
				</div>
				
				<div class="form-control">
					<input type="email" name="" placeholder="Patient Email*" required>
				</div>

				<div class="form-control">
					<input type="email" name="" placeholder="Email*" required>
				</div>

				<div class="form-control">
					<input type="text" name="" placeholder="Patient Phone*" required>
				</div>

				<div class="form-control">
					<input type="text" name="" placeholder="Phone*" required>
				</div>
							
				<div class="form-control">
					<select class="rw-select-box required nric-select-cnt">
		        <option value="City">City*</option>
		        <option value="">City1</option>
		        <option value="">City2</option>
		        <option value="">City3</option>
		      </select>
				</div>

				<div class="your-ordersBox">
					<span>Your orders</span>
					<div class="yourorder-content" id="clinicianOrderContent">
						
					
					</div>
					<div class="yourOrderEditBtn" id="orderEditA"><span class="edit-icon"></span>Edit</div>
				</div>

				<div class="form-control">
					<select class="rw-select-box required nric-select-cnt">
		        <option value="Country">Country*</option>
		        <option value="">Country1</option>
		        <option value="">Country2</option>
		        <option value="">Country3</option>
		      </select>
				</div>
					
				<div class="form-control comment-box">
					<textarea name="" id="" cols="30" rows="" placeholder="Comments"></textarea>	
				</div>
			</div><!-- eo form-control-box -->

			<input class="testConfSubmitBtn" id="" type="submit"  value="Submit"/>
		</form>
	</div><!-- eo clinician-confirmBox -->


	<div class="patient-confirmBox testlistFormStyle confirm_form_box" trgt_form="patient">
		<form action="testorder-confirm-success.php" method="">
			<div class="form-control-box">
				<div class="form-control">
					<input type="text" name="" placeholder="Name*" required>
				</div>

				<div class="form-control">
					<input type="email" name="" placeholder="Email*" required>
				</div>

				<div class="form-control">
					<input type="text" name="" placeholder="Hospital Name*" required>
				</div>
				
				<div class="form-control">
					<input type="text" name="" placeholder="Phone*" required>
				</div>

				<div class="form-control">
					<select class="rw-select-box required nric-select-cnt">
		        <option value="City">City*</option>
		        <option value="">City1</option>
		        <option value="">City2</option>
		        <option value="">City3</option>
		      </select>
				</div>

				<div class="your-ordersBox">
					<span>your orders</span>
					<div class="yourorder-content" id="patientOrderContent">
						
					</div>
					<div class="yourOrderEditBtn" id="orderEditB"><span class="edit-icon"></span>Edit</div>
				</div>

				<div class="form-control">
					<select class="rw-select-box required nric-select-cnt">
		        <option value="Country">Country*</option>
		        <option value="">Country1</option>
		        <option value="">Country2</option>
		        <option value="">Country3</option>
		      </select>
				</div>
					
				<div class="form-control comment-box">
					<textarea name="" id="" cols="30" rows="" placeholder="Comments"></textarea>	
				</div>
			</div><!-- eo form-control-box -->
			
			<input class="testConfSubmitBtn" id="" type="submit"  value="Submit"/>
		</form>
	</div><!-- eo patient-confirmBox -->
	
</div> <!-- eo testlistOrderConfirmBox -->




