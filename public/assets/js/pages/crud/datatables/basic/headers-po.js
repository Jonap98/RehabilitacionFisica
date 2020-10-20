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
					targets: 5,
					render: function(data, type, full, meta) {
						var status = {
							1: {'title': 'Aceptada', 'state': 'primary'},
							2: {'title': 'Pendiente', 'state': 'danger'},
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
