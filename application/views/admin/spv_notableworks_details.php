<?php foreach($result as $row){} ?>
<div class="content">
	<!-- Start Content-->
	<div class="container-fluid">

		<!-- start page title -->
		<div class="row">
			<div class="col-12">
				<div class="page-title-box d-flex align-items-center justify-content-between">
					<h4 class="page-title">About SPV</h4>

					<div class="page-title-right">
						<ol class="breadcrumb m-0">
							<li class="breadcrumb-item"><a href="javascript: void(0);">Admin</a></li>
							<li class="breadcrumb-item active">Notable Works</li>
						</ol>
					</div>

				</div>
			</div>
		</div>
		<!-- end page title -->
		
		<div class="row">
			<div class="col-md-12">
				<div class="card-box">		
				<h4 class="header-title mt-0">Update Notable Works</h4><hr>
<?php if($this->session->flashdata('alert')) { $alert = $this->session->flashdata('alert');?>

								<div class="<?php echo $alert['class'] ?> alert-dismissable">
									<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
									<?php echo $alert['text']; ?>
								</div>	
<?php } ?>
					<form action="<?php echo base_url(); ?>spv/update_notableworks" method="post" enctype="multipart/form-data" id="add_position" name="add_position" class="form">

						<div class="form-row">
							<div class="form-group col-md-6">
								<label class="col-form-label">Title (Tamil)</label>
								<input type="text" class="form-control" id="tTitle" name="tTitle" placeholder="Title (Tamil)" value="<?php echo html_escape($row->title_ta);?>" maxlength="100">
							</div>
							<div class="form-group col-md-6">
								<label class="col-form-label">Title (English)</label>
								<input type="text" class="form-control" id="eTitle" name="eTitle" placeholder="Title (English)" value="<?php echo html_escape($row->title_en);?>" maxlength="100">
							</div>						
						</div>
						
						 <div class="form-row">
							<div class="form-group col-md-6">
								<label class="col-form-label">Notableworks Details (Tamil)</label>
								<textarea id="tDeatil" name='tDeatil' class="form-control" rows="3"><?php echo $row->noteable_text_ta; ?></textarea>
							</div>
							<div class="form-group col-md-6">
								<label class="col-form-label">Notableworks Details (English)</label>
							   <textarea id="eDeatil" name='eDeatil' class="form-control" rows="3"><?php echo $row->noteable_text_en; ?></textarea>
							</div>
						</div>
						
						 <div class="form-row">
							 
							<div class="form-group col-md-6">
								<label class="col-form-label">Status</label>
							   <select id="nStatus" name="nStatus" class="form-control">
										<option value="Active">Active</option>
										<option value="Inactive">Inactive</option>
								</select><script>$('#nStatus').val('<?php echo $row->status; ?>');</script>
							</div>
							<div class="form-group col-md-6">
								<input type="hidden" name="nw_id" id="nw_id" value="<?php echo base64_encode($row->id*98765); ?>">
								<button type="submit" class="btn btn-primary" style="margin-top:38px;">Submit</button>
							</div>
						</div>

					   
					</form>
				</div>
			</div>
		</div>


	</div> <!-- container-fluid -->
</div> <!-- content -->

 <script type="text/javascript">
 
$('#menu4').addClass('active');

$('#add_position').validate({ // initialize the plugin
     rules: {
		 tTitle:{required:true },
		 eTitle:{required:true },
		 tDeatil:{required:true },
		 eDeatil:{required:true }
     },
     messages: {
		  tTitle: "Enter Tamil Title",
		  eTitle: "Enter English Title",
		  tDeatil: "Enter Tamil Details",
		  eDeatil: "Enter English Details"
         }
 });


</script>
		