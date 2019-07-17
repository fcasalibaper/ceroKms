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
            ceroKms.toolResponsive();
            ceroKms.hamburguerMenu();
            ceroKms.formValidation();
        },

        toolResponsive: () => {
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
            
        },

        hamburguerMenu: () => {
            $('.hamburger-button').on('click', function(event){
                event.preventDefault();
                
                $(this).toggleClass('active');
                $('body').toggleClass('menuVisible');
            });
        },

        formValidation : () => {
            var forms = $('.needs-validation');
            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }
    };

    ceroKms.init();

};
General();
