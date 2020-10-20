"use strict";
var KTDatatablesBasicHeaders = function() {

	var initTable1 = function() {
		var table = $('#kt_datatable');

		// begin first table
		table.DataTable({
			"order": [[ 0, "desc" ]],
			responsive: true,
			columnDefs: [
				{
					width: '75px',
					targets: 4,
					render: function(data, type, full, meta) {
						var status = {
							1: {'title': 'Alta', 'class': ' label-light-danger'},
							2: {'title': 'Media', 'class': ' label-light-warning'},
							3: {'title': 'Baja', 'class': ' label-light-success'},
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
				{
					width: '75px',
					targets: 5,
					render: function(data, type, full, meta) {
						var status = {
							1: {'title': 'Sin decisión', 'state': 'danger'},
							2: {'title': 'Aceptada', 'state': 'primary'},
							3: {'title': 'Finalizada', 'state': 'success'},
							4: {'title': 'Cancelada', 'state': 'danger'},
							5: {'title': 'Denegada', 'state': 'danger'},
						};
						if (typeof status[data] === 'undefined') {
							return data;
						}
						return '<span class="label label-' + status[data].state + ' label-dot mr-2"></span>' +
							'<span class="font-weight-bold text-' + status[data].state + '">' + status[data].title + '</span>';
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
