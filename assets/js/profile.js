const form = document.getElementById('form');
const fName = document.getElementById('firstName');
const lName = document.getElementById('lastName');
const email = document.getElementById('exampleInputEmail1');
const phone = document.getElementById('phone');
const company = document.getElementById('company');
const city = document.getElementById('city');
const zip = document.getElementById('zip');
const country = document.getElementById('country');
const ps1 = document.getElementById('ps1');
const ps2 = document.getElementById('ps2');


form.addEventListener('submit', (e) => {
	e.preventDefault();

	checkInputs();
});

function checkInputs() {
	const fNameValue = fName.value.trim();
	const lNameValue = lName.value.trim();
	const emailValue = email.value.trim();
	const phoneValue = phone.value.trim();
	const companyValue = company.value.trim();
	const cityValue = city.value.trim();
	const zipValue = zip.value.trim();
	const countryValue = country.value.trim();
	const ps1Value = ps1.value.trim();
	const ps2Value = ps2.value.trim();
	

	if(fNameValue === '') {
		setErrorFor(fName, 'First name cannot be blank');
	} else {
		setSuccessFor(fName);
	}
	if(lNameValue === '') {
		setErrorFor(lName, 'Last name cannot be blank');
	} else {
		setSuccessFor(lName);
	}
	if(phoneValue === '') {
		setErrorFor(phone, 'Phone cannot be blank');
	} else {
		setSuccessFor(phone);
	}
	if(companyValue === '') {
		setErrorFor(company, 'Company cannot be blank');
	} else {
		setSuccessFor(company);
	}
	if(cityValue === '') {
		setErrorFor(city, 'City cannot be blank');
	} else {
		setSuccessFor(city);
	}
	if(zipValue === '') {
		setErrorFor(zip, 'Zip cannot be blank');
	} else {
		setSuccessFor(zip);
	}
	if(countryValue === '') {
		setErrorFor(country, 'Country cannot be blank');
	} else {
		setSuccessFor(country);
	}
	
	if(emailValue === '') {
		setErrorFor(email, 'Email cannot be blank');
	} else if (!isEmail(emailValue)) {
		setErrorFor(email, 'Not a valid email');
	} else {
		setSuccessFor(email);
	}

	if(ps1Value === '') {
		setErrorFor(ps1, 'Password cannot be blank');
	} else {
		setSuccessFor(ps1);
	}
	if(ps2Value === '') {
		setErrorFor(ps2, 'Password cannot be blank');
	} else {
		setSuccessFor(ps2);
	}
	
}

function setErrorFor(input, message) {
	const formGroup = input.parentElement;
	const small = formGroup.querySelector('small');
	formGroup.className = 'form-group error';
	small.innerText = message;
}



function setSuccessFor(input) {
	const formGroup = input.parentElement;
	formGroup.className = 'form-group success';
}

function isEmail(email) {
	return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(email);
}

// Loading
window.onload = function() {
	document.querySelector('.loader').style.display = 'none';
}