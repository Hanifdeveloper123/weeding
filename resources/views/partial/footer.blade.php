            </div>
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; HanifDeveloper 2023</span>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
    <script src="{{asset('backend')}}/vendor/jquery/jquery.min.js"></script>
    <script src="{{asset('backend')}}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('backend')}}/vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="{{asset('backend')}}/js/sb-admin-2.min.js"></script>
    <script src="{{asset('backend')}}/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="{{asset('backend')}}/vendor/datatables/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.5.0/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.1/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.colVis.min.js"></script>

    <script>
        $(document).ready(function() {
          $('#pesanan').DataTable({
            "columnDefs": [
                { className: "dt-nowrap", "targets": [ 6 ] }
            ]
          });
        });
    </script>


<script>
    var x = document.getElementById("demo");
    function getLocation() {
      if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition);
      } else {
        x.innerHTML = "Geolocation is not supported by this browser.";
      }
    }
    
    function showPosition(position) {
        $('#latlong_resepsi').val(position.coords.latitude+','+position.coords.longitude);
    //   $('#mapouter').html("<div class='gmap_canvas'><iframe width='600' height='500' id='gmap_canvas' src='https://maps.google.com/maps?q=waturoyo margoyoso pati&t=&z=13&ie=UTF8&iwloc=&output=embed' frameborder='0' scrolling='no' marginheight='0' marginwidth='0'></iframe><a href='https://embedgooglemap.net/124/'>shrek 2 123movies</a><br><style>.mapouter{position:relative;text-align:right;height:500px;width:600px;}</style><a href='https://www.embedgooglemap.net'></a><style>.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:600px;}</style></div>");
    }
    // $('#mapouter').html("<div class='gmap_canvas'><iframe width='600' height='500' id='gmap_canvas' src='https://maps.google.com/maps?q="+position.coords.latitude+','+position.coords.longitude+"&t=&z=13&ie=UTF8&iwloc=&output=embed' frameborder='0' scrolling='no' marginheight='0' marginwidth='0'></iframe><a href='https://embedgooglemap.net/124/'>shrek 2 123movies</a><br><style>.mapouter{position:relative;text-align:right;height:500px;width:600px;}</style><a href='https://www.embedgooglemap.net'></a><style>.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:600px;}</style></div>");

    </script>
</body>
</html>