const supInfo = document.getElementById('screen_details');
const graph1 = document.getElementById('graph-1');
const graph2 = document.getElementById('graph-2');
const graph3 = document.getElementById('graph-3');


document.getElementById('graph_redirect').addEventListener('click', (e) => {
    console.log('clicked: ', e.target);
    graph2.style.display = 'none';
    graph3.style.display = 'none';
});

//html sup viewport infos
window.addEventListener('resize', (e) => {
    e.preventDefault;
    supInfo.innerHTML = 'w: ' + window.innerWidth + '&nbsp;h: ' + window.innerHeight;

    //er-graph page img renderer
    if (window.innerWidth > 800) {
        graph1.style.display = 'block';
        graph2.style.display = 'none';
        graph3.style.display = 'none';
    }
    else if (window.innerWidth < 800) {
        graph1.style.display = 'none';
        graph2.style.display = 'block';
        graph3.style.display = 'none';
    }
    else if (window.innerWidth < 450) {
        graph1.style.display = 'none';
        graph2.style.display = 'none';
        graph3.style.display = 'block';
    }
    else {
        graph1.style.display = 'none';
    }
});