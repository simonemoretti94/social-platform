/* Functions */

/**
 * 
 * @param {object} element , sidebar element click event;
 * @param {null} sidebarEl , sidebar element ready to be assigned;
 * @param {null} mainbodyEl , mainbody element ready to be assigned;
 * @param  {...null} debugVar , debug value;
 * @simonemoretti94
 * @argument thi function enable the usera to interact wit DOM, clicking onto sidebar's element and decide whether hide or not its correspondant into mainbody DOM, referring to index.php
 */
function elementHider(element, sidebarEl, mainbodyEl, ...debugVar) {
    console.log('id: ', debugVar);
    splicedElement1 = document.querySelector(`div#user-sidebar-${element.target.id.split('-')[2]}`);
    splicedElement2 = document.querySelector(`div#user-mainbody-${element.target.id.split('-')[2]}`);
    splicedElement1.style.display = 'none';
    splicedElement2.style.display = 'none';
    console.log('splicedelement1: ', splicedElement1, 'splicedelement2: ', splicedElement2);
    alert('success!');
}

/* ER-graph.php nodes */

const supInfo = document.getElementById('screen_details');
const graph1 = document.getElementById('graph-1');
const graph2 = document.getElementById('graph-2');
const graph3 = document.getElementById('graph-3');

/* ER-graph.php renderer */
window.addEventListener('resize', (e) => {
    //e.preventDefault;

    //*.php sup viewport infos
    supInfo.innerHTML = 'w: ' + window.innerWidth + '&nbsp;h: ' + window.innerHeight;

    //This block renders imgs based on viewporth width
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

/* This block verifies if a sidebar.php's element is clicked; when it happens,
    it delete the mainbody.php's element that shares same infos  */
document.addEventListener('DOMContentLoaded', () => {
    const sidebarUser = document.querySelectorAll("div[id^='user-sidebar-']");
    const mainbodyUser = document.querySelectorAll("div[id^='user-mainbody-']");

    //pushing elements into each array
    const sidebarUserArray = [];
    sidebarUser.forEach((element) => {
        sidebarUserArray.push(element);
    })

    // const mainbodyUserArray = [];
    // mainbodyUser.forEach((element) => {
    //     mainbodyUserArray.push(element);
    // });

    //console.log('sidebaruser: ', sidebarUser, ' mainbodyuser: ', mainbodyUser, '\n\n sideuser array: ', sidebarUserArray, ' mainuser array: ', mainbodyUserArray);

    //defyining object's variable
    let tempval = null;
    let splicedElement1 = null;
    let splicedElement2 = null;

    /* this block listens to click event onto an sidebar.php's element,
        when it happens, it searches the similar infos element into mainbody.php,
        then it applies 'display: none;' to both elements */

    sidebarUserArray.forEach((element) => {
        element.addEventListener('click', (element) => {
            console.log(element.target.id);
            if (element.target.id.split('-').length == 3) {
                tempval = element.target.id.split('-')[2];
                console.log('id: ', tempval);
                // splicedElement1 = document.querySelector(`div#user-sidebar-${element.target.id.split('-')[2]}`);
                // splicedElement2 = document.querySelector(`div#user-mainbody-${element.target.id.split('-')[2]}`);
                // splicedElement1.style.display = 'none';
                // splicedElement2.style.display = 'none';
                // console.log('splicedelement1: ', splicedElement1, 'splicedelement2: ', splicedElement2);
                elementHider(element, splicedElement1, splicedElement2, tempval);
            }
            else {
                console.log(element.target);
            }
        });
    });
});


