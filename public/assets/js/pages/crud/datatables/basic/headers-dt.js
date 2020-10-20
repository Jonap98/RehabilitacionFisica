"use strict";
var KTDatatablesBasicHeaders = function() {

	var initTable1 = function() {
		var table = $('#kt_datatable');

		// begin first table
		table.DataTable({
			responsive: true,
			dom: 'Bfrtip',
            buttons: [
                
                {
                    extend: 'excelHtml5',
                    text: '<i class=" fas fa-file-excel"></i> ',
                    titleAttr: 'Exportar a excel',
                    className: 'btn btn-success'
                },
                
                {
                    extend: 'pdfHtml5',
                    text: '<i class="fas fa-file-pdf"></i> ',
                    titleAttr: 'Exportar a PDF',
                    className: 'btn btn-danger' 
                },
            ],
			columnDefs: [				
				{
					width: '75px',
					targets: 3,
					render: function(data, type, full, meta) {
						var status = {
							0: {'title': 'Entregado', 'class': ' label-light-success'},
							1: {'title': 'Sin entregar', 'class': ' label-light-danger'},
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