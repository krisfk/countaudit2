<?php
/**
 * Template Name: Home page
 * Template Post Type: page
 **/


// if ( ! defined( 'ABSPATH' ) ) {
	// exit; // Exit if accessed directly.
// }

get_header(); ?>


<div class="position-relative">
    <img class="w-100 dummy-banner-img"
        src="<?php echo get_site_url();?>/wp-content/uploads/2021/12/main-banner-bg-4.jpg.webp" alt="">

    <div class="position-absolute w-100 h-100 top-0 left-0">
        <?php echo get_field('banners');?>



    </div>
</div>

<?php echo get_field('content_1');?>

<div class="container mt-5">
    <?php echo get_field('content_2');?>


</div>


<div class="mt-4 blue-bg">

    <?php echo get_field('content_3');?>


</div>


<?php echo get_field('content_4');?>



<div class="mb-5">

    <?php echo get_field('content_5');?>






</div>
<div class="blue-bg pt-5 pb-5 mt-5">

    <h2 class="text-center white">


        <?php 
        if(ICL_LANGUAGE_CODE=='zh-hang')
        {
                echo '資訊文章類型';
        }
         
        if(ICL_LANGUAGE_CODE=='en')
        {
                echo 'Types Of Informative Article';
        }

      
      ?>


    </h2>


    <div class="container mt-5">

        <div class="article-carousel">

            <?php

            $content_6= get_field('content_6');
            $content_7= get_field('content_7');
            $content_8= get_field('content_8');


            global $sitepress;
            $current_lang= ICL_LANGUAGE_CODE;
            // $sitepress->switch_lang('en');
            // echo get_cat_name($fr_cat_id); // get_cat_name($en_cat_id); also work
            // $sitepress->switch_lang('zh-hant');

        $categories = get_categories();
        // echo 999;
        // print_r($categories);
        foreach($categories as $category) {
            
            // echo $category->slug;

            $slug = $category->slug;
    // print_r($category);            
           
            $args = array(
                'post_type' => 'post',
                'posts_per_page' => 1,
                // Use the $slug variable here.
                'category_name' => $slug,
              );

            $the_query = new WP_Query( $args ); 

            while( $the_query->have_posts() ) {
                $the_query->the_post();
              
                ?>
            <div class="article-container">

                <div class="article-type-name"><?php echo $category->name;?></div>
                <img class="w-100"
                    src="<?php echo wp_get_attachment_image_src( get_post_thumbnail_id(), 'single-post-thumbnail' )[0];?>"
                    alt="">
                <div class="white-bg blue  ps-4 pe-4 pb-4">
                    <h3 class="text-center blue pt-3"><?php echo get_the_title();?></h3>
                    <div class="pt-2 pb-3">
                        <!-- 我們公司行政人手不足，導致帳目非常混亂。選用了CountAudit的雲端會計服務後，帳目立時變得清晰及容易查看！ -->
                        <?php echo get_the_excerpt();?>
                    </div>

                    <div class="text-end">
                        <a href="<?php echo get_permalink();?>" class="article-read-more gold  small">Read More>></a>
                    </div>
                </div>
            </div>

            <?php
            } 

            
        }

        $sitepress->switch_lang($current_lang);


        ?>




        </div>
    </div>



</div>
<?php echo $content_6;?>




<div class="grey-bg-2 mt-5">


    <div class="container contact-form-container">
        <div class="row pt-lg-0 pt-md-0 pt-sm-5  pt-5  mt-5 align-items-center">
            <div class="col-lg-6 col-md-12 col-sm-12 col-12 ">

                <?php echo $content_7;?>



            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 col-12  p-lg-5 p-md-5 p-sm-3 p-3 ">

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

                <?php echo $content_8;?>


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
                <?php
                	// global $receive_email;
                    // echo $receive_email;
                    // // $receive_email = 'krisfk@gmail.com';

                    
                ?>
            </div>
        </div>
    </div>

</div>

<?php get_footer(); ?>
<script type="text/javascript">
$(function() {

    $('.home-big-point-content ul li a').click(function() {

        $(this).toggleClass('active');
        if ($(this).hasClass('active')) {

            $(this).next('.expand-cnt').slideDown(200);
        } else {
            $(this).next('.expand-cnt').slideUp(200);

        }


    })

    $('.article-carousel').slick({
        infinite: true,
        // slidesToShow: 3,
        // slidesToScroll: 3,
        dots: true,
        arrows: false,
        autoplay: false,
        pauseOnFocus: false,
        infinite: true,
        speed: 800,
        autoplaySpeed: 5000,
        cssEase: 'ease-out',
        pauseOnHover: false,
        responsive: [{
                breakpoint: 1920,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3
                }
            },
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]

    });

    $('.main-banners').on('init', function(event, slick, direction) {
        // $('.dummy-banner-img').height(0);

        $(this).fadeIn(200);

    }).slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: false,
        // fade: true,
        arrows: false,
        autoplay: true,
        pauseOnFocus: false,
        infinite: true,
        speed: 800,
        autoplaySpeed: 5000,
        cssEase: 'ease-out',
        pauseOnHover: false,



    });










})
</script>
</body>

</html>