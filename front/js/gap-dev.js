import {Loader} from 'gap-front-base/js/Loader';

let loader = new Loader();
loader.on('zload', elem => {
    import(`./${elem.getAttribute('zload')}.js`);
});
