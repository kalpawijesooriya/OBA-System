<div id="edit<?php echo $row['regestration_number']; ?>" class="modal fade" role="dialog">
	<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title"><?php echo $row['name']; ?></h4>
				</div>
				<div class="modal-body">
					<div>
					<img src="<?php echo $row['profile_picture_url']; ?>" style="border-radius : 50%; width:50%;">
						<label class="col-md-12">Full Name</label>
						<div class="col-md-12">
							<label type="text" class="form-control form-control-line"><?php echo $row['name']; ?></label>
						</div>
						<label class="col-md-12">Address</label>
						<div class="col-md-12">
							<label type="text" class="form-control form-control-line"><?php echo $row['address']; ?></label>
						</div>
						<label class="col-md-12">Email</label>
						<div class="col-md-12">
							<label type="text" class="form-control form-control-line"><?php echo $row['email_address']; ?></label>
						</div>
						<label class="col-md-12">Index Number</label>
						<div class="col-md-12">
							<label type="text" class="form-control form-control-line"><?php echo $row['index_number']; ?></label>
						</div>
						<label class="col-md-12">O/L Year</label>
						<div class="col-md-12">
							<label type="text" class="form-control form-control-line"><?php echo $row['olevel_year']; ?></label>
						</div>
						<label class="col-md-12">A/L Year</label>
						<div class="col-md-12">
							<label type="text" class="form-control form-control-line"><?php echo $row['alevel_year']; ?></label>
						</div>
						<label class="col-md-12">Birthday</label>
						<div class="col-md-12">
							<label type="text" class="form-control form-control-line"><?php echo $row['birthday']; ?></label>
						</div>
						<label class="col-md-12">NIC No</label>
						<div class="col-md-12">
							<label type="text" class="form-control form-control-line"><?php echo $row['nic_num']; ?></label>
						</div>
						<label class="col-md-12">Country</label>
						<div class="col-md-12">
							<label type="text" class="form-control form-control-line"><?php echo $row['country']; ?></label>
						</div>
						<label class="col-md-12">Phone</label>
						<div class="col-md-12">
							<label type="text" class="form-control form-control-line"><?php echo $row['phone_number']; ?></label>
						</div>
						<label class="col-md-12">Mobile</label>
						<div class="col-md-12">
							<label type="text" class="form-control form-control-line"><?php echo $row['mobile_number']; ?></label>
						</div>
						<label class="col-md-12">created at</label>
						<div class="col-md-12">
							<label type="text" class="form-control form-control-line"><?php echo $row['createdAt']; ?></label>
						</div>
						<label class="col-md-12">updated at</label>
						<div class="col-md-12">
							<label type="text" class="form-control form-control-line"><?php echo $row['updatedAt']; ?></label>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="acceptMember btn btn-success" value="<?php echo $row['regestration_number']; ?>"><span class = "glyphicon"></span>Accept</button>
					<button class="btn btn-danger delete" data-toggle="modal" data-target="#delete<?php echo $row['regestration_number']; ?>"><span class = "glyphicon glyphicon-trash"></span> Reject</button>
				</div>
				
			</div>
	</div>
</div><?php include('member_deleteModal.php'); ?>