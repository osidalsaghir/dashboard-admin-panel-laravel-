<footer class="bg-white sticky-footer">
    <div class="container my-auto">
        <div class="text-center my-auto copyright"><span>Copyright © @php echo \App\Http\Controllers\SettingController::returningSiteName();
            @endphp 2020</span> <br><br><span>&nbsp; Developer Osid Alsagir</span></div>
    </div>
</footer>
</div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a></div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.min.js"></script>
<script src="{{ asset('assets/js/bs-init.js?h=08ba999e06fc97f895c72848bddb91c1"')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js" crossorigin="anonymous"></script>
<script src="{{ asset('assets/js/theme.js?h=6d33b44a6dcb451ae1ea7efc7b5c5e30')}}"></script>

<!--for transforming between tags-->
            <script>
            $(document).ready(function(){
                var path = window.location.href; // because the 'href' property of the DOM element is the absolute path
                $('ul li a').each(function() {
                if (this.href === path) {
                $('li a').removeClass("active");
                $(this).addClass('active');
                        }
                });
            });
            

            </script>
           
</body>

</html>
