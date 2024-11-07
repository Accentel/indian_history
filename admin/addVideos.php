<?php include("header.php"); ?>
<!-- end: sidebar -->

<section role="main" class="content-body">
    <header class="page-header">
        <h2>Dashboard</h2>

        <div class="right-wrapper pull-right">
            <ol class="breadcrumbs">
                <li>
                    <a href="dashboard.php">
                        <i class="fa fa-home"></i>
                    </a>
                </li>
                <li><span> Videos</span></li>
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

                    <h2 class="panel-title">Videos</h2>
                </header>
                <div class="panel-body">
                    <form class="form-horizontal form-bordered" name="frm" method="post" enctype="multipart/form-data" action="video_suc.php">


                        <div class="form-group">
                            <label class="col-md-3 control-label">Title</label>
                            <div class="col-md-6">
                                <input type="text" name="title" id="title" class="form-control" />
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label">Video link</label>
                            <div class="col-md-6">
                                <input type="text" name="videolink" id="videolink" class="form-control" />
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="col-md-3 control-label" for="inputHelpText"></label>
                            <div class="col-md-6">
                                <input type="submit" name="sublll" value="Submit" class="btn btn-primary">

                            </div>
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
    CKEDITOR.replace('desc1', {
        height: 160
    });
</script>
<?php include("footer.php"); ?>