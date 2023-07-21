//a,bil element
const capucino = document.querySelector('.capucino');
const mixue = document.querySelector('.mixue').value;
const naspad =document.querySelector('.naspad');
const seblak =document.querySelector('.seblak');
const cilor =document.querySelector('.cilor');
const total =document.querySelector('.total');
let paragraf = document.querySelector('p').dataset.price;
const container =document.querySelector('.container');

container.addEventListener('click',(e) => {
    //ubah warna yang di klik jadi biru
    e.target.classList.add("blue");
  
})
// console.log(e.target.children[0]);
//     let jumlahHarga = '';
//     const jumlah = e.target.children[0].dataset.price ;
//     console.log(jumlah + e.target.children[0].dataset.price );
//    console.log(2 +2 );
//    jumlahHarga =total + jumlah;


  // let jumlah = 0;
    // const price = e.target.children[0].dataset.price ;
    //tambahkan harga yang di kliknya
//    e.target.children[0];
        // console.log(jumlah += price);
        // total.innerHTML = jumlah;
        