import { oneElem } from 'gap-front-s';
import {BrowserInfo} from './browserInfo.js';

window.onload = function() {
    let browserInfo = new BrowserInfo();
    browserInfo.judgeBrowser();

    let wid = document.documentElement.offsetWidth || document.body.offsetWidth;
    toggleSidebar(wid);
};

function toggleSidebar (wid) {
    let openSidebar = oneElem('.toggle-open');
    let sidebarResponsive = oneElem('.page-body .sidebar');
    let pageBody = oneElem('.page-body');
    let main = oneElem('.page-body .main');
    
   
    openSidebar.on('click', function() {
        if (wid <= 640) {
            sidebarResponsive.toggleClass('active');

            pageBody.on('click', function(e) {
                e.preventDefault;
                if (sidebarResponsive.hasClass('active')) {
                    sidebarResponsive.removeClass('active');
                }
            });
        }

        if (wid > 640) {
            sidebarResponsive.toggleClass('active-pc');
            main.toggleClass('active-pc');
        }
    });
}
