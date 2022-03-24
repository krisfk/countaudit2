<?php
/**
 * Template Name: Contact page
 * Template Post Type: page
 **/


// if ( ! defined( 'ABSPATH' ) ) {
	// exit; // Exit if accessed directly.
// }

get_header(); ?>

<div class="main-banner"
    style="background:url(<?php echo get_site_url();?>/wp-content/uploads/2021/12/main-banner-bg-1.jpg)">

    <div class="position-absolute top-0 start-0 w-100 h-100">
        <div class="container title-container">
            <div><?php echo get_field('title_txt');?></div>
        </div>
    </div>


    <img class="main-banner-img" src="<?php echo get_site_url();?>/wp-content/uploads/2021/12/main-banner-bg-1.jpg"
        alt="">
        
</div>






<?php echo get_field('content_1');?>


<div class="map-div">
    <?php echo get_field('content_2');?>
</div>


<div class="grey-bg-2">


    <div class="container contact-form-container">
        <div class="row   align-items-center">
           
        
            <?php echo get_field('content_3');?>


            <div class="col-lg-6 col-md-12 col-sm-12 col-12  p-lg-5 p-md-5 p-sm-3 p-3 ">
                <?php echo get_field('content_4');?>


                <?php
if ($_POST) {
    function post_captcha($user_response) {
        $fields_string = '';
        $fields = array(
            'secret' => '6LdMWbweAAAAANK8OWHVYPts4avJ5fblHpeBpV-C',
            'response' => $user_response
        );
        foreach($fields as $key=>$value)
        $fields_string .= $key . '=' . $value . '&';
        $fields_string = rtrim($fields_string, '&');

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://www.google.com/recaptcha/api/siteverify');
        curl_setopt($ch, CURLOPT_POST, count($fields));
        curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, True);

        $result = curl_exec($ch);
        curl_close($ch);

        return json_decode($result, true);
    }
   $res = post_captcha($_POST['g-recaptcha-response']);

    if (!$res['success']) {
        ?>
                <script type="text/javascript">
                $(function() {

                    $('.lightbox').fadeIn(200);
                    $('.lightbox-msg-txt').html(
                        'Please go back and make sure you check the security CAPTCHA box.');

                })
                </script>
                <?php
    } else {


        if($_POST)
        {
            global $receive_email;

                    $client_name=$_POST['client-name'];
                    $tel=$_POST['tel'];
                    $email=$_POST['email'];
                    $enquiry_type=$_POST['enquiry-type'];
                    $message = $_POST['message'];
                    $send_content='';
                    $send_content .='稱呼:'.$client_name.'<br>';
                    $send_content .='聯絡電話:'.$tel.'<br>';
                    $send_content .='電郵:'.$email.'<br>';
                    $send_content .='查詢類別:'.$enquiry_type.'<br>';
                    $send_content .='簡短留言:'.$message.'<br>';
                 
                    $headers = array(
                        'From: Countaudit <info@countaudit.com>',
                      );
                      
                wp_mail( $receive_email, 'Countaudit 一般查詢(from '.$client_name.')', $send_content,$headers );   
               
                
        }
        
        ?>
                <script type="text/javascript">
                $(function() {

                    $('.lightbox').fadeIn(200);
                    $('.lightbox-msg-txt').html(
                        'Submitted successfully, we will get back to you soon.');

                })
                </script>
                <?php
    }
}

?>
                <!-- <div class="form-div white-bg contact-form-div">

                    <input type="text" class="form-control" placeholder="如何稱呼您？">
                    <input type="text" class="form-control" placeholder="聯絡電話">
                    <input type="text" class="form-control" placeholder="電郵">
                    <input type="text" class="form-control" placeholder="查詢類別">
                    <textarea class="form-control" name="" id="" cols="30" rows="10" placeholder="簡短留言"></textarea>

                    <div class="text-end">
                        <a href="#" class="blue-bg white submit-btn mt-3">服務報價</a>
                    </div>

                </div> -->
                <!-- <form id="form" action="" method="post"> <input type="hidden" name="form-type" value="general_enquiry">
                    <div class="form-div white-bg contact-form-div"> <input type="text" class="form-control"
                            placeholder="如何稱呼您？*" name="client-name" required> <input type="text" class="form-control"
                            placeholder="聯絡電話" name="tel"> <input type="text" class="form-control" placeholder="電郵*"
                            required name="email" required> <select required name="enquiry-type" id="enquiry-type"
                            class="form-control">
                            <option value="">查詢類別*</option>
                            <option value="稅務">稅務</option>
                            <option value="會計">會計</option>
                            <option value="審計">審計</option>
                            <option value="成立公司">成立公司</option>
                            <option value="管理公司">管理公司</option>
                            <option value="僱傭條例">僱傭條例</option>
                            <option value="其他">其他</option>
                        </select> <textarea class="form-control" name="" id="" cols="30" rows="10" placeholder="簡短留言"
                            name="message"></textarea>
                        <div class="text-end"> <input type="submit" value="服務報價" class="form-submit-btn"></div>
                    </div>
                </form> -->
            </div>
        </div>
    </div>

</div>

<?php get_footer(); ?>
<script type="text/javascript">
$(function() {
    $('.about-carousel').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: true,
        arrows: false,
        autoplay: false,
        pauseOnFocus: false,
        infinite: true,
        speed: 800,
        autoplaySpeed: 5000,
        cssEase: 'ease-out',
        pauseOnHover: false

    });




})
</script>
</body>

</html>