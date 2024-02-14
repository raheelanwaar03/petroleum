<div class="footer">
    <div class="copyright">
        <p>Copyright © Designed &amp; Developed by <a href="{{ env('APP_URL') }}"
                target="_blank">{{ env('APP_NAME') }}</a> 2024</p>
    </div>
</div>
<!--**********************************
Footer end
***********************************-->

</div>
<script src="{{ asset('assets/public/assets/vendor/global/global.min.js') }}"></script>
<script src="{{ asset('assets/public/assets/vendor/jquery-nice-select/js/jquery.nice-select.min.js') }}"></script>


<script src="{{ asset('assets/public/assets/vendor/chart.js/Chart.bundle.min.js') }}"></script>
<script src="{{ asset('assets/public/assets/vendor/apexchart/apexchart.js') }}"></script>
<script src="{{ asset('assets/public/assets/vendor/peity/jquery.peity.min.js') }}"></script>
<script src="{{ asset('assets/public/assets/js/dashboard/dashboard-1.js') }}"></script>
<script src="{{ asset('assets/public/assets/vendor/owl-carousel/owl.carousel.js') }}"></script>

<script src="{{ asset('assets/public/assets/js/custom.min.js') }}"></script>
<script src="{{ asset('assets/public/assets/js/dlabnav-init.js') }}"></script>
<script src="{{ asset('assets/public/assets/js/demo.js') }}"></script>
<script src="{{ asset('assets/public/assets/js/styleSwitcher.js') }}"></script>
<script>
    function cardsCenter() {

        jQuery('.card-slider').owlCarousel({
            loop: true,
            margin: 10,
            nav: false,
            //center:true,
            slideSpeed: 3000,
            paginationSpeed: 3000,
            dots: false,
            navText: ['', ''],
            responsive: {
                0: {
                    items: 1
                },
                576: {
                    items: 2
                },
                800: {
                    items: 2
                },
                991: {
                    items: 2
                },
                1200: {
                    items: 3
                },
                1600: {
                    items: 4
                }
            }
        })
    }

    jQuery(window).on('load', function() {
        setTimeout(function() {
            cardsCenter();
        }, 1000);
    });
    jQuery(document).ready(function() {
        setTimeout(function() {
            dlabSettingsOptions.version = 'dark';
            new dlabSettings(dlabSettingsOptions);
        }, 1500)
    });
</script>
</body>

</html>
