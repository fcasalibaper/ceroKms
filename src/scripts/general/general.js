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
            ceroKms.modal.init();
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
        },

        modal : {
            init: () => {
                ceroKms.modal.inputClick();
                ceroKms.modal.filterBrands();
            },
            inputClick: () => {
                const el = $('.falseSelect');
                el.click(function(e) {
                    const  $this = $(this);
                    ceroKms.modal.nameModal($this);
                })
            },

            nameModal: (el) => {
                const nameOfModal = el.attr('rel');

                ceroKms.modal.typeOfModal.showTypeOfModal(nameOfModal)
                ceroKms.modal.openHideModal(nameOfModal);
            },

            filterBrands: () => {
                const $modal = $('#modal');
                const $search = $('input.search-input');
                const $ul = $('ul.brands');
                const $lis = $ul.find('li');

                $search.on('input', function() {

                    var that = this.value;

                    console.log(that)
                    $lis.hide().filter(function() {
                        return $(this).text().toLowerCase().indexOf( that ) > -1;
                    })
                    .show();
               });

                // $search.on('change', function(e) {
                //     let text = $(this).val()

                //     $lis.filter(li => {
                //         li.text() === text
                //     })
                // })
            },

            typeOfModal: {
                showTypeOfModal: (nameOfModal) => {
                    const $modal = $('#modal');
                    const body = $modal.find('.modal-body');

                    ceroKms.modal.typeOfModal.changeTexts(nameOfModal);
                    
                },
                changeTexts: (nameOfModal) => {
                    const $modal = $('#modal');
                    const title = $modal.find('.modal-title');
                    const placeholder = $modal.find('input.search-input');

                    switch (nameOfModal) {
                        case 'open-marca':
                            title.text('Elija la marca de su auto')
                            placeholder.attr('placeholder', 'Buscar por marca')
                            break;
                        case 'open-modelo':
                            title.text('Elija la modelo de su auto')
                            placeholder.attr('placeholder', 'Buscar por modelo')
                            break;
                    }
                }
            },


            openHideModal: (nameOfModalToHide) => {
                const modal = $('#modal');
                modal.addClass(nameOfModalToHide);
                modal.on('hidden.bs.modal', function (e) {
                    $(this).removeClass(nameOfModalToHide)
                });
            }

        }
    };

    ceroKms.init();

};
General();
