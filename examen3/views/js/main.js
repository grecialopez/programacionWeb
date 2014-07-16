
 
$(document).ready(function() {
    $('#form1').bootstrapValidator({
        live: 'enabled',
        message: 'This value is not valid',
        submitButtons: 'button[type="submit"]',
        submitHandler: null,
        trigger: null,
        fields: { nombre: {
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
               },
                resumen: {
                validators: {
                    stringLength: {
                        max: 200,
                        message: 'The bio must be less than 200 characters'
                    }
                }
            },
            abstract: {
                validators: {
                    stringLength: {
                        max: 200,
                        message: 'The bio must be less than 200 characters'
                    }
                }
            },
            abstract: {
                validators: {
                    stringLength: {
                        max: 200,
                        message: 'The bio must be less than 200 characters'
                    }
                }
            },
            introduccion: {
                validators: {
                    stringLength: {
                        max: 200,
                        message: 'The bio must be less than 200 characters'
                    }
                }
            },
            metodologia: {
                validators: {
                    stringLength: {
                        max: 200,
                        message: 'The bio must be less than 200 characters'
                    }
                }
            },
            contenido: {
                validators: {
                    stringLength: {
                        max: 200,
                        message: 'The bio must be less than 200 characters'
                    }
                }
            },
            
            fecha_creacion: {
                validators: {
                    date: {
                        format: 'YYYY/MM/DD',
                        message: 'The value is not a valid date'
                    }
                }
            
            },
            archivo:{
                validators: {
                    file: {
                        extension:'pdf',
                        type: 'application/pdf',
                        maxSize: 2048 * 1024,   // 2 MB
                        message: 'The selected file is not valid'
                    }
                }
            },
             conclusiones: {
                validators: {
                    stringLength: {
                        max: 200,
                        message: 'The bio must be less than 200 characters'
                    }
                }
            },
            agradecimientos: {
                validators: {
                    stringLength: {
                        max: 100,
                        message: 'The bio must be less than 10 characters'
                    }
                }
            },
            referencias: {
                validators: {
                    stringLength: {
                        max: 100,
                        message: 'The bio must be less than 100 characters'
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
                apellidos: {
                message: 'The lastname is not valid',
                validators: {
                    notEmpty: {
                        message: 'The lastname is required and cannot be empty'
                    },
                    stringLength: {
                        min: 6,
                        max: 30,
                        message: 'The lastname must be more than 6 and less than 30 characters long'
                    },
                    regexp: {
                        regexp: /^[a-zA-Z0-9_]+$/,
                        message: 'The name can only consist of alphabetical, number and underscore'
                    }
                        }
                },
                email: {
                validators: {
                    emailAddress: {
                        message: 'The value is not a valid email address'
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
        fields: { titulo: {
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
               numero: {
                validators: {
                    integer: {
                        message: 'The value is not an integer'
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
        fields: { 
            numero_indice:{
                validators:{
                    integer:'the value is not an integer'
                }
            }
    } 
});
    
    $('#revista').bootstrapValidator({
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
               /*portada:{
                validators: {
                    file: {
                        extension:'jpeg,png',
                        type: 'image/jpeg,image/png',
                        maxSize: 2048 * 1024,   // 2 MB
                        message: 'The selected file is not valid'
                    }
                }
            },*/
            fecha: {
                validators: {
                    date: {
                        format: 'YYYY/MM/DD',
                        message: 'The value is not a valid date'
                    }
                }
            
            },
            volumen: {
                message: 'The volumen is not valid',
                validators: {
                    notEmpty: {
                        message: 'The volumen is required and cannot be empty'
                    },
                    stringLength: {
                        min: 6,
                        max: 30,
                        message: 'The volumen must be more than 6 and less than 30 characters long'
                    } 
                }                 
            },
               titulo: {
                message: 'el titulo no es valido',
                validators: {
                    notEmpty: {
                        message: 'el titulo es requerido'
                    },
                    stringLength: {
                        min: 6,
                        max: 30,
                        message: 'The tittle must be more than 6 and less than 30 characters long'
                    },
                    regexp: {
                        regexp: /^[a-zA-Z0-9_]+$/,
                        message: 'The tittle can only consist of alphabetical, number and underscore'
                    }
                }
               },
               subtitulo: {
                message: 'el titulo no es valido',
                validators: {
                    notEmpty: {
                        message: 'el titulo es requerido'
                    },
                    stringLength: {
                        min: 6,
                        max: 30,
                        message: 'The tittle must be more than 6 and less than 30 characters long'
                    },
                    regexp: {
                        regexp: /^[a-zA-Z0-9_]+$/,
                        message: 'The tittle can only consist of alphabetical, number and underscore'
                    }
                }
               },
                numero: {
                message: 'el numero no es valido',
                validators: {
                    notEmpty: {
                        message: 'el numero es requerido'
                    },
                        integer: {
                        message: 'The value is not an integer'
                    }
                }
            },        
            clave: {
                message: 'la clave no es valida',
                validators: {
                    notEmpty: {
                        message: 'la clave es requerida'
                    }                   
                }
            },
            directorio: {
                validators: {
                    stringLength: {
                        max: 200,
                        message: 'The bio must be less than 200 characters'
                    }
                }
            },
              editorial: {
                validators: {
                    stringLength: {
                        max: 200,
                        message: 'The bio must be less than 200 characters'
                    }
                }
            }
        }  
     });


$('#status').bootstrapValidator({
        live: 'enabled',
        message: 'This value is not valid',
        submitButtons: 'button[type="submit"]',
        submitHandler: null,
        trigger: null,
        fields: { 
            status: {
                message: 'The status is not valid',
                validators: {
                    notEmpty: {
                        message: 'The status is required and cannot be empty'
                    },
                    stringLength: {
                        min: 6,
                        max: 30,
                        message: 'The status must be more than 6 and less than 30 characters long'
                    },
                    regexp: {
                        regexp: /^[a-zA-Z0-9_]+$/,
                        message: 'The name can only consist of alphabetical, number and underscore'
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



});
