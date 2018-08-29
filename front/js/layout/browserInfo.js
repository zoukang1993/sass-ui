export class BrowserInfo {
    constructor() {
    }

    getBrowserInfo() {
        var agent = navigator.userAgent.toLowerCase();

        var regStr_ie = /msie [\d.]+;/gi;
        var regStr_ff = /firefox\/[\d.]+/gi;
        var regStr_chrome = /chrome\/[\d.]+/gi;
        var regStr_saf = /safari\/[\d.]+/gi;

        if (agent.indexOf("msie") > 0) {
            return agent.match(regStr_ie);
        }

        if (agent.indexOf("firefox") > 0) {
            return agent.match(regStr_ff);
        }

        if (agent.indexOf("safari") > 0 && agent.indexOf("chrome") < 0) {
            return agent.match(regStr_saf);
        }

        if (agent.indexOf("chrome") > 0) {
            return agent.match(regStr_chrome);
        }
    }

    formatBrowserInfo() {
        let browserInfo = this.getBrowserInfo()[0];
        let infoArr = browserInfo.split('/');
        return infoArr;
    }

    judgeBrowser() {
        let baseInfoArr = this.formatBrowserInfo();
        let type = baseInfoArr[0];
        let version = baseInfoArr[1];
        let isTrust = 0;
        let warningMsg = `please change your browser or browser version type
        and make the version higher,be sure your browser is chrome 58+ ,
        firefox 54+, safari 10+, ie 10+ !`;

        if (type === 'chrome' && version > 58) {
            isTrust = 1;
            return isTrust;
        }

        if (type === 'firefox' && version > 54) {
            isTrust = 1;
            return isTrust;
        }

        if (type === 'safari' && version > 10) {
            isTrust = 1;
            return isTrust;
        }

        if (type === 'msie' && version > 10) {
            isTrust = 1;
            return isTrust;
        }

        this.messageSuspension(warningMsg);
        isTrust = 0;

        return isTrust;
    }

    messageSuspension(msgContent = "") {
        let div = document.createElement('div');
        document.body.appendChild(div);
        div.className = "suspension-message";
        div.className += " active warning break-word";
        div.innerHTML = msgContent;
    }
}