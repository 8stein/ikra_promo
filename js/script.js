"use strict"

$(function()
{
	$.extend($.validator.messages,
	{
		required: "Это поле является обязательным"
	});

	$('#form').validate(
	{
		rules:
		{
			first: { required: true },
			drunk: { required: true },
			banners: { required: true },
			happy: { required: true },
			next: { required: true }
		},

		invalidHandler: function(form, validator)
		{
			$('#error').toggle(validator.numberOfInvalids());
		},

		showErrors: function(){}

	});
});