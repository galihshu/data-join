<html>
<head>
	<title>Data Karyawan</title>
	<!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">

    <!-- Font Awesome -->
    <link href="assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">

    <!-- Datatables -->
    <link rel="stylesheet" type="text/css" href="assets/vendor/datatables/datatables.min.css">

    <style>
        body {
            padding : 100px;
        }
        .card-header a {
            float : right;
        }

        .card-header span {
            font-size: 24px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <span>Data Karyawan</span>
                <a href="#" class="btn btn-primary"  title="Add New"><i class="icon-plus"></i> Add New</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="karyawan" class="table table-hover table-bordered table-striped" style="width:100%">
                        <thead>
                            <tr>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Position</th>
                                <th>Office</th>
                                <th>Start Date</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Position</th>
                                <th>Office</th>
                                <th>Start Date</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>

	<!-- Bootstrap core JavaScript -->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Datatables -->
    <script src="assets/vendor/datatables/datatables.min.js"></script>
	
    <script>
    $(document).ready(function() {
	   $('#karyawan').DataTable( {
	        "processing": true,
	        "serverSide": true,
	        "ajax": "data.php",
	    } );
	} );
	</script>
</body>
</html>