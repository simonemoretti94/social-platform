const supInfo = document.getElementById('screen_details');

window.addEventListener('resize', (e) => {
    e.preventDefault;
    supInfo.innerHTML = 'w: ' + window.innerWidth + '&nbsp;h: ' + window.innerHeight;
});


document.getElementById('graph_redirect').addEventListener('click', (e) => {
    console.log('clicked: ', e.target);
});