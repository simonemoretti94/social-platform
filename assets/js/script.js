const supInfo = document.getElementById('screen_details');

window.addEventListener('resize', (e) => {
    e.preventDefault;
    supInfo.innerHTML = 'w: ' + window.innerWidth + '&nbsp;h: ' + window.innerHeight;
})