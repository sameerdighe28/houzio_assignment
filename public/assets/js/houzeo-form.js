// JavaScript Document

$(document).ready(function() {
    $('#interviewForm').bootstrapValidator({
        feedbackIcons: {
            valid: 'fa fa-check-circle',
            invalid: 'fa fa-times-circle',
            validating: 'fa fa-refresh'
        },
        fields: {
            'minOneChk[]': {
                validators: {
                    choice: {
                        min: 1,
                        message: 'Please select atleast one!'
                    }
                }
            },
			firstName: {
                group: '.group',
                validators: {
                    notEmpty: {
                        message: 'The first name is required and cannot be empty'
                    }
                }
            },
            lastName: {
                // The "group" option can be set via HTML attribute
                // <input type="text" class="form-control" name="lastName" data-bv-group=".group" />
                validators: {
                    notEmpty: {
                        message: 'The last name is required and cannot be empty'
                    }
                }
            },
			gender: {
                validators: {
                    notEmpty: {
                        message: 'The gender is required'
                    }
                }
            },
			name: {
                validators: {
                    notEmpty: {
                        message: 'Please enter your name.'
                    }
                }
            },
			buyer_city: {
                validators: {
                    notEmpty: {
                        message: 'Please enter your city.'
                    }
                }
            },
			buyer_apt: {
                validators: {
                    notEmpty: {
                        message: 'Please enter type.'
                    }
                }
            },
			buyer_street: {
                validators: {
                    notEmpty: {
                        message: 'Please enter street.'
                    }
                }
            },
			state: {
                validators: {
                    notEmpty: {
                        message: 'Please select state.'
                    }
                }
            },
            acceptTerms: {
                validators: {
                    notEmpty: {
                        message: 'You have to accept the terms and policies'
                    }
                }
            },
			email: {
                validators: {
                    notEmpty: {
                        message: 'Please enter your email address'
                    },
                    email: {
                        message: 'The input is not a valid email address'
                    }
                }
            },
			emailid: {
                validators: {
					notEmpty: {
                            message: 'Please enter your email address'
                        },
                    emailid: {
                        message: 'The input is not a valid US email address'
                    }
                }
            },
			/*phoneNumber: {
                validators: {
                    phone: {
						country: 'US',
                        message: 'The value can contain only digits'
                    }
                }
            },*/
			 phoneNumber: {
                validators: {
					notEmpty: {
                            message: 'Please enter your phone number'
                        },
                    phone: {
						min: 10,
						country: 'US',
                        message: 'The input is not a valid US phone number'
                    }
                }
            },
            phoneNumberUK: {
            	validators: {
					 notEmpty: {
                            message: 'Please enter your phone number'
                        },
						phone: {
                        message: 'The input is not a valid UK phone number',
            			country: 'GB'
            		}
            	}
            },
			zipCode: {
                validators: {
					notEmpty: {
                            message: 'Please enter your zip code'
                        },
                    zipCode: {
                        country: 'US',
                        message: 'The input is not a valid US zip code'
                    }
                }
            },
			firstFile: {
                validators: {
					notEmpty: {
                            message: 'Please select a file'
                        },
				}
            },
			password: {
                validators: {
                    notEmpty: {
                        message: 'The password is required and can\'t be empty'
                    },
                    identical: {
                        field: 'confirmPassword',
                        
                    }
                }
            },
            confirmPassword: {
                validators: {
                    notEmpty: {
                        message: 'The confirm password is required and can\'t be empty'
                    },
                    identical: {
                        field: 'password',
                        message: 'The password and its confirm are not the same'
                    }
                }
            },
			website: {
                validators: {
                    notEmpty: {
                        message: 'The input is not a valid URL'
                    }
                }
            },
			
        }
	});
});
		