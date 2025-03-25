const myForm = document.getElementById('myform');

myForm.addEventListener('submit', function(e){
    const formData = new FormData(myForm);

    // Check if name is not empty
    const name = formData.get('name');
    if(name.trim() === ''){
        alert("Name can't be empty");
        e.preventDefault();
    }

    // check if the email is valid
    let emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
    const email = formData.get('email');
    if(!emailRegex.test(email)){
        alert('Enter valid email');
        e.preventDefault();
    }

    // check if the password is strong
    let pwdRegex = /^(?=.*\d)(?=.*[!@#$%^&*])(?=.*[a-z])(?=.*[A-Z]).{8,}$/;
    const password = formData.get('password');
    if(!pwdRegex.test(password)){
        alert('Check Password Format-> minimum Length: 8, only digit, small letters, capital letters, space are allowed');
        e.preventDefault();
    }

})

function togglePassword(){
    const pwd = document.getElementById('password');
    if(pwd.type === 'text'){
        pwd.type = 'password';
    }else{
        pwd.type = 'text';
    }
}