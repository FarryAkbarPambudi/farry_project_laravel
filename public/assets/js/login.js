document.getElementById('Loginform').addEventListener('submit', function(event){
    event.preventDefault();

    const correctUsername = 'travel';
    const correctPassword = '123';

    const username = document.getElementById('username').value;
    const password = document.getElementById('password').value;

    if (username === correctUsername && password === correctPassword){
        alert("login berhasil");
        window.location.href = '/index';
    }else{
        alert("username atau password tidak sesuai");
    }

});