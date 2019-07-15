import $ from 'jquery';
import PopperJs from 'popper.js';
import Boostrap from 'bootstrap';

export default function General() {
    // ESPECIFICO DE LANDING HOTSALE
    const ceroKms = {
        init: () => {
            $(document).ready(function(){
                ceroKms.ready();
            }); 
        },

        ready: () => {
            console.log('readyyyyyy')
        }
    };

    ceroKms.init();

};
General();
