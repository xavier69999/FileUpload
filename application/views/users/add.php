<!DOCTYPE html>
<html>
<head>
    <title>File Upload</title>
    <!-- <link rel="stylesheet" type="text/css" media="screen" href="main.css" /> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="src/main.js"></script>
</head>
<body>
<div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="row">
                    <p  class="alert alert-success"> <?php echo $this->session->flashdata('success_msg'); ?></p>
                    <p  class="alert alert-danger"><?php echo $this->session->flashdata('error_msg'); ?></p>
                        <form role="form" method="post" enctype="multipart/form-data">
                            <div class="panel">
                                <div class="panel-body">
                                    <div class="form-group">
                                        <label>Picture</label>
                                        <input class="form-control" type="file" name="picture" />
                                    </div>
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input class="form-control" type="text" name="name" />
                                    </div>
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input class="form-control" type="text" name="email" />
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" class="btn btn-warning" name="userSubmit" value="Add">
                                    </div>
                                </div>
                            </div>
</form>
</div>
</div>
</div>
</div>
</body>
</html>