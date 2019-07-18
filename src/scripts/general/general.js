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
                ceroKms.modal.selectType();
            },
            inputClick: () => {
                let $el = $('input.falseSelect');
                
                $el.click(function(e) {
                    let $this = $(this);
                    $this.addClass('open'); // avoid click others lis
                    ceroKms.modal.nameModal($this);
                    ceroKms.modal.withOutModel($this);
                    ceroKms.modal.getLiFiltered($this);
                })
            },

            nameModal: (el) => {
                const nameOfModal = el.attr('rel');
                ceroKms.modal.typeOfModal.showTypeOfModal(nameOfModal)
                ceroKms.modal.openHideModal(nameOfModal);
            },

            selectType: () => {
                const $search = $('input.search-input');
                $search.on('input', function() {
                    let that = this.value;
                    ceroKms.modal.filterBrands(that);
                });
            },

            filterBrands: (filtered) => {
                const $ulText = $('ul.list-text');
                const $ulLogos = $('ul.logoBrands');

                const $liText = $ulText.find('li');
                const $logoslis = $ulLogos.find('li');
                
                
                if ( $liText.length > 0 ) {
                    $liText.hide().filter(function() {
                        return $(this).text().toLowerCase().indexOf( filtered ) > -1;
                    })
                    .show();
                }

                if ( $logoslis.length > 0 ) {
                    $logoslis.hide().filter(function() {
                        return $(this).find('img').attr('alt').toLowerCase().indexOf( filtered ) > -1;
                    })
                    .show();
                }
            },

            // 
            getLiFiltered: (clicked) => {
                const $ulText = $('ul.list-text');
                const $ulLogos = $('ul.logoBrands');

                const $liText = $ulText.find('li');
                const $logoslis = $ulLogos.find('li');

                $liText.on('click', function() {
                    console.log('lptm: ',clicked);
                    let text = $(this).text();
                    if (clicked.hasClass('open')) {
                         // if => avoid click others lis
                        ceroKms.modal.printTextSelectedInInput(clicked, text);
                        clicked.removeClass('open');
                    }
                })

                $logoslis.on('click', function() {
                    let text = $(this).find('img')[0].attributes[1].value;
                    if (clicked.hasClass('open')) {
                        // if => avoid click others lis
                        ceroKms.modal.printTextSelectedInInput(clicked, text);
                        clicked.removeClass('open');
                    }
                })

            },

            withOutModel: (clicked) => {
                const el = $('span.withOutModel');

                el.on('click', function() {
                    let text = `No se encontró mi modelo`;
                    ceroKms.modal.printTextSelectedInInput(clicked, text);
                })
            },

            // clean input when close modal
            clearInput: () => {
                const $modal = $('#modal');
                const $el = $modal.find('input.search-input');

                ceroKms.modal.filterBrands('');

                if ($el.length) {
                    $el.val('');
                }
            },

            // print selected text
            printTextSelectedInInput: (el, text) => {
                const $modal = $('#modal');
                el.val(text);

                // hide modal
                $modal.modal('hide');
            },

            typeOfModal: {
                showTypeOfModal: (nameOfModal) => {
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
                        case 'open-version':
                            title.text('Elija el modelo de su auto')
                            placeholder.attr('placeholder', 'Buscar por modelo')
                            break;
                    }
                }
            },

            openHideModal: (nameOfModalToHide) => {
                const $modal = $('#modal');
                $modal.addClass(nameOfModalToHide);
                $modal.on('hidden.bs.modal', function (e) {
                    $(this).removeClass(nameOfModalToHide);
                    ceroKms.modal.clearInput();

                    // avoid onClick repetition 
                    $('.falseSelect').removeClass('open');
                });
            }

        }
    };

    ceroKms.init();

};
General();
