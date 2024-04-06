const h1 = document.getElementById('h1_header');
const eventPre = document.getElementById('event_pre');

document.getElementById('h1_header').addEventListener('click', (event) => {
    h1.innerHTML = 'everything works!';
    //alert('everything works!');
    eventPre.innerHTML = event.target;
    console.log(event);
});

window.addEventListener('resize', (e) => {
    e.preventDefault;
    h1.innerHTML = window.innerWidth;
})