<footer>
            <div id="footer_wrapper">
                <div class="footer_list">
                    <p>Airport Hotels</p>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">U.S. Airports</a></li>
                        <li><a href="#">Canadian Airport Hotels</a></li>
                        <li><a href="#">International Airport Hotels</a></li>
                        <li><a href="#">Travel Tips</a></li>
                        <li><a href="#">Airline Info</a></li>
                        <li><a href="#">Site map</a></li>
                    </ul>
                </div>
                <div class="footer_list">
                    <p>Become an Affiliate</p>
                    <ul>
                        <li><a href="#">Pricelinepartnernetwork.com</a></li>
                    </ul>
                </div>
                <div class="footer_list">
                    <p>Customer Service</p>
                    <ul>
                        <li><a href="#">Contact us</a></li>
                        <li><a href="#">My Reservation</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Help and Faqs</a></li>
                    </ul>
                </div>
            </div>
            <div class="clearfix"></div>
            <hr>
            <div id="footer_bottom">
                <p>&#169; AirportHotels.com all rights reserved</p>
            </div>
        </footer>
        <script type="text/javascript">
        $('.review').click(function(){
            var that = $(this);
            var html= that.text();
            $('body').append('<div id="shadow"><div id="fancybox">' + html +'</div></div>');
                $('#shadow').click(function(){
                    $(this).remove();
                })
             return false;   
        });
        
        //$( ".filter_search" ).click(function() {
        //  $( "#filter_search_box" ).slideDown( "slow", function() {
            // Animation complete.
        //    
        //  });
        //  return false;
        //});
        $( ".filter_search" ).click(function () {
          if ( $( "#filter_search_box" ).is( ":hidden" ) ) {
            $( "#filter_search_box" ).show();
          } else {
            $( "#filter_search_box" ).hide();
          }
          return false;
        });
        </script>
    </body>

</html>