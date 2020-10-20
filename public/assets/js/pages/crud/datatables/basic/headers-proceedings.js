"use strict";
var KTDatatablesBasicHeaders = function() {

	var initTable1 = function() {
		var table = $('#kt_datatable');

		// begin first table
		table.DataTable({
			responsive: true,
			columnDefs: [
				{
					width: '75px',
					targets: 4,
					render: function(data, type, full, meta) {
						var status = {
							0: {'title': 'Inactivo', 'class': ' label-light-danger'},
							1: {'title': 'Activo', 'class': ' label-light-success'},
							2: {'title': 'Delivered', 'class': ' label-light-danger'},
							3: {'title': 'Canceled', 'class': ' label-light-primary'},
							4: {'title': 'Pending', 'class': 'label-light-primary'},
							5: {'title': 'Info', 'class': ' label-light-info'},
							6: {'title': 'Pending', 'class': 'label-light-primary'},
							7: {'title': 'Warning', 'class': ' label-light-warning'},
						};
						if (typeof status[data] === 'undefined') {
							return data;
						}
						return '<span class="label label-lg font-weight-bold' + status[data].class + ' label-inline">' + status[data].title + '</span>';
					},
				},
			],
		});
	};

	return {

		//main function to initiate the module
		init: function() {
			initTable1();
		},

	};

}();

jQuery(document).ready(function() {
	KTDatatablesBasicHeaders.init();
});
