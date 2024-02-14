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


@yield('script')

<script src="{{ asset('assets/public/assets/vendor/peity/jquery.peity.min.js') }}"></script>
<script src="{{ asset('assets/public/assets/js/dashboard/dashboard-1.js') }}"></script>
<script src="{{ asset('assets/public/assets/js/custom.min.js') }}"></script>
<script src="{{ asset('assets/public/assets/js/dlabnav-init.js') }}"></script>
<script src="{{ asset('assets/public/assets/js/demo.js') }}"></script>
<script src="{{ asset('assets/public/assets/js/styleSwitcher.js') }}"></script>
</body>

</html>
