//a,bil element
const capucino = document.querySelector('.capucino');
const mixue = document.querySelector('.mixue').children[0].value;
const naspad =document.querySelector('.naspad').children[0].dataset.price;
const seblak =document.querySelector('.seblak').children[0].dataset.price;
const cilor =document.querySelector('.cilor').dataset.price;
const total =document.querySelector('.total').children[0].dataset.price;
const paragraf = document.querySelector('#total');
const container =document.querySelector('.container');

let priceTotal  = 0;
let array = [];
container.addEventListener('click',(e) => {
    //ubah background jadi warna biru
    e.target.classList.add("blue");

    //jumlahkan data nya
    priceTotal += parseInt(e.target.children[0].dataset.price);
    
    //tampilkan ke html
      paragraf.innerHTML =`RP:${priceTotal},00` ;

      console.log(priceTotal);
    
})


        