<?php
// header.inc file contains header html  
include 'header.inc';
?>

        <div id="main">
            <div class="main_wrapper">

<?php
// search_box.inc file contains search_box html  
include 'search_box.inc';
?>

                <div class="ap_title">
                    <h2>Dallas/Ft. Worth International Airport</h2>
                </div>
            </div>
            
        </div>
        
        <div id="results">
            <div class="results_wrapper">
                <aside id="left_results">
                    <div id="breadcrumb_large">
                        <p class="breadcrumb"><a href="#">Home</a> > <a href="#">US Airport Hotels</a> > Dallas/Ft. Worth International Airport</p>
                    </div>    
                    <div id="map"></div>
                    <div class="attractions">
                        <div class="attractions_header">
                            <h3>Attractions</h3>
                        </div>
                        <ul class="attractions_ul">
                            <li>
                                <p><a href="#">North Lake College</a></p>
                                <p class="bottom_buffer"><span class="lr_dist">4 miles</span> from DFW</p>
                            </li>
                            <li>
                                <p><a href="#">Cowboys Golf Course</a></p>
                                <p class="bottom_buffer"><span class="lr_dist">4 miles</span> from DFW</p>
                            </li>
                            <li>
                                <p><a href="#">Baylor Medical Center at Grapevine</a></p>
                                <p class="bottom_buffer"><span class="lr_dist">4.3 miles</span> from DFW</p>
                            </li>
                            <li>
                                <p><a href="#">Las Colinas Medical Center</a></p>
                                <p class="bottom_buffer"><span class="lr_dist">4.6 miles</span> from DFW</p>
                            </li>
                            <li>
                                <p><a href="#">American Arln Cr Smith Museum</a></p>
                                <p class="bottom_buffer"><span class="lr_dist">4.6 miles</span> from DFW</p>
                            </li>
                            <li>
                                <p><a href="#">Grapevine Mills Mall</a></p>
                                <p class="bottom_buffer"><span class="lr_dist">4.7 miles</span> from DFW</p>
                            </li>
                        </ul>
                    </div>
                </aside>
<?php

            $arr_nav = array( 
               array( 
                   "hotel_id" => "1", 
    	           "name" => "Hyatt Regency DFW",
    	           "location" => "Dallas, TX, US",
                   "stars" => "4stars.png", 
    	           "review" => "Very Good, 8.9",
    	           "number_reviews" => "2781",
                   "latest_booking" => "15", 
    	           "price" => "84",
    	           "distance" => "0.09",
                   "img" => "hotel_1.png"  
    	       ),
    	       array( 
                   "hotel_id" => "1", 
    	           "name" => "Grand Hyatt DFW",
    	           "location" => "Dallas, TX, US",
                   "stars" => "4stars.png", 
    	           "review" => "Wonderful, 9.2",
    	           "number_reviews" => "669",
                   "latest_booking" => "13", 
    	           "price" => "154",
    	           "distance" => "0.43",
                   "img" => "hotel_2.png"  
    	       ),
    	       array( 
                   "hotel_id" => "3", 
    	           "name" => "Hotel Suites by Hilton Irving-Dfw Airport",
    	           "location" => "Irving, TX, US",
                   "stars" => "4stars.png", 
    	           "review" => "Wonderful, 9.5",
    	           "number_reviews" => "4",
                   "latest_booking" => "18", 
    	           "price" => "84",
    	           "distance" => "1.88",
                   "img" => "hotel_3.png"
    	       ),
               array( 
                   "hotel_id" => "4", 
    	           "name" => "Hawthorne Suites by Wyndham DFW Airport North",
    	           "location" => "Irving, US",
                   "stars" => "4stars.png", 
    	           "review" => "Good, 7.9",
    	           "number_reviews" => "26",
                   "latest_booking" => "3", 
    	           "price" => "87",
    	           "distance" => "1.9",
                   "img" => "hotel_4.png"
    	       ),
               array( 
                   "hotel_id" => "5", 
    	           "name" => "Best Western Plus DFW Airport Suits",
    	           "location" => "Coppell, US",
                   "stars" => "4stars.png", 
    	           "review" => "Very Good, 8.6",
    	           "number_reviews" => "23",
                   "latest_booking" => "27", 
    	           "price" => "62",
    	           "distance" => "1.94",
                   "img" => "hotel_5.png"
    	       )		
           );

?>                
                <section id="results_container">
                    <div id="right_results">
                        <div id="breadcrumb">
                            <p><a href="#">Home</a> > <a href="#">US Airport Hotels</a> > Dallas/Ft. Worth International Airport</p>
                        </div>    
                        <h2 class="hr_h3">Hotels Near DFW</h2>
                        <?php
                        foreach($arr_nav as $item) {
                            echo '<article class="hotel_result_item">';
                            echo '<div class="hr_item_wrapper">';
                            echo '<div class="hotel_img" style="background-image: url(\'img/'.$item["img"].'\');" > </div>';
                            echo '<div class="hr_left">';
                            echo '<h3 class="hot_name"><a href="#">'.$item["name"].'</a></h3>';
                            echo '<p>'.$item["location"].'</p>';
                            echo '<div class="stars"></div>';
                            echo '<p class="review"><a href="">'.$item["review"].'</a> Based on '.$item["number_reviews"].' reviews</p>';
                            echo '<p>Latest Booking: <span class="lb">'.$item["latest_booking"].' Days ago</span></p>';
                            echo '</div>';
                            echo '<div class="hr_right">';
                            echo '<p>From</p>';
                            echo '<p class="hot_price">$'.$item["price"].'</p>';
                            echo '<button class="hot_book">Book Now</button>';
                            echo '</div>';
                            echo '</div>';
                            echo '<div class="clearfix"></div>';
                            echo '<div class="hr_footer">';
                            echo '<div class="footer_img"></div>';
                            echo '<p class="hot_dist">'.$item["distance"].' miles away from Dallas/Ft. Worth Intl Airport</p>';
                            echo '</div>';
                            echo '</article>'; 
                        }
        
                        
                        ?> 
                        <!-- Hotel Item HTML Example
                        
                        <div class="hotel_result_item">
                           <div class="hr_item_wrapper">
                                <div class="hotel_img">
                                    <img src="" />
                                </div>
                                <div class="hr_left">
                                    <p class="hot_name"><a href="#">Hyatt Regency DFW</a></p>
                                    <p>Dallas, TX, US</p>
                                    <div class="stars"></div>
                                    <p><a href="">Very Good, 8.9</a> Based on 2781 reviews</p>
                                    <p>Latest Booking: <span class="lb">15 Days ago</span></p>
                                </div>
                                <div class="hr_right">
                                    <p>From</p>
                                    <p class="hot_price">$84</p>
                                    <button class="hot_book">Book Now</button>    
                                </div>
                             </div>
                             <div class="clearfix"></div>       
                             <div class="hr_footer">
                                <div class="footer_img"></div>
                                <p class="hot_dist">0.09 miles away from Dallas/Ft. Worth Intl Airport</p>
                            </div>             
                        </div>-->
                        
                        
                        <div class="right_list_end">
                        <p><a href="">View all hotels near DFW</a></p>
                        </div>
                            
                    </div>
                </section>
            </div>
        </div>
        
        <div class="clearfix"></div>


<?php
// footer.inc file contains footer html  
include 'footer.inc';
?>