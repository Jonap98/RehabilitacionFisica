"use strict";

// Class definition
var KTProjectsAdd = function () {
	// Base elements
	var _wizardEl;
	var _formEl;
	var _wizard;
	var _avatar;
	var _validations = [];

	// Private functions
	var initWizard = function () {
		// Initialize form wizard
		_wizard = new KTWizard(_wizardEl, {
			startStep: 1, // initial active step number
			clickableSteps: true  // allow step clicking
		});

		// Validation before going to next page
		_wizard.on('beforeNext', function (wizard) {
			// Don't go to the next step yet
			_wizard.stop();

			// Validate form
			var validator = _validations[wizard.getStep() - 1]; // get validator for currnt step
			validator.validate().then(function (status) {
				if (status == 'Valid') {
					_wizard.goNext();
					KTUtil.scrollTop();
				} else {
					Swal.fire({
						text: "Error, hemos detectado algunos errores, intenta de nuevo.",
						icon: "error",
						buttonsStyling: false,
						confirmButtonText: "Ok, ir allí!",
						customClass: {
							confirmButton: "btn font-weight-bold btn-light"
						}
					}).then(function () {
						KTUtil.scrollTop();
					});
				}
			});
		});

		// Change Event
		_wizard.on('change', function (wizard) {
			KTUtil.scrollTop();
		});
	}

	// Form Validation
	var initValidation = function () {
		// Init form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/
		// Step 1
		_validations.push(FormValidation.formValidation(
			_formEl,
			{
				fields: {
					petitioner: {
						validators: {
							notEmpty: {
								message: 'Persona que solicita es requerido'
							}
						}
					},
					priority: {
						validators: {
							notEmpty: {
								message: 'La prioridad es requerida'
							}
						}
					},
					id_destination: {
						validators: {
							notEmpty: {
								message: 'El destino es requerido'
							}
						}
					},
					id_project: {
						validators: {
							notEmpty: {
								message: 'El proyecto es requerido'
							}
						}
					},					
				},
				plugins: {
					trigger: new FormValidation.plugins.Trigger(),
					bootstrap: new FormValidation.plugins.Bootstrap()
				}
			}
		));	

		// Step 2
		_validations.push(FormValidation.formValidation(
			_formEl,
			{
				fields: {
					street: {
						validators: {
							notEmpty: {
								message: 'El campo es requerido'
							}
						}
					},
					ex_number: {
						validators: {
							notEmpty: {
								message: 'Número exterior es requerido'
							}
						}
					},
					cp: {
						validators: {
							notEmpty: {
								message: 'CP es requerido'
							}
						}
					},
					suburb: {
						validators: {
							notEmpty: {
								message: 'Colonia es requerida'
							}
						}
					},
					city: {
						validators: {
							notEmpty: {
								message: 'Estado es requerido'
							}
						}
					},
					state: {
						validators: {
							notEmpty: {
								message: 'Estado es requerido'
							}
						}
					},
					country: {
						validators: {
							notEmpty: {
								message: 'País es requerido'
							}
						}
					},
				},
				plugins: {
					trigger: new FormValidation.plugins.Trigger(),
					bootstrap: new FormValidation.plugins.Bootstrap()
				}
			}
		));
	}

	var initAvatar = function () {
		_avatar = new KTImageInput('kt_projects_add_avatar');
	}

	return {
		// public functions
		init: function () {
			_wizardEl = KTUtil.getById('kt_projects_add');
			_formEl = KTUtil.getById('kt_projects_add_form');

			initWizard();
			initValidation();
			initAvatar();
		}
	};
}();

jQuery(document).ready(function () {
	KTProjectsAdd.init();
});
