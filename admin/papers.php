<?php include("header.php");?>
				<!-- end: sidebar -->

				<section role="main" class="content-body">
					<header class="page-header">
						<h2>Research Papers</h2>
					
						<div class="right-wrapper pull-right">
							<ol class="breadcrumbs">
								<li>
									<a href="dashboard.php">
										<i class="fa fa-home"></i>
									</a>
								</li>
								<li><span>Research Papers</span></li>
							</ol>
					
							<a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
						</div>
					</header>

					<div class="row">
							<div class="col-lg-12">
								<section class="panel">
							<header class="panel-heading">
								<div class="panel-actions">
									<a href="#" class="fa fa-caret-down"></a>
									<a href="#" class="fa fa-times"></a>
								</div>
				<table><tr><td>
								<h2 class="panel-title"> Research Papers </h2></td><td> <h2> &nbsp;&nbsp; &nbsp; <a href="addPapers.php"> Add New </a></h2></td></tr></table>

							
							
							</header>
							<div class="panel-body">
								<table class="table table-bordered table-striped mb-none" id="datatable-default">
									<thead>
										<tr>
											<th>#</th>
											
											<th>File</th>
                                            <th>Title</th>
											<th class="hidden-phone">Delete</th>
										
										</tr>
									</thead>
									<tbody>
									<?php
									include("connection.php");
									 $a="select * from papers order by id desc";
									$sq=mysqli_query($link,$a);
									$i=1;
									while($r=mysqli_fetch_array($sq)){?>
										<tr class="gradeX">
											<td><?php echo $i?></td>
										
											<td><img src="../upload/gallery/<?php echo $r['file'];?>" width="50" height="30"></td>
                                            <td><a href="../upload/gallery/<?php echo $r['file'];?>"><?php echo $r['title'];?></a></td>
											<td class="center hidden-phone">
											<a href="delete_papers.php?id=<?php echo $r['id'];?>" onclick="return confirm('Are you sure you want to delete this item?');">
											<img src="delete.gif">
											<!--<img src="edit.gif"></a>--></td>
											<!--<td class="center hidden-phone">
											<a href="delete_home_content.php?id=<?php echo $r['id'];?>" onclick="return confirm('Are you sure you want to delete this item?');">
											<img src="delete.gif"></a></td>-->
										</tr>
									<?php $i++; }?>
										
									</tbody>
								</table>
							</div>
						</section>

												</div>
											</div>
						
											
						
						
											
										</form>
									</div>
								</section>
						
								
								
						
							
						
							</div>
						</div>

					<!-- start: page -->
					
						
					<!-- end: page -->
			
			
		</section>
<script>
                CKEDITOR.replace( 'desc1', {
                height: 160
                } );
            </script>
		<?php include("footer.php");?>