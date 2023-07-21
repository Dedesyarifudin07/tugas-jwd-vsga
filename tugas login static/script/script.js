const inputEmail = document.querySelector('#email');
const inputPassword = document.querySelector('#password');
const submit = document.querySelector('.submit');
const error = document.querySelector('.error');

submit.addEventListener('click',(e) => {
    if(inputEmail.value == "dedesyarifudin@gmail.com" && inputPassword.value == "Indonesiamerdeka"){
        alert('anda berhasil login');
    }else{
        const element = document.createElement('h1');
        const text = document.createTextNode('email atau password salah');

        error.append(element);
        element.append(text);
        setTimeout(()=> {
            element.remove();
        },6000)
    }
   
})
