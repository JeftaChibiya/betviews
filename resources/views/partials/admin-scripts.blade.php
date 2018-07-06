<script src="{{ mix('js/app.js') }}"></script>  

<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>  

<script>
Vue.directive('select2', {
    bind: function () {
        var vm = this.vm;
        var key = this.expression;

        var select = $(this.el);

        select.select2();
        select.on('change', function () {
            vm.$set(key, select.val());
        });
    }
});    
</script>
<!-- select2 -->  
<script>
    $(document).ready(function() {
        $('#select2multiple').select2({
            placeholder: "Select an option",
            width: 'resolve',
            tags: true,                                   
        });
    });
</script>

<script>
    function myFunction() {
        document.getElementById("demo").innerHTML = "Hello World";
    }
</script>

<!-- <script>
    $("#mygallery").justifiedGallery({
        lastRow: 'justify',
        rowHeight: 200,
        captions: false,
        imgSelector: '> img',
        selector: 'div:not(.spinner)'
    });        
</script> -->


<!-- First instance of slideout menu -->
<script>
    window.Slideout;

    document.querySelector('.toggle-button').addEventListener('click', function() {
        slideout.toggle();
    });

    function close(event) {
        event.preventDefault();
        slideout.close();
    } 

// slideout panel - admin
    var slideout = new Slideout({
        'panel': document.getElementById('panel'),
        'menu': document.getElementById('menu'),
        'padding': 230,
        'tolerance': 70,
        'side': 'left'
    });

    // adding an overlay
    slideout
        .on('beforeopen', function() {
        this.panel.classList.add('panel-open');
        })
        .on('open', function() {
        this.panel.addEventListener('click', close);
        })
        .on('beforeclose', function() {
        this.panel.classList.remove('panel-open');
        this.panel.removeEventListener('click', close);
    });           
</script>



<script>
    // Accordion
    var accordion = (function() {

    var $accordion = $('.js-accordion');
    var $accordion_header = $accordion.find('.js-accordion-header');
    var $accordion_item = $('.js-accordion-item');

    // default settings 
    var settings = {
        // animation speed
        speed: 400,

        // close all other accordion items if true
        oneOpen: false
    };

    return {
        // pass configurable object literal
        init: function($settings) {
            $accordion_header.on('click', function() {
                accordion.toggle($(this));
            });

            $.extend(settings, $settings);

            // ensure only one accordion is active if oneOpen is true
            if (settings.oneOpen && $('.js-accordion-item.active').length > 1) {
                $('.js-accordion-item.active:not(:first)').removeClass('active');
            }

            // reveal the active accordion bodies
            $('.js-accordion-item.active').find('> .js-accordion-body').show();
        },
        toggle: function($this) {

            if (settings.oneOpen && $this[0] != $this.closest('.js-accordion').find('> .js-accordion-item.active > .js-accordion-header')[0]) {
                $this.closest('.js-accordion')
                    .find('> .js-accordion-item')
                    .removeClass('active')
                    .find('.js-accordion-body')
                    .slideUp()
            }

            // show/hide the clicked accordion item
            $this.closest('.js-accordion-item').toggleClass('active');
            $this.next().stop().slideToggle(settings.speed);
        }
    }
    })();

    $(document).ready(function() {
    accordion.init({ speed: 300, oneOpen: true });
    });    
</script>