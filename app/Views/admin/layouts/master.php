<?php
use CodeBurrow\App;
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<!-- Meta, title, CSS, favicons, etc. -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Admin Panel | BusTracker </title>

	<link rel="shortcut icon" href="<?= $this->url('img/busstop.ico'); ?>">

	<!-- Bootstrap core CSS -->
	<link href="<?= $this->url('css/bootstrap.min.css') ?>" rel="stylesheet">

	<link href="<?= $this->url('fonts/css/font-awesome.min.css') ?>" rel="stylesheet">
	<link href="<?= $this->url('css/animate.min.css') ?>" rel="stylesheet">

	<!-- Custom styling plus plugins -->
	<link href="<?= $this->url('css/custom.css') ?>" rel="stylesheet">
	<link href="<?= $this->url('css/icheck/flat/green.css') ?>" rel="stylesheet">
	<link href="<?= $this->url('css/datatables/tools/css/dataTables.tableTools.css'); ?>" rel="stylesheet">

	<!-- editor -->
	<link href="http://netdna.bootstrapcdn.com/font-awesome/3.0.2/css/font-awesome.css" rel="stylesheet">
	<link href="<?= $this->url('css/editor/external/google-code-prettify/prettify.css') ?>" rel="stylesheet">
	<link href="<?= $this->url('css/editor/index.css') ?>" rel="stylesheet">

	<!-- select2 -->
	<link href="<?= $this->url('css/select/select2.min.css') ?>" rel="stylesheet">

	<!-- switchery -->
	<link rel="stylesheet" href="<?= $this->url('css/switchery/switchery.min.css') ?>" />

	<script src="<?= $this->url('js/jquery.min.js') ?>"></script>

	<!--[if lt IE 9]>
	<script src="../assets/js/ie8-responsive-file-warning.js') ?>"></script>
	<![endif]-->

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js') ?>"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js') ?>"></script>
	<![endif]-->

</head>


<body class="nav-md">

<div class="container body">
	<div class="main_container">

		<!--sidebar-->
		<?=$this->insert('_partials/sidebar')?>
		<!--/sidebar-->

		<!-- top navigation -->
		<?=$this->insert('_partials/topNav')?>
		<!-- /top navigation -->

		<!-- page content -->
		<div class="right_col" role="main">
			<?=$this->section('content')?>

			<?=$this->insert('_partials/footer')?>
		</div>
		<!-- /page content -->

	</div>
</div>

<div id="custom_notifications" class="custom-notifications dsp_none">
	<ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
	</ul>
	<div class="clearfix"></div>
	<div id="notif-group" class="tabbed_notifications"></div>
</div>

<script src="<?= $this->url('js/bootstrap.min.js') ?>"></script>

<!-- bootstrap progress js -->
<script src="<?= $this->url('js/progressbar/bootstrap-progressbar.min.js') ?>"></script>
<script src="<?= $this->url('js/nicescroll/jquery.nicescroll.min.js') ?>"></script>
<!-- icheck -->
<script src="<?= $this->url('js/icheck/icheck.min.js') ?>"></script>

<script src="<?= $this->url('js/custom.js') ?>"></script>

<!-- Datatables -->
<script src="<?= $this->url('js/datatables/js/jquery.dataTables.js'); ?>"></script>
<script src="<?= $this->url('js/datatables/tools/js/dataTables.tableTools.js'); ?>"></script>

<!-- pace -->
<script src="<?= $this->url('js/pace/pace.min.js') ?>"></script>

<!-- tags -->
<script src="<?= $this->url('js/tags/jquery.tagsinput.min.js') ?>"></script>
<!-- switchery -->
<script src="<?= $this->url('js/switchery/switchery.min.js') ?>"></script>
<!-- daterangepicker -->
<script type="text/javascript" src="<?= $this->url('js/moment/moment.min.js') ?>"></script>
<script type="text/javascript" src="<?= $this->url('js/datepicker/daterangepicker.js') ?>"></script>
<!-- richtext editor -->
<script src="<?= $this->url('js/editor/bootstrap-wysiwyg.js') ?>"></script>
<script src="<?= $this->url('js/editor/external/jquery.hotkeys.js') ?>"></script>
<script src="<?= $this->url('js/editor/external/google-code-prettify/prettify.js') ?>"></script>
<!-- select2 -->
<script src="<?= $this->url('js/select/select2.full.js') ?>"></script>
<!-- form validation -->
<script type="text/javascript" src="<?= $this->url('js/parsley/parsley.min.js') ?>"></script>
<!-- textarea resize -->
<script src="<?= $this->url('js/textarea/autosize.min.js') ?>"></script>
<script>
	autosize($('.resizable_textarea'));
</script>
<!-- Autocomplete -->
<script type="text/javascript" src="<?= $this->url('js/autocomplete/countries.js') ?>"></script>
<script src="<?= $this->url('js/autocomplete/jquery.autocomplete.js') ?>"></script>

