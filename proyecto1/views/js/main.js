
 
$(document).ready(function() {
    $('#form1').bootstrapValidator({
        live: 'enabled',
        message: 'This value is not valid',
        submitButtons: 'button[type="submit"]',
        submitHandler: null,
        trigger: null,
        fields: { Nombre: {
                message: 'The name is not valid',
                validators: {
                    notEmpty: {
                        message: 'The username is required and cannot be empty'
                    },
                    stringLength: {
                        min: 6,
                        max: 30,
                        message: 'The username must be more than 6 and less than 30 characters long'
                    },
                    regexp: {
                        regexp: /^[a-zA-Z0-9_]+$/,
                        message: 'The username can only consist of alphabetical, number and underscore'
                    }
                }
               }
        } 
        });


          $('#form2').bootstrapValidator({
        live: 'enabled',
        message: 'This value is not valid',
        submitButtons: 'button[type="submit"]',
        submitHandler: null,
        trigger: null,
        fields: { Nombre: {
                message: 'The name is not valid',
                validators: {
                    notEmpty: {
                        message: 'The name is required and cannot be empty'
                    },
                    stringLength: {
                        min: 6,
                        max: 30,
                        message: 'The name must be more than 6 and less than 30 characters long'
                    },
                    regexp: {
                        regexp: /^[a-zA-Z0-9_]+$/,
                        message: 'The name can only consist of alphabetical, number and underscore'
                    }
                }
               }
        } 
        });

    $('#form3').bootstrapValidator({
        live: 'enabled',
        message: 'This value is not valid',
        submitButtons: 'button[type="submit"]',
        submitHandler: null,
        trigger: null,
        fields: { nombre: {
                message: 'The name is not valid',
                validators: {
                    notEmpty: {
                        message: 'The name is required and cannot be empty'
                    },
                    stringLength: {
                        min: 6,
                        max: 30,
                        message: 'The name must be more than 6 and less than 30 characters long'
                    },
                    regexp: {
                        regexp: /^[a-zA-Z0-9_]+$/,
                        message: 'The name can only consist of alphabetical, number and underscore'
                    }
                		}
               	},
               bandera:{
                validators: {
                    file: {
                        extension:'jpeg,png',
                        type: 'image/jpeg,image/png',
                        maxSize: 2048 * 1024,   // 2 MB
                        message: 'The selected file is not valid'
                    }
                }
            }
        } 
        });


       $('#form4').bootstrapValidator({
        live: 'enabled',
        message: 'This value is not valid',
        submitButtons: 'button[type="submit"]',
        submitHandler: null,
        trigger: null,
        fields: { nombre: {
                message: 'The name is not valid',
                validators: {
                    notEmpty: {
                        message: 'The name is required and cannot be empty'
                    },
                    stringLength: {
                        min: 6,
                        max: 30,
                        message: 'The name must be more than 6 and less than 30 characters long'
                    },
                    regexp: {
                        regexp: /^[a-zA-Z0-9_]+$/,
                        message: 'The name can only consist of alphabetical, number and underscore'
                    }
                }
               },
              abreviatura: {
                message: 'la abreviatura no es valida',
                validators: {
                    notEmpty: {
                        message: 'la abreviatura es requerida'
                    },
                    stringLength: {
                        min: 3,
                        max: 5,
                        message: 'la abreviatura es demasiado larga'
                    },
                    regexp: {
                        regexp: /^[a-zA-Z0-9_]+$/,
                        message: 'caracteres no validos'
                    }
                }
               } 
        } 
     });

$('#form5').bootstrapValidator({
        live: 'enabled',
        message: 'This value is not valid',
        submitButtons: 'button[type="submit"]',
        submitHandler: null,
        trigger: null,
        fields: { nombre: {
                message: 'The name is not valid',
                validators: {
                    notEmpty: {
                        message: 'The name is required and cannot be empty'
                    },
                    stringLength: {
                        min: 3,
                        max: 30,
                        message: 'The name must be more than 3 and less than 30 characters long'
                    },
                    regexp: {
                        regexp: /^[a-zA-Z0-9_]+$/,
                        message: 'The name can only consist of alphabetical, number and underscore'
                    }
                }
               }
           /*escudo:{
                validators: {
                    file: {
                        extension:'jpg,png',
                        type: 'image/jpg,image/png',
                        maxSize: 2048 * 1024,   // 2 MB
                        message: 'The selected file is not valid'
                    }
                }
            }*/
        } 
     });
    
    $('#form6').bootstrapValidator({
        live: 'enabled',
        message: 'This value is not valid',
        submitButtons: 'button[type="submit"]',
        submitHandler: null,
        trigger: null,
        fields: { nombre: {
                message: 'The name is not valid',
                validators: {
                    notEmpty: {
                        message: 'The name is required and cannot be empty'
                    },
                    stringLength: {
                        min: 6,
                        max: 30,
                        message: 'The name must be more than 6 and less than 30 characters long'
                    },
                    regexp: {
                        regexp: /^[a-zA-Z0-9_]+$/,
                        message: 'The name can only consist of alphabetical, number and underscore'
                    }
                }
               },
               apellido: {
                message: 'el apellido no es valido',
                validators: {
                    notEmpty: {
                        message: 'el apellido es requerido'
                    },
                    stringLength: {
                        min: 6,
                        max: 30,
                        message: 'The lastname must be more than 6 and less than 30 characters long'
                    },
                    regexp: {
                        regexp: /^[a-zA-Z0-9_]+$/,
                        message: 'The lastname can only consist of alphabetical, number and underscore'
                    }
                }
               },
                peso: {
                message: 'el peso no es valido',
                validators: {
                    notEmpty: {
                        message: 'el peso es requerido'
                    }
                  }
            },
               estatura: {
                message: 'la estatura no es valida',
                validators: {
                    notEmpty: {
                        message: 'la estatura es requerida'
                    }
                  }
            },
             foto:{
                validators: {
                    file: {
                        extension:'jpeg,png',
                        type: 'image/jpeg,image/png',
                        maxSize: 2048 * 1024,   // 2 MB
                        message: 'The selected file is not valid'
                    }
                }
            },
             Edad: {
                validators: {
                    integer: {
                        message: 'The value is not an integer'
                    }
                }
            }      
        } 
     });




  $(function () {
	$('#datetimepicker1').datetimepicker({
		        language: 'es'
	});
  });


    $('#form6').hide();
    $('#form7').hide();

    $('#botonEntrenador').click(
            function () {
              $('#form6').hide('slow');
              $('#form7').show('slow');
              
            }

          );
            $('#botonJugador').click(
            function () {
              $('#form7').hide('slow');
              $('#form6').show('slow');
                  });

});
