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
$("#formConnexion").validate({
	rules:{
		mail: {
			required:true,
			email:true
		},
		password:{
			required:true,
			minlength:6
		}
	},
	messages:{
		mail: {
			required:"You must fill this field.",
			email:true
		},
		password:{
			required:"You must fill this field.",
			minlength:"You need at least 6 characters."
		}
	},
	submitHandler: function(form) {
    		form.submit();
    	}
	}

});
$("#lotForm").validate({
	rules:{
		modeProd:{
			required:true,
		},
		PU:{
			required:true,
		},
		Qte:{
			required:true
		},
		unite: {
			required:true,
		},
		rayon:{
			required:true,
		},
		variete:{
			required:true
		},
		produit:{
			required:true,
		},
		dateLDC:{
			required:true,
			date:true
		},
		description:{
			required:true,
			minlength:5
		}
	},
	messages:{
		modeProd:{
			required:"Vous devez remplir ce champ.",
		},
		PU:{
			required:"Vous devez remplir ce champ.",
		},
		Qte:{
			required:"Vous devez remplir ce champ."
		},
		unite: {
			required:"Vous devez remplir ce champ.",
		},
		rayon:{
			required:"Vous devez remplir ce champ.",
		},
		variete:{
			required:"Vous devez remplir ce champ."
		},
		produit:{
			required:"Vous devez remplir ce champ.",
		},
		dateLDC:{
			required:"Vous devez remplir ce champ.",
			date:"Le format ne correspond pas."
		},
		description:{
			required:"Vous devez remplir ce champ.",
			minlength:"Description trop courte."
		}
	},
	submitHandler: function(form) {
    		form.submit();
	}

});
