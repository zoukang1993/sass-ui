class Verify {
    constructor() {

    }

    invalidText(event, string='') {
        event.preventDefault();
        return event.target.setCustomValidity(string);
    }

    message_suspension(string="") {
        let div = document.createElement('div');
        document.body.appendChild(div);
        div.className = "suspension-message";
        div.className += " active warning";
        div.innerHTML = string;
    }
}

export {Verify};
