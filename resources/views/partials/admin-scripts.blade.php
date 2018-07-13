<script src="{{ mix('js/app.js') }}"></script>   

        <script>
    ////////////____Input Focus___//////////////////

    $('.flat_input .input, .textarea').focusout(function() {
        $('.flat_input').removeClass('focus');
    });
    $('.flat_input .input, .textarea').focus(function() {
        $(this).closest('.flat_input').addClass('focus');
    });

    /// Input Kepress Filled  Focus
    $('.flat_input .input, .textarea').keyup(function() {
        if($(this).val().length > 0){
            $(this).closest('.flat_input').addClass('filled');
        }

        else{
            $(this).closest('.flat_input').removeClass('filled');
        }
    });

    /// Input Check Filled Focus
    var $formControl = $('.flat_input .input, .textarea');
    var values = {};
    var validate =    $formControl.each(function() {
        if($(this).val().length > 0){
            $(this).closest('.flat_input').addClass('filled');
        }
        else{
            $(this).closest('.flat_input').removeClass('filled');
        }
    });

//Ripple Effect
$(".btn").click(function(e) {

  // Remove olds ones
  $(".ripple").remove();

  // Setup
  var posX = $(this).offset().left,
      posY = $(this).offset().top,
      buttonWidth = $(this).width(),
      buttonHeight = $(this).height();

  // Add the element
  $(this).prepend("<span class='ripple'></span>");

  // Make it round!
  if (buttonWidth >= buttonHeight) {
    buttonHeight = buttonWidth;
  } else {
    buttonWidth = buttonHeight;
  }

  // Get the center of the element
  var x = e.pageX - posX - buttonWidth / 2;
  var y = e.pageY - posY - buttonHeight / 2;

  // Add the ripples CSS and start the animation
  $(".ripple").css({
    width: buttonWidth,
    height: buttonHeight,
    top: y + 'px',
    left: x + 'px'
  }).addClass("rippleEffect");
});


        </script>

<!-- select2 -->  
<!-- <script>
    $(document).ready(function() {
        $('#select2multiple').select2({
            placeholder: "Select an option",
            width: 'resolve',
            tags: true,                                   
        });
    });
</script> -->

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
    (function () {
        
        // declare slideouts as new variables
        var leftSlideout = new  Slideout({
            'panel': document.getElementById('panel'),
            'menu': document.getElementById('left-menu'),
            'padding': 256,
            'tolerance': 70
        });
        var rightSlideout = new  Slideout({
            'panel': document.getElementById('panel'),
            'menu': document.getElementById('right-menu'),
            'padding': 256,
            'tolerance': 70,
            'side': 'right'
        });


        var leftMenu = document.getElementById('left-menu');
        var rightMenu = document.getElementById('right-menu');

        document
            .querySelector('#toggle-left')
            .addEventListener('click', function() {
            leftSlideout.toggle();
            leftMenu.style.zIndex = '0';

            leftSlideout.on('close', function () {
                leftMenu.style.zIndex = '-1';
            });

        });

        document
            .querySelector('#toggle-right')
            .addEventListener('click', function() {
            rightSlideout.toggle();
            rightMenu.style.zIndex = '0';

            rightSlideout.on('close', function () {
                rightMenu.style.zIndex = '-1';
            });

        });       

        })();          

        function close(eve) {
        eve.preventDefault();
        slideout.close();
        }

        // slideout
        // .on('beforeopen', function() {
        //     this.panel.classList.add('panel-open');
        // })
        // .on('open', function() {
        //     this.panel.addEventListener('click', close);
        // })
        // .on('beforeclose', function() {
        //     this.panel.classList.remove('panel-open');
        //     this.panel.removeEventListener('click', close);
        // });         
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