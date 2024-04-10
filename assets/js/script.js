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


document.addEventListener('DOMContentLoaded', () => {
    const sidebarUser = document.querySelectorAll("div[id^='user-sidebar-']");
    const mainbodyUser = document.querySelectorAll("div[id^='user-mainbody-']");

    const sidebarUserArray = [];
    //pushing elements into each respective's array
    sidebarUser.forEach((element) => {
        sidebarUserArray.push(element);
    })

    const mainbodyUserArray = [];
    mainbodyUser.forEach((element) => {
        mainbodyUserArray.push(element);
    });

    //console.log('sidebaruser: ', sidebarUser, ' mainbodyuser: ', mainbodyUser, '\n\n sideuser array: ', sidebarUserArray, ' mainuser array: ', mainbodyUserArray);

    let tempval = null;
    let splicedElement1 = null;
    let splicedElement2 = null;

    sidebarUserArray.forEach((element) => {
        element.addEventListener('click', (element) => {
            console.log(element.target.id);
            if (element.target.id.split('-').length == 3) {
                tempval = element.target.id.split('-')[2];
                console.log('id: ', tempval);
                splicedElement1 = document.querySelector(`div#user-sidebar-${element.target.id.split('-')[2]}`);
                splicedElement2 = document.querySelector(`div#user-mainbody-${element.target.id.split('-')[2]}`);
                splicedElement1.style.display = 'none';
                splicedElement2.style.display = 'none';
                console.log('splicedelement1: ', splicedElement1, 'splicedelement2: ', splicedElement2);
            }
            else {
                console.log(element.target);
            }
        });
    });


    // sidebarUser.forEach((sidebarUser) => {
    //     sidebarUser.addEventListener('click', (e) => {
    //         console.log(e);
    //         //tempval = e.target.id;
    //         //tempval = e.target.id.split('-');
    //         if (e.target.id.split('-').length == 3) {
    //             tempval = e.target.id.split('-')[2];
    //             console.log('id: ', tempval);
    //         }
    //         else {
    //             console.log(e.target);
    //         }
    //     });
    // });

    // mainbodyUser.forEach((mainbodyUser) => {
    //     mainbodyUser.addEventListener('click', (e) => {
    //         console.log(e);
    //         //tempval = e.target.id;
    //         //tempval = e.target.id.split('-');
    //         if (e.target.id.split('-').length == 3) {
    //             tempval = e.target.id.split('-')[2];
    //             console.log('id: ', tempval);
    //         }
    //         else {
    //             console.log(e.target);
    //         }

    //     });
    // });
});


