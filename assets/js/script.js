const supInfo = document.getElementById('screen_details');
const graph1 = document.getElementById('graph-1');
const graph2 = document.getElementById('graph-2');
const graph3 = document.getElementById('graph-3');

//html sup viewport infos
window.addEventListener('resize', (e) => {
    //e.preventDefault;
    supInfo.innerHTML = 'w: ' + window.innerWidth + '&nbsp;h: ' + window.innerHeight;

    if (window.innerWidth < 550) {
        graph2.style.display = 'none';
        graph3.style.display = 'block';

        //console.log('g1: ', graph1, 'g2: ', graph2, 'g3: ', graph3);
    } else if (window.innerWidth < 800) {
        graph1.style.display = 'none';
        graph2.style.display = 'block';
        graph3.style.display = 'none';

        //console.log('g1: ', graph1, 'g2: ', graph2, 'g3: ', graph3);
    } else if (window.innerWidth > 800) {
        graph1.style.display = 'block';
        graph2.style.display = 'none';
        //graph3.style.display = 'none';

        //console.log('g1: ', graph1, 'g2: ', graph2, 'g3: ', graph3);
    }
});


document.addEventListener('DOMContentLoaded', (event) => {
    const sidebarUser = document.querySelectorAll("div[id^='user-sidebar-']");
    const mainbodyUser = document.querySelectorAll("div[id^='user-mainbody-']");

    const sideUser = [];
    const mainUser = [];

    sidebarUser.forEach((sidebarUser) => {
        sidebarUser.addEventListener('click', (e) => {
            console.log('event: ', e, 'specs: ', sidebarUser);
        });
    });

    mainbodyUser.forEach((mainbodyUser) => {
        mainbodyUser.addEventListener('click', (e) => {
            console.log(sidebarUser);
            console.log('event: ', e, 'specs: ', sidebarUser);
        });
    });
});


