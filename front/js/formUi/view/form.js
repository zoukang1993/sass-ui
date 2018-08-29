import {oneElem} from 'gap-front-s';
import {Verify} from './verify';

(
    function formUi() {
        let submitBtn = oneElem('.submit');
        let cancelBtn = oneElem('.canceled');
        let gapMask = oneElem('.gap-mask-outer');

        submitBtn.on('click', function(e) {
            e.preventDefault;
            gapMask.removeClass('hide');
            return false;
        });

        cancelBtn.on('click', function(e) {
            e.preventDefault;
            gapMask.addClass('hide');
            return false;
        });

        // input verify test-1
        let input_verify_username = document.getElementById('username');
        let input_verify_ages = document.getElementById('ages');

        let verify = new Verify("event");

        // verify input username
        input_verify_username.addEventListener('input', function(event) {
            let usernameString = "username muster be A-Za-z_ and length is 1-10";
            let input_username = this.value.trim();

            if (!/^[a-z]{1,10}$/.test(input_username)) {
                this.className += "invalid ";
                verify.invalidText(event, usernameString);
                verify.message_suspension(usernameString);
            } else {
                this.className = "";
                verify.invalidText(event);
            }
        }, true);

        // verify input ages
        input_verify_ages.addEventListener('input', function(event) {
            let agesString = "ages muster be between 1 ~ 150";
            let input_ages = this.value.trim();

            if (!/^[0,1]?\d{1,2}$/.test(input_ages)) {
                this.className += "invalid ";
                verify.invalidText(event, agesString);
                verify.message_suspension(agesString);
            } else {
                this.className += "";
                verify.invalidText(event);
            }
        }, true);

    }
)();