<script type="text/javascript">
	$(function() {
		'use strict';
		var countriesArray = $.map(countries, function(value, key) {
			return {
				value: value,
				data: key
			};
		})
		// Initialize autocomplete with custom appendTo:
		$('#autocomplete-custom-append').autocomplete({
			lookup: countriesArray,
			appendTo: '#autocomplete-container'
		});
	});
</script>

<!-- select2 -->
<script>
	$(document).ready(function() {
		$(".select2_single").select2({
			placeholder: "Select a state",
			allowClear: true
		});
		$(".select2_group").select2({});
		$(".select2_multiple").select2({
			maximumSelectionLength: 4,
			placeholder: "With Max Selection limit 4",
			allowClear: true
		});
	});
</script>
<!-- /select2 -->
<!-- input tags -->
<script>
	function onAddTag(tag) {
		alert("Added a tag: " + tag);
	}

	function onRemoveTag(tag) {
		alert("Removed a tag: " + tag);
	}

	function onChangeTag(input, tag) {
		alert("Changed a tag: " + tag);
	}

	$(function() {
		$('#tags_1').tagsInput({
			width: 'auto'
		});
	});
</script>
<!-- /input tags -->

<!-- editor -->
<script>
	$(document).ready(function() {
		$('.xcxc').click(function() {
			$('#descr').val($('#editor').html());
		});
	});

	$(function() {
		function initToolbarBootstrapBindings() {
			var fonts = ['Serif', 'Sans', 'Arial', 'Arial Black', 'Courier',
					'Courier New', 'Comic Sans MS', 'Helvetica', 'Impact', 'Lucida Grande', 'Lucida Sans', 'Tahoma', 'Times',
					'Times New Roman', 'Verdana'
				],
				fontTarget = $('[title=Font]').siblings('.dropdown-menu');
			$.each(fonts, function(idx, fontName) {
				fontTarget.append($('<li><a data-edit="fontName ' + fontName + '" style="font-family:\'' + fontName + '\'">' + fontName + '</a></li>'));
			});
			$('a[title]').tooltip({
				container: 'body'
			});
			$('.dropdown-menu input').click(function() {
					return false;
				})
				.change(function() {
					$(this).parent('.dropdown-menu').siblings('.dropdown-toggle').dropdown('toggle');
				})
				.keydown('esc', function() {
					this.value = '';
					$(this).change();
				});

			$('[data-role=magic-overlay]').each(function() {
				var overlay = $(this),
					target = $(overlay.data('target'));
				overlay.css('opacity', 0).css('position', 'absolute').offset(target.offset()).width(target.outerWidth()).height(target.outerHeight());
			});
			if ("onwebkitspeechchange" in document.createElement("input")) {
				var editorOffset = $('#editor').offset();
				$('#voiceBtn').css('position', 'absolute').offset({
					top: editorOffset.top,
					left: editorOffset.left + $('#editor').innerWidth() - 35
				});
			} else {
				$('#voiceBtn').hide();
			}
		};

		function showErrorAlert(reason, detail) {
			var msg = '';
			if (reason === 'unsupported-file-type') {
				msg = "Unsupported format " + detail;
			} else {
				console.log("error uploading file", reason, detail);
			}
			$('<div class="alert"> <button type="button" class="close" data-dismiss="alert">&times;</button>' +
				'<strong>File upload error</strong> ' + msg + ' </div>').prependTo('#alerts');
		};
		initToolbarBootstrapBindings();
		$('#editor').wysiwyg({
			fileUploadError: showErrorAlert
		});
		window.prettyPrint && prettyPrint();
	});
</script>
<!-- /editor -->

<script>
	$(document).ready(function() {
		$('input.tableflat').iCheck({
			checkboxClass: 'icheckbox_flat-green',
			radioClass: 'iradio_flat-green'
		});
	});

	var asInitVals = new Array();
	$(document).ready(function() {
		var oTable = $('#example').dataTable({
			"oLanguage": {
				"sSearch": "Search all columns:"
			},
			"aoColumnDefs": [{
				'bSortable': false,
				'aTargets': [0]
			} //disables sorting for column one
			],
			'iDisplayLength': 12,
			"sPaginationType": "full_numbers",
			"dom": 'T<"clear">lfrtip',
			"tableTools": {
				"sSwfPath": "js/datatables/tools/swf/copy_csv_xls_pdf.swf"
			}
		});
		$("tfoot input").keyup(function() {
			/* Filter on the column based on the index of this element's parent <th> */
			oTable.fnFilter(this.value, $("tfoot th").index($(this).parent()));
		});
		$("tfoot input").each(function(i) {
			asInitVals[i] = this.value;
		});
		$("tfoot input").focus(function() {
			if (this.className == "search_init") {
				this.className = "";
				this.value = "";
			}
		});
		$("tfoot input").blur(function(i) {
			if (this.value == "") {
				this.className = "search_init";
				this.value = asInitVals[$("tfoot input").index(this)];
			}
		});
	});
</script>

</body>

</html>
