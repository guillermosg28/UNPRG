<html>
<head>
	<title>Prueba</title>
	<link rel="stylesheet" type="text/css" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
	
	<script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="//code.jquery.com/jquery-1.8.3.js"></script>

	<script type="text/javascript">

// set focus when modal is opened
$('#modal-content').on('shown.bs.modal', function () {
    $("#txtname").focus();
});

// show the modal onload
$('#modal-content').modal({
    show: true
});

// everytime the button is pushed, open the modal, and trigger the shown.bs.modal event
$('#openBtn').click(function () {
    $('#modal-content').modal({
        show: true
    });
});
	</script>

</head>

<body class="modal-open">
  <a href="#" class="btn btn-default" id="openBtn">Open modal</a>

<div id="modal-content" class="modal fade in" tabindex="-1" role="dialog" aria-hidden="false" style="display: block;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">×</button>
                 <h3>Modal header</h3>

            </div>
            <div class="modal-body">
                <p>
                    <input type="text" id="txtname">
                </p>
            </div>
            <div class="modal-footer"> <a href="#" class="btn" data-dismiss="modal">Close</a>
 <a href="#" class="btn btn-primary">Save changes</a>

            </div>
        </div>
    </div>
</div>
  




<div class="modal-backdrop fade in"></div></body>

</html>