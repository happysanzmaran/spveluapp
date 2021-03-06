<div class="content">
	<!-- Start Content-->
	<div class="container-fluid">

		<!-- start page title -->
		<div class="row">
			<div class="col-12">
				<div class="page-title-box d-flex align-items-center justify-content-between">
					<h4 class="page-title">Enquiry</h4>

					<div class="page-title-right">
						<ol class="breadcrumb m-0">
							<li class="breadcrumb-item"><a href="javascript: void(0);">Admin</a></li>
							<li class="breadcrumb-item active">Latest Enquiry</li>
						</ol>
					</div>

				</div>
			</div>
		</div>
		<!-- end page title -->
		
		 <div class="row">
                            <div class="col-12">
                                <div class="card-box">
								<h4 class="header-title mt-0">Latest Enquiry</h4><hr>	
<?php if($this->session->flashdata('alert')) { $alert = $this->session->flashdata('alert');?>

								<div class="<?php echo $alert['class'] ?> alert-dismissable">
									<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
									<?php echo $alert['text']; ?>
								</div>	
<?php } ?>

                                    <table id="datatable" class="table table-bordered  nowrap">
                                        <thead>
                                        <tr>
                                            <th width="5%">#</th>
											<th width="20%">Posted by</th>
                                            <th width="60%">Enquiry Details</th>
                                            <th width="10%">Enquiry Date</th>
                                            <th width="5%">Action</th>
                                        </tr>
                                        </thead>

                                        <tbody>
										<?php $i=1; foreach($latest_enquiry as $rows){ 
										
											// strip tags to avoid breaking any html
											$string = strip_tags($rows->chat_text);
											if (strlen($string) > 80) {

												// truncate string
												$stringCut = substr($string, 0, 80);
												$endPoint = strrpos($stringCut, ' ');

												//if the string doesn't contain any space then it will cut without word basis.
												$string = $endPoint? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
												$string .= '...';
											}
										
										?>
                                        <tr>
                                            <td><?php echo $i; ?></td>
											<td><?php echo $rows->full_name; ?></td>
                                            <td><?php echo $string; ?></td>
                                            <td><?php echo date('d-m-Y', strtotime($rows->created_at)); ?></td>
											<!--<td style="text-align:center;font-size:22px;"><a data-toggle="tooltip" title="Edit" href="<?php echo base_url(); ?>newsfeed/edit_news/<?php echo base64_encode($rows->id*98765); ?>/"> <i class="mdi mdi-file-document-edit-outline"></i></a> &nbsp;<a data-toggle="tooltip" title="Gallery"  href="<?php echo base_url(); ?>newsfeed/news_gallery/<?php echo base64_encode($rows->id*98765); ?>/"> <i class="mdi mdi-file-image"></i></a></td>-->
											<td style="text-align:center;"><a data-toggle="tooltip" title="View" href="<?php echo base_url(); ?>enquiry/enquiry_details/<?php echo base64_encode($rows->chat_for*98765); ?>/">View</a></td>
                                        </tr>
										<?php $i++; } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div> <!-- end row -->


	</div> <!-- container-fluid -->
</div> <!-- content -->

<script type="text/javascript">
  	$('#menu3').addClass('active');
</script>
		