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
            ceroKms.toolResponsive();
        },

        toolResponsive : () => {
            const toolHTML = `
                <div class="toolresponsive">
                    <div class="toolresponsive__break toolresponsive__break--xl">XL</div>
                    <div class="toolresponsive__break toolresponsive__break--lg">LG</div>
                    <div class="toolresponsive__break toolresponsive__break--md">MD</div>
                    <div class="toolresponsive__break toolresponsive__break--sm">SM</div>
                    <div class="toolresponsive__break toolresponsive__break--xs">XS</div>
                </div>
            `;

            $('body').append(toolHTML);
            
        }
    };

    ceroKms.init();

};
General();
