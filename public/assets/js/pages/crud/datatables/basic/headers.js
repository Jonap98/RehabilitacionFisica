"use strict";
var KTDatatablesBasicHeaders = function() {

	var initTable1 = function() {
		var table = $('#kt_datatable');

		// begin first table
		table.DataTable({
			responsive: true,
			columnDefs: [
				// {
				// 	targets: -1,
				// 	title: 'Actions',
				// 	orderable: false,
				// 	render: function(data, type, full, meta) {
				// 		return '\
				// 			<a href="javascript:;" class="btn btn-sm btn-clean btn-icon" title="Editar detalles">\
				// 				<i class="la la-edit"></i>\
				// 			</a>\
				// 			<a href="javascript:;" class="btn btn-sm btn-clean btn-icon" title="Borrar">\
				// 				<i class="la la-trash"></i>\
				// 			</a>\
				// 		';
				// 	},
				// },
				{
					width: '75px',
					targets: 5,
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
				// {
				// 	width: '75px',
				// 	targets: 9,
				// 	render: function(data, type, full, meta) {
				// 		var status = {
				// 			1: {'title': 'En linea', 'state': 'danger'},
				// 			2: {'title': 'Retail', 'state': 'primary'},
				// 			3: {'title': 'Direct', 'state': 'success'},
				// 		};
				// 		if (typeof status[data] === 'undefined') {
				// 			return data;
				// 		}
				// 		return '<span class="label label-' + status[data].state + ' label-dot mr-2"></span>' +
				// 			'<span class="font-weight-bold text-' + status[data].state + '">' + status[data].title + '</span>';
				// 	},
				// },
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
