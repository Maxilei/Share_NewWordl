$("#myFrom").validate({
	rules:{
		userName:{
			required:true,
			minlength:3
		},
		userSurname:{
			required:true,
			minlength:3
		},
		adresse:{
			required:true
		},
		mail: {
			required:true,
			email:true
		},
		repQuesSec:{
			required:true,
			minlength:3
		},
		userRole:{
			required:true
		},
		password:{
			required:true,
			minlength:6
		},
		passverif:{
			required:true,
			minlength:6
		},
		rue:"required",
		cp:{
			required:true,
			minlength:5,
			maxlength:5
		},
		ville:"required"
	},
	messages:{
		userName:{
			required:"You must fill this field.",
			minlength:"You need at least 3 characters."
		},
		userSurname:{
			required:"You must fill this field.",
			minlength:"You need at least 3 characters."
		},
		adresse:{
			required:"You must fill this field.",
		},
		mail: {
			required:"You must fill this field.",
			email:true
		},
		repQuesSec:{
			required:"You must fill this field.",
			minlength:"You need at least 3 characters."
		},
		userRole:{
			required:"You must fill this field."
		},
		password:{
			required:"You must fill this field.",
			minlength:"You need at least 6 characters."
		},
		passverif:{
			required:"You must fill this field.",
			minlength:"You need at least 6 characters."
		},
		rue:"You must fill this field.",
		cp:"This field need 5 digits.",
		ville:"You must fill this field."
	},
	submitHandler: function(form) {
		var passwd = document.getElementById('password');
		var verifpass = document.getElementById('passverif');
    	if (passwd.value == verifpass.value){
    		form.submit();
    	}else{
    		$('#wrongverif').css("visibility", "visible");

    	}
	}

});
