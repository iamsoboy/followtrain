/*
Template Name: STUDIO - Responsive Bootstrap 4 Admin Template
Version: 1.0.0
Author: Sean Ngu
Website: http://www.seantheme.com/studio/
*/

var handleRenderDatepicker = function() {
	$('#datepicker-default').datepicker({
		autoclose: true
	});
	$('#datepicker-component').datepicker({
		autoclose: true
	});
	$('#datepicker-range').datepicker({
		autoclose: true
	});
	$('#datepicker-inline').datepicker({
		autoclose: true
	});
};

var handleDateRangePicker = function() {
	$('#default-daterange').daterangepicker({
		opens: 'right',
		format: 'MM/DD/YYYY',
		separator: ' to ',
		startDate: moment().subtract('days', 29),
		endDate: moment(),
		minDate: '01/01/2020',
		maxDate: '12/31/2038',
	}, function (start, end) {
		$('#default-daterange input').val(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
	});

	$('#advance-daterange span').html(moment().subtract('days', 29).format('MMMM D, YYYY') + ' - ' + moment().format('MMMM D, YYYY'));

	$('#advance-daterange').daterangepicker({
		format: 'MM/DD/YYYY',
		startDate: moment().subtract(29, 'days'),
		endDate: moment(),
		minDate: '01/01/2020',
		maxDate: '12/31/2038',
		dateLimit: { days: 60 },
		showDropdowns: true,
		showWeekNumbers: true,
		timePicker: false,
		timePickerIncrement: 1,
		timePicker12Hour: true,
		ranges: {
			'Today': [moment(), moment()],
			'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
			'Last 7 Days': [moment().subtract(6, 'days'), moment()],
			'Last 30 Days': [moment().subtract(29, 'days'), moment()],
			'This Month': [moment().startOf('month'), moment().endOf('month')],
			'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
		},
		opens: 'right',
		drops: 'down',
		buttonClasses: ['btn', 'btn-sm'],
		applyClass: 'btn-primary',
		cancelClass: 'btn-default',
		separator: ' to ',
		locale: {
			applyLabel: 'Submit',
			cancelLabel: 'Cancel',
			fromLabel: 'From',
			toLabel: 'To',
			customRangeLabel: 'Custom',
			daysOfWeek: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr','Sa'],
			monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
			firstDay: 1
		}
	}, function(start, end, label) {
		$('#advance-daterange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
	});
};

var handleRenderTimepicker = function() {
	$('#timepicker-default').timepicker();
	$('#timepicker-seconds').timepicker({
		minuteStep: 1,
		appendWidgetTo: 'body',
		showSeconds: true,
		showMeridian: false,
		defaultTime: false,
		template: false
	});
};

var handleRenderColorpicker = function() {
	$('#colorpicker-default').colorpicker();
	$('#colorpicker-component').colorpicker();
	$('#colorpicker-alias').colorpicker({
		colorSelectors: {
			'black': '#000000',
			'white': '#ffffff',
			'default': '#8A8A8F',
			'primary': '#007aff',
			'success': '#4CD964',
			'info': '#5AC8FA',
			'warning': '#FF9500',
			'danger': '#FF3B30'
		}
	});
};

var handleRenderTypeahead = function() {
	$('#typeahead-default').typeahead({
		source: [
			{ id: '1', name: 'ActionScript' },
			{ id: '2', name: 'AppleScript' },
			{ id: '3', name: 'Asp' },
			{ id: '4', name: 'BASIC' },
			{ id: '5', name: 'C' },
			{ id: '6', name: 'C++' },
			{ id: '7', name: 'Clojure' },
			{ id: '8', name: 'COBOL' },
			{ id: '9', name: 'ColdFusion' },
			{ id: '10', name: 'Erlang' },
			{ id: '11', name: 'Fortran' },
			{ id: '12', name: 'Groovy' },
			{ id: '13', name: 'Haskell' },
			{ id: '14', name: 'Java' },
			{ id: '15', name: 'JavaScript' },
			{ id: '16', name: 'Lisp' },
			{ id: '17', name: 'Perl' },
			{ id: '18', name: 'PHP' },
			{ id: '19', name: 'Python' },
			{ id: '20', name: 'Ruby' },
			{ id: '21', name: 'Scala' },
			{ id: '22', name: 'Scheme' }
		],
		autoSelect: true
	});
};

var handleRenderTagsInput = function() {
	var cities = [ 
		{ "value": 1 , "text": "Amsterdam"   , "continent": "Europe"    },
		{ "value": 2 , "text": "London"      , "continent": "Europe"    },
		{ "value": 3 , "text": "Paris"       , "continent": "Europe"    },
		{ "value": 4 , "text": "Washington"  , "continent": "America"   },
		{ "value": 5 , "text": "Mexico City" , "continent": "America"   },
		{ "value": 6 , "text": "Buenos Aires", "continent": "America"   },
		{ "value": 7 , "text": "Sydney"      , "continent": "Australia" },
		{ "value": 8 , "text": "Wellington"  , "continent": "Australia" },
		{ "value": 9 , "text": "Canberra"    , "continent": "Australia" },
		{ "value": 10, "text": "Beijing"     , "continent": "Asia"      },
		{ "value": 11, "text": "New Delhi"   , "continent": "Asia"      },
		{ "value": 12, "text": "Kathmandu"   , "continent": "Asia"      },
		{ "value": 13, "text": "Cairo"       , "continent": "Africa"    },
		{ "value": 14, "text": "Cape Town"   , "continent": "Africa"    },
		{ "value": 15, "text": "Kinshasa"    , "continent": "Africa"    }
	];
	var elt ='#tagsinput-category';
	$(elt).tagsinput({
		tagClass: function(item) {
			switch (item.continent) {
				case 'Europe'   : return 'label label-primary';
				case 'America'  : return 'label label-success';
				case 'Australia': return 'label label-black';
				case 'Africa'   : return 'label label-pink';
				case 'Asia'     : return 'label label-warning';
			}
		},
		itemValue: 'value',
		itemText: 'text',
		typeahead: {
			source: cities
		}
	});
	$(elt).on('itemAdded', function(e) {
		setTimeout(function() {
			$('.bootstrap-tagsinput').find('input').val('');
		}, 0);
	});
	$(elt).tagsinput('add', { "value": 1 , "text": "Amsterdam"   , "continent": "Europe"    });
	$(elt).tagsinput('add', { "value": 4 , "text": "Washington"  , "continent": "America"   });
	$(elt).tagsinput('add', { "value": 7 , "text": "Sydney"      , "continent": "Australia" });
	$(elt).tagsinput('add', { "value": 10, "text": "Beijing"     , "continent": "Asia"      });
	$(elt).tagsinput('add', { "value": 13, "text": "Cairo"       , "continent": "Africa"    });
};

var handleRenderBootstrapSlider = function() {
	$('#slider-default').bootstrapSlider();
	$('#slider-range').bootstrapSlider();
	$('#slider-tooltip').bootstrapSlider({
		tooltip: 'always'
	});
	$('#slider-vertical').bootstrapSlider({
		reversed: true
	});
	$('#slider-disabled').bootstrapSlider();
};

var handleRenderMaskedInput = function() {
	$('#masked-input-date').mask('99/99/9999');
	$('#masked-input-phone').mask('(999) 999-9999');
	$('#masked-input-traincode').mask('XXX-XX-XXXX');
};

var handleRenderPasswordStrength = function() {
	
	var options = {};
	options.ui = {
		container: "#pwdstrength-container",
		showVerdictsInsideProgressBar: true,
		viewports: {
			progress: ".pwstrength_viewport_progress"
		},
		progressExtraCssClasses: "progress-sm"
	};
	options.common = {
		debug: true,
		onLoad: function () {
			$('#messages').text('Start typing password');
		}
	};
	$('#pwstrength-default').pwstrength(options);
};

var handleRenderSummernote = function() {
	$('.summernote').summernote({
		height: 300
	});
};

var handleRenderjQueryFileUpload = function() {
	$('#fileupload').fileupload({
		previewMaxHeight: 80,
		previewMaxWidth: 120,
		url: 'http://jquery-file-upload.appspot.com/',
		disableImageResize: /Android(?!.*Chrome)|Opera/.test(window.navigator.userAgent),
		maxFileSize: 999000,
		acceptFileTypes: /(\.|\/)(gif|jpe?g|png)$/i
	});
	$('#fileupload').bind('fileuploadchange', function (e, data) {
		$('#fileupload .empty-row').hide();
	});
	$('#fileupload').bind('fileuploadfail', function(e, data){
		if (data.errorThrown === 'abort') {
			if ($('#fileupload .files tr').not('.empty-row').length == 1) {
				$('#fileupload .empty-row').show();
			}
		}
	});
	
	if ($.support.cors) {
		$.ajax({
			url: 'http://jquery-file-upload.appspot.com/',
			type: 'HEAD'
		}).fail(function () {
			var alert = '<div class="alert alert-danger m-b-0 m-t-15">Upload server currently unavailable - ' + new Date() + '</div>';
			$('#fileupload #error-msg').removeClass('d-none').html(alert);
		});
	}
};


/* Controller
------------------------------------------------ */
$(document).ready(function() {
	handleRenderDatepicker();
	handleDateRangePicker();
	handleRenderTimepicker();
	handleRenderColorpicker();
	handleRenderTypeahead();
	handleRenderTagsInput();
	handleRenderBootstrapSlider();
	handleRenderMaskedInput();
	handleRenderPasswordStrength();
	handleRenderSummernote();
	handleRenderjQueryFileUpload();
});