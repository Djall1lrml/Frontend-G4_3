document.addEventListener('DOMContentLoaded', function() {
    // Get form elements
    const loginForm = document.getElementById('login-form');
    const registerForm = document.getElementById('register-form');
    const showRegisterLink = document.getElementById('show-register');
    const showLoginLink = document.getElementById('show-login');
    
    // Switch to registration form
    showRegisterLink.addEventListener('click', function(e) {
        e.preventDefault();
        loginForm.style.display = 'none';
        registerForm.style.display = 'block';
    });
    
    // Switch to login form
    showLoginLink.addEventListener('click', function(e) {
        e.preventDefault();
        registerForm.style.display = 'none';
        loginForm.style.display = 'block';
    });
    
    // Form submission handling
    const forms = document.querySelectorAll('form');
    forms.forEach(form => {
        form.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Get all input values
            const formData = new FormData(form);
            const formValues = {};
            
            for (let [key, value] of formData.entries()) {
                formValues[key] = value;
            }
            
            // Here you would typically send the data to your server
            console.log('Form submitted with values:', formValues);
            
            // For demo purposes, show an alert
            const formType = form.closest('.auth-container').id === 'login-form' ? 'Login' : 'Registration';
            alert(`${formType} successful! (This is a demo)`);
            
            // Reset the form
            form.reset();
        });
    });
    
    // Password validation for registration
    if (registerForm) {
        const passwordInputs = registerForm.querySelectorAll('input[type="password"]');
        const submitButton = registerForm.querySelector('.btn-submit');
        
        passwordInputs.forEach(input => {
            input.addEventListener('input', function() {
                const password = passwordInputs[0].value;
                const confirmPassword = passwordInputs[1].value;
                
                if (password && confirmPassword && password !== confirmPassword) {
                    passwordInputs[1].setCustomValidity("Passwords don't match");
                } else {
                    passwordInputs[1].setCustomValidity('');
                }
            });
        });
    }
});