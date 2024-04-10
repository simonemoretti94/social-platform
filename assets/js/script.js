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
    splicedElement2 = document.querySelector(`div#col-main-${element.target.id.split('-')[2]}`);

    splicedElement1.remove();
    splicedElement2.style = "transform: scale(1.1); color: var(--blue-dark); text-shadow: .5px .5px 0 var(--blue-light);";
    setTimeout(() => {
        splicedElement2.remove();
    }, 2000);

    console.log('splicedelement1: ', splicedElement1, '\n\nsplicedelement2: ', splicedElement2);
    console.log('success!');
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

    } else if (window.innerWidth < 800) {
        graph1.style.display = 'none';
        graph2.style.display = 'block';
        graph3.style.display = 'none';

    } else if (window.innerWidth > 800) {
        graph1.style.display = 'block';
        graph2.style.display = 'none';

    }
});

/* This block verifies if a sidebar.php's element is clicked; when it happens,
    it delete the mainbody.php's element that shares same infos  */
document.addEventListener('DOMContentLoaded', () => {
    const sidebarUser = document.querySelectorAll("i[id^='close-icon-']");

    //pushing elements into each array
    const sidebarUserArray = [];
    sidebarUser.forEach((element) => {
        sidebarUserArray.push(element);
    })

    //defyining object's variable
    let tempval = null;
    let splicedElement1 = null;
    let splicedElement2 = null;

    /* this block listens to click event onto an sidebar.php's element,
        when it happens, it searches the similar infos element into mainbody.php,
        then it applies 'display: none;' to both elements */

    sidebarUserArray.forEach((element) => {
        element.addEventListener('click', (element) => {
            if (element.target.id.split('-').length == 3) {
                tempval = element.target.id.split('-')[2];
                //console.log('id: ', tempval);
                elementHider(element, splicedElement1, splicedElement2, tempval);
            }
            else {
                console.log(element.target);
            }
        });
    });
});


