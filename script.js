function validate() {
	const name = document.getElementById ('name')
	const email = document.getElementById ('email')
	const form = document.getElementById('form')
	const errorElement = document.getElementById('error')

	form.addEventListener('submit', (event) => {
		let messages = [] 
		event.preventDefault()
		if (name.value === '' || name.value == null){
			messages.push('Name is required')
		}

		if (email.value === '' || email.value == null){
			messages.push('Email is required')
		}

		var letters = /^[a-zA-Z]+$/;
		if (name.value !== (letters)) {
			
			messages.push('Format must be Alphabet');
			// return false;
		}
		else {
			//return true;
		}

		if (messages.length > 0){
			event.preventDefault()
			errorElement.innerText = messages.join (', ')
		}

		
 
			
			
	})


}
