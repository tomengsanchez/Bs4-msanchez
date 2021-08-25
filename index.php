<?php
/**
 * The header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package bs4-msanchez
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
get_header();
?>  

<div class=" hero-section purple-bg ">
    <div class="container-fluid hero-section ">
        <div class="row justify-content-center d-flex mt-xl-5 mt-lg-5 myrow">
            <div class="col-xl-10 hi-there-container  mycol">
                <h1 class='hi-there mx-5 '>
                    Hi there! We are the new kids on the block and we build awesome websites and mobile apps.
                </h1>
            </div>
            
        </div>
        <div class="row justify-content-center align-items-start mb-xl-5 myrow">
            <div class="col-xl-10 d-flex work-with-us-container justify-content-center align-items-center mycol">
                <button class="btn work-with-us" type='button'>
                    Work With Us
                </button>
            </div>
        </div>
        
</div>
<div class="team-section">
    <div class="container-fluid mycon">
        <div class="row myrow">
            <div class="col mycol">
                <h1 class=' pt-5 d-flex justify-content-center meet-team'>MEET OUR BEAUTIFUL TEAM</h1>
                <hr width='100px' size='100px'>
                <p class='d-flex justify-content-center we-are-small'>We are a small team of designers and developers, who help brands with big ideas.</p>
            </div>
        </div>
        <div class="row team-columns mt-3 pb-3">
            <div class="col mycol">
                <div class='d-flex justify-content-center mt-3'>
                    <img src="<?php echo get_template_directory_uri()?>/img/Base.png" alt="" class="team-image" ></img>
                </div>
                <span class='team-name d-flex justify-content-center mt-4'>ANNE HATHAWAY</span>
                <span class='team-pos d-flex justify-content-center'>CEO/Marketing Guru</span>
                <p class='mx-3 mt-2 team-position d-flex justify-content-center'>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna.</p>
                <div class="soc-icon d-flex justify-content-center mt-3">
                    <i class="fab fa-facebook-f fb d-flex justify-content-center"></i>
                    <i class="fab fa-twitter tw d-flex justify-content-center"></i>
                    <i class="fab fa-linkedin-in li d-flex justify-content-center"></i>
                    <i class="far fa-envelope mail"></i>
                </div>
            </div>
            <div class="col mycol">
            <div class='d-flex justify-content-center mt-3'>
                    <img src="<?php echo get_template_directory_uri()?>/img/Base.png" alt="" class="team-image" ></img>
                </div>
                <span class='team-name d-flex justify-content-center mt-4'>KATE UPTON</span>
                <span class='team-pos d-flex justify-content-center'>Creative Director</span>
                <p class='mx-3 mt-2 team-position d-flex justify-content-center'>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna.</p>
                <div class="soc-icon d-flex justify-content-center mt-3">
                    
                    <i class="fab fa-twitter tw  d-flex justify-content-center"></i>
                    <i class="fab fa-linkedin-in li d-flex justify-content-center"></i>
                    <i class="far fa-envelope mail d-flex justify-content-center"></i>
                </div>
            </div>
            <div class="col mycol">
            <div class='d-flex justify-content-center mt-3'>
                    <img src="<?php echo get_template_directory_uri()?>/img/Base.png" alt="" class="team-image" ></img>
                </div>
                <span class='team-name d-flex justify-content-center mt-4'>OLIVIA WILDE</span>
                <span class='team-pos d-flex justify-content-center'>Lead Designer</span>
                <p class='mx-3 mt-2 team-position d-flex justify-content-center'>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna.</p>
                <div class="soc-icon d-flex justify-content-center mt-3">
                    <i class="fab fa-facebook-f fb d-flex justify-content-center"></i>
                    <i class="fab fa-twitter tw d-flex justify-content-center"></i>
                    <i class="fab fa-linkedin-in li d-flex justify-content-center"></i>
                    <i class="far fa-envelope mail d-flex justify-content-center"></i>
                </div>

            </div>
            <div class="col mycol">
                <div class='d-flex justify-content-center mt-3'>
                    <img src="<?php echo get_template_directory_uri()?>/img/Base.png" alt="" class="team-image" ></img>
                </div>
                <span class='team-name d-flex justify-content-center mt-4'>ASHLEY GREENE</span>
                <span class='team-pos d-flex justify-content-center'>SE/Developer</span>
                <p class='mx-3 mt-2 team-position d-flex justify-content-center'>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna.</p>
                <div class="soc-icon d-flex justify-content-center mt-3">
                    <i class="fab fa-facebook-f fb d-flex justify-content-center"></i>
                    <i class="fab fa-twitter tw d-flex justify-content-center"></i>
                    <i class="far fa-envelope mail d-flex justify-content-center"></i>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="testimonial-section ">
    <div class="container-fluid mycon">
        <div class="row   myrow">
            <div class="col mycol ">
                <h1 class='text-white pt-5 d-flex justify-content-center what-people-say'>WHAT PEOPLE SAY ABOUT US</h1>
                <hr width='100px' size='100px'>
                <p class='d-flex justify-content-center text-white'>Our clients love us!</p>
            </div>
        </div>    
        <div class="row myrow pt-3 mx-sm-5">
            <div class="col-lg-2 col-md-6 mycol">
                <div class=' d-flex justify-content-center'>
                    <img src="<?php echo get_template_directory_uri()?>/img/Base.png" alt="" class="imt-thumbnail"></img>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-5 mb-sm-0">
                <p class='pt-2 testimonial-text text-white'>“Nullam dapibus blandit orci, viverra gravida dui lobortis eget. Maecenas fringilla urna eu nisl scelerisque.”</p>
                <span class='pt-2 text-white testimonial-name'>CHANEL IMAN</span>
                <p class='text-yellow testimonial-roles'>CEO of Pinterest</p>
            </div>
            <div class="col-lg-2 col-md-6 mycol">
                <div class=' d-flex justify-content-center'>
                    <img src="<?php echo get_template_directory_uri()?>/img/Base.png" alt="" class="imt-thumbnail"></img>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-5 mb-md-0 mb-md-5">
                <p class='pt-2 testimonial-text text-white'>“Vivamus luctus urna sed urna ultricies ac tempor dui sagittis. In condimentum facilisis porta.”</p>
                <span class='pt-2 text-white testimonial-name'>ADRIANA LIMA</span>
                <p class='text-yellow testimonial-roles'>Founder of Instagram</p>
            </div>
        </div>
        <div class="row myrow mt-0 pt-md-0 mx-sm-5 testimonial-row-2">
            <div class="col-lg-2 col-md-6 mycol">
                <div class=' d-flex justify-content-center'>
                    <img src="<?php echo get_template_directory_uri()?>/img/Base.png" alt="" class="imt-thumbnail"></img>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-5 mb-sm-0">
                <p class='pt-2 testimonial-text text-white'>“Vivamus luctus urna sed urna ultricies ac tempor dui sagittis. In condimentum facilisis porta.”</p>
                <span class='pt-2 text-white testimonial-name'>ANNE HATHAWAY</span>
                <p class='text-yellow testimonial-roles'>Lead Designer at Behance</p>
            </div>
            <div class="col-lg-2 col-md-6 mycol">
                <div class=' d-flex justify-content-center'>
                    <img src="<?php echo get_template_directory_uri()?>/img/Base.png" alt="" class="imt-thumbnail"></img>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-5">
                <p class='pt-2 testimonial-text text-white'>“Phasellus non purus vel arcu tempor commodo. Fusce semper, purus vel luctus molestie, risus sem cursus neque.”</p>
                <span class='pt-2 text-white testimonial-name'>EMMA STONE</span>
                <p class='text-yellow testimonial-roles'>Co-Founder of Shazam</p>
            </div>
        </div>
        
    </div>
    
</div>

<div class="contact-section">
    <div class="container-fluid mycon">
        <div class="row   myrow">
            <div class="col mycol ">
                <h1 class='text-white pt-5 d-flex justify-content-center what-people-say'>GET IN TOUCH</h1>
                <hr width='100px' size='100px'>
                <p class='d-flex justify-content-center text-white'>1600 Pennsylvania Ave NW, Washington, DC 20500, United States of America. Tel: (202) 456-1111</p>

            </div>
        </div>
        <div class="row myrow mt-5 mx-5">
            <div class="col mycol">
                <form action="" class="inline contact-form">
                    <div class="form-row align-items-center">
                        <div class="col-sm-6 my-1">
                            <label for="" class="sr-only" for='contact-name'></label>
                            <input type="text" class='form-control mb-2 mr-sm-2' id='contact-name' class='text-white' placeholder="Your Name" required>
                        </div>
                        <div class="col-sm-6 my-1">
                            <label for="" class="sr-only" for='contact-name'></label>
                            <input type="text" class='form-control mb-2 mr-sm-2' id='contact-email' placeholder="Your email" required>
                        </div>
                    </div>
                    <div class="form-row align-items-center">
                        <div class="col my-1">
                            <label for="" class="sr-only" for='contact-message'></label>
                            <textarea name="contact-message" id="contact-message" class='d-flex justify-content-center textarea-message' max-cols="140" rows="10" placeholder='Your Message'></textarea>
                        </div>
                    </div>
                    <div class="form-row align-items-center mt-2">
                        <div class="col my-1 d-flex justify-content-center">
                            <button type='submit' class='send-message '>SEND MESSAGE</button>
                        </div>
                    </div>
                    
                    
                    
                    
                </form>
            </div>
        </div>
    </div>
</div>
<div class="socmedia-section">
    <div class="container-fluid mycon">
        <div class="row myrow mx-3">
            <div class="col mycol d-flex justify-content-center">
                <i class="fab fa-facebook-f foot-fb"></i>
            </div>
            <div class="col mycol d-flex justify-content-center">
                <i class="fab fa-twitter"></i>
            </div>
            <div class="col mycol d-flex justify-content-center">
                <i class="fab fa-google-plus-g"></i>
            </div>
            <div class="col mycol d-flex justify-content-center">
                <i class="fab fa-linkedin-in"></i>
            </div>
            <div class="col mycol d-flex justify-content-center">
                <i class="fab fa-behance"></i>
            </div>
            <div class="col mycol d-flex justify-content-center">
                <i class="fab fa-github-square"></i>
            </div>
        </div>
    </div>
    
</div>
<?php 
get_footer();