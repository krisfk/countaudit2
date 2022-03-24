<?php
/**
 * Template Name: Service page(single column)
 * Template Post Type: page
 **/


// if ( ! defined( 'ABSPATH' ) ) {
	// exit; // Exit if accessed directly.
// }

get_header(); ?>


<div class="main-banner position-relative"
    style="background:url(<?php echo get_site_url();?>/wp-content/uploads/2021/12/main-banner-bg-1.jpg)">


    <div class="position-absolute top-0 start-0 w-100 h-100">


        <div class="container title-container">
            <div><?php echo get_field('title_txt');?></div>
        </div>

    </div>


    <img class="main-banner-img" src="<?php echo get_site_url();?>/wp-content/uploads/2021/12/main-banner-bg-1.jpg"
        alt="">


</div>


<div class="container banner-bottom-blue-container">

    <div class="p-4">
        <h3 class="white text-center">We'd Love To Meet You <br>And Let You The Perfect Solution</h3>

        <ul class="gold-btn-ul">

            <li> <a class="gold-btn" href="<?php echo get_site_url();?>/contact-us/"> SCHEDULE A MEETING</a></li>
            <li><a class="gold-btn" href="<?php echo get_site_url();?>/contact-us/">CONTACT US</a></li>
            <li><a class="gold-btn"
                    href="<?php echo get_site_url();?>/wp-content/uploads/2022/02/CountAudit-Service-Brochure.pdf">DOWNLOAD
                    BROCHURE</a></li>
        </ul>
    </div>
</div>

<?php echo get_the_content();?>


<div class="mt-5">

    <?php if(get_field('intro_title') ||get_field('intro_content'))
{
    ?>
    <div class="row justify-content-center gx-5 mt-4">

        <div class="col-lg-8 col-md-8 col-sm-12 col-12 ">

            <h2 class="blue text-center mb-4"><?php echo get_field('intro_title');?>
            </h2>

            <div class="mt-4"><?php echo get_field('intro_content');?>
            </div>


        </div>
    </div>
    <?php
}

    ?>


    <?php
if( have_rows('faqs'))
{
?>
    <div class="row justify-content-center gx-5 mt-4">

        <div class="col-lg-8 col-md-8 col-sm-12 col-12 ">

            <h2 class="blue text-center mb-4">FAQ</h2>


            <?php
                    // Loop through rows.
                    $idx=1;
                    while( have_rows('faqs') ) { the_row();
                
                        ?>

            <div class="qt-ans-group mb-3">

                <a href="javascript:void(0);" class="qt position-relative">

                    <table class="m-0 border-0">
                        <tr>
                            <td class="pe-2 align-middle  symbol-td">
                                <span class="symbol align-top">Q<?php echo $idx;?>.</span>
                            </td>
                            <td class="align-middle">
                                <?php echo get_sub_field('question');?>
                            </td>
                        </tr>
                    </table>


                    <img class="arrow"
                        src="<?php echo get_site_url();?>/wp-content/uploads/2022/03/down-arrow-qa.png.webp" alt="">
                </a>

                <div class="ans position-relative">

                    <table class="m-0 border-0">
                        <tr>
                            <td class="pe-2  symbol-td align-top">
                                <span class="symbol">A<?php echo $idx;?>.</span>
                            </td>
                            <td class="align-middle">
                                <?php echo get_sub_field('answer');?>
                            </td>
                        </tr>

                    </table>



                </div>
            </div>
            <?php
                        // Load sub field value.
                        // $sub_value = get_sub_field('sub_field');
                        // Do something...
                        $idx++;
                
                    }
                ?>




        </div>
    </div>

    <?php
        
                }?>
</div>

<div class="grey-bg-2 mt-5">


    <div class="container contact-form-container" id="contact-form-container">
        <div class="row pt-0 pb-0  mt-0 align-items-center justify-content-center">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12  text-center mt-5">

                <!-- <div>
                    <div>
                        <h4 class="gold">//明碼實價

                        </h4>
                    </div>
                    <div>
                        <h2 class="blue"> 索取服務報價 </h2>
                        <div class="small">請聯絡我們並提供資料，即時能獲取準確報價</div>
                    </div>
                </div> -->
                <?php echo get_field('content_2');?>

            </div>
            <div class="col-lg-8 col-md-12 col-sm-12 col-12  p-lg-5 p-md-5 p-sm-3 p-3 ">





                <?php echo get_field('bottom_form');?>

            </div>
        </div>

    </div>
    <textarea id="tnc-data" class="form-control d-none" name="" id="" cols="30"
        rows="10"><?php echo get_field('tnc');?></textarea>


    <?php get_footer(); ?>
    <?php
    
      
    if($_POST)
    {

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
            ?>
    <script type="text/javascript">
    $(function() {

        $('.lightbox').fadeIn(200);
        $('.lightbox-msg-txt').html(
            'Submitted successfully, we will get back to you soon.');

    })
    </script>
    <?php


     
if($_POST['form-type']=='virtual_office_form')
{
    $client_name = $_POST['client-name'];
    $tel = $_POST['tel'];
    $email = $_POST['email'];
    $fax = $_POST['fax'];
    $billing_contact_person =$_POST['billing-contact-person'];
    $contact_name=$_POST['contact-name'];
    $contact_phone_number=$_POST['contact-phone-number'];
    $contact_name_chinese=$_POST['contact-name-chinese'];
    $contact_name_english=$_POST['contact-name-english'];
    $virtual_office=$_POST['virtual-office'];
    
    
    $post_title = $client_name.' application';
    $post_id = wp_insert_post(array (
        'post_type' => 'virtual_office_form',
        'post_title' => $post_title,
        'post_status' => 'publish',
        'comment_status' => 'closed',   // if you prefer
        'ping_status' => 'closed',      // if you prefer
    ));   

    if ($post_id) {
        add_post_meta($post_id, 'name', $client_name);
        add_post_meta($post_id, 'tel', $tel);
        add_post_meta($post_id, 'email', $email);
        add_post_meta($post_id, 'fax', $fax);
        add_post_meta($post_id, 'is_billing_contact_person', $billing_contact_person);
        add_post_meta($post_id, 'contact_person_name', $contact_name);
        add_post_meta($post_id, 'contact_person_phone_number', $contact_phone_number);
        add_post_meta($post_id, 'company_name_chinese', $contact_name_chinese);
        add_post_meta($post_id, 'company_name_english', $contact_name_english);
         add_post_meta($post_id, 'virtual_office', $virtual_office);
       
         global $receive_email;

         $send_content='';
         $send_content .='稱呼:'.$client_name.'<br>';
         $send_content .='聯絡電話:'.$tel.'<br>';
         $send_content .='電郵:'.$email.'<br>';
         $send_content .='Browse form:'.get_site_url().'/print/?f=vof&aid='.$post_id.'<br>';
      

        $headers = array(
            'From: Countaudit <info@countaudit.com>',
          );

         wp_mail( $receive_email, 'Countaudit 香港公司秘書服務計劃申請表 (from '.$client_name.')', $send_content,$headers );   
 
        
         
    }
}


if($_POST['form-type']=='incorp_limited_app')
{


    $client_name = $_POST['client-name'];
    $tel = $_POST['tel'];
    $email = $_POST['email'];
    $language = $_POST['language'];
    $billing_contact_person =$_POST['billing-contact-person'];
    $contact_name=$_POST['contact-name'];
    $contact_phone_number=$_POST['contact-phone-number'];
    $contact_name_chinese=$_POST['contact-name-chinese'];
    $contact_name_english=$_POST['contact-name-english'];

    $countaudit_virtual_office_service=$_POST['countaudit-virtual-office-service'];
    $other_registered_office=$_POST['other-registered-office'];
    $business = $_POST['business'];
    $service= $_POST['service'];
    $other_business= $_POST['other-business'];




    $business_stamp = $_POST['business-stamp'];
    $virtual_office = $_POST['virtual-office'];
    $year_end_date = $_POST['year-end-date'];
    $other_year_end_date=$_POST['other-year-end-date'];

    $appoint_countaudit=$_POST['appoint-countaudit'];
    $bank_account_opening= $_POST['bank-account-opening'];

    $post_title = $client_name.' application';
    $post_id = wp_insert_post(array (
        'post_type' => 'incorp_limited_app',
        'post_title' => $post_title,
        'post_status' => 'publish',
        'comment_status' => 'closed',   // if you prefer
        'ping_status' => 'closed',      // if you prefer
    ));   

    if ($post_id) {
        add_post_meta($post_id, 'name', $client_name);
        add_post_meta($post_id, 'tel', $tel);
        add_post_meta($post_id, 'email', $email);
        add_post_meta($post_id, 'language', $language);
        add_post_meta($post_id, 'is_billing_contact_person', $billing_contact_person);
        add_post_meta($post_id, 'contact_person_name', $contact_name);
        add_post_meta($post_id, 'contact_person_phone_number', $contact_phone_number);
        add_post_meta($post_id, 'company_name_chinese', $contact_name_chinese);
        add_post_meta($post_id, 'company_name_english', $contact_name_english);
        add_post_meta($post_id, 'use_countaudit_virtual_office', $countaudit_virtual_office_service);
        add_post_meta($post_id, 'custom_address_as_registered_office', $other_registered_office);

        

        add_post_meta($post_id, 'business_nature', $business);
        add_post_meta($post_id, 'business_service', $service);
        add_post_meta($post_id, 'business_others', $other_business);
        // add_post_meta($post_id, 'custom_address_as_registered_office', $aaa);
        // add_post_meta($post_id, 'shareholders_and_directors', $aaa);
        add_post_meta($post_id, 'business_stamp', $business_stamp);
        add_post_meta($post_id, 'virtual_office', $virtual_office);
        add_post_meta($post_id, 'year_end_date', $year_end_date);
        add_post_meta($post_id, 'other_year_end_date', $other_year_end_date);
        add_post_meta($post_id, 'appoint_countaudit_to_provide_accounting_audit_services', $appoint_countaudit);
        add_post_meta($post_id, 'bank_account_opening_referral_services', $bank_account_opening);


         global $receive_email;

        $send_content='';
        $send_content .='稱呼:'.$client_name.'<br>';
        $send_content .='聯絡電話:'.$tel.'<br>';
        $send_content .='電郵:'.$email.'<br>';
        $send_content .='Browse form:'.get_site_url().'/print/?f=ilaf&aid='.$post_id.'<br>';
     

        $headers = array(
            'From: Countaudit <info@countaudit.com>',
          );

        wp_mail( $receive_email, 'Countaudit 香港公司秘書服務計劃申請表 (from '.$client_name.')', $send_content,$headers );   

        

        for($i=1;$i<=count($_POST['applicant-fill']);$i++)
        {

            $applicant_position=$_POST['applicant-position-'.$i];
            $name_on_id_chinese=$_POST['name-on-id-chinese-'.$i];
            $name_on_id_english=$_POST['name-on-id-english-'.$i];
            $id_pass_co_no=$_POST['id-pass-co-no-'.$i];
            $percent_of_shares=$_POST['percent-of-shares-'.$i];
            $residential_address=$_POST['residential-address-'.$i];

            // add_row('applicant_position', $applicant_position, $post_id);
            // add_row('applicant_name_chinese', $name_on_id_chinese, $post_id);
            // add_row('applicant_name_english', $name_on_id_english, $post_id);
            // add_row('applicant_id_passport_company_no', $id_pass_co_no, $post_id);
            // add_row('percent_of_shares', $percent_of_shares, $post_id);
            // add_row('residential_address', $residential_address, $post_id);
// 
            $row = array(
                'applicant_position' => $applicant_position,
                'applicant_name_chinese'   => $name_on_id_chinese,
                'applicant_name_english'  => $name_on_id_english,
                'applicant_id_passport_company_no'  => $id_pass_co_no,
                'percent_of_shares'  => $percent_of_shares,
                'residential_address'  => $residential_address
                
            );

            
            
            add_row('shareholders_and_directors',$row,$post_id);

        }
        


    }
    
    


    
    


}


    if(!empty($_FILES))
    {

             
        for($j=1;$j<=6;$j++)
        {
            if($_FILES["upload-file-".$j]['size'])
            {
                    $wordpress_upload_dir = wp_upload_dir();
        
                    $new_file_path = $wordpress_upload_dir['path'] . '/' . $_FILES["upload-file-".$j]["name"];
        
                        $i=0;
                    while( file_exists( $new_file_path ) ) {
                        $i++;
                        $new_file_path = $wordpress_upload_dir['path'] . '/' . $i . '_' . $_FILES["upload-file-".$j]["name"];
                    }
                    
                    if (move_uploaded_file($_FILES["upload-file-".$j]["tmp_name"], $new_file_path)) {
            
                        $upload_id = wp_insert_attachment( array(
                        'guid'           => $new_file_path, 
                        'post_mime_type' => 'image/*',
                        //$_FILES["file_upload"]["tmp_name"],
                        'post_title'     => preg_replace( '/\.[^.]+$/', '', $_FILES["upload-file-".$j]["name"] ),
                        'post_content'   => '',
                        'post_status'    => 'inherit'
                    ), $new_file_path );
                    require_once( ABSPATH . 'wp-admin/includes/image.php' );
                
                    wp_update_attachment_metadata( $upload_id, wp_generate_attachment_metadata( $upload_id, $new_file_path ) );
        
                    update_field( 'upload_file_'.$j, $upload_id, $post_id );
                    // update_field( 'mid_report_approval', false, $school_id );
        
        
                    } else {
                        echo "Sorry, there was an error uploading your file.";
                    }
            }
        }

            }
        }
        

   
               
    }
    
    ?>
    <script type="text/javascript">
    var no_of_applicant = 0;
    var applicant_fill_html = '';


    function add_fill_area(i) {
        // alert(applicant_fill_html);
        // alert(7);
        // applicant_fill_html = $('.applicant-div-wrapper').html();
        // alert(applicant_fill_html);
        var append_fill_html =
            '<div class="row applicant-div mx-auto mb-3 "><input required type="checkbox" checked name="applicant-fill[]" value="1" class="d-none"> <div class="col-lg-6 col-md-6 col-sm-12 col-12 mb-3"><label for="language">' +
            i +
            '. 申請人身份 Applicant’s Position *</label> <div class="small">(請選擇最少其中一項 Choose at least one)</div> </div> <div class="col-lg-6 col-md-6 col-sm-12 col-12 mb-3 checkbox-group required"> <div class="form-check"> <input class="form-check-input" type="checkbox" name="applicant-position-' +
            i + '[]" id="shareholder' + i +
            '" value="股東 Shareholder"> <label class="form-check-label" for="shareholder' + i +
            '"> 股東 Shareholder </label> </div> <div class="form-check"> <input class="form-check-input" type="checkbox" name="applicant-position-' +
            i + '[]" id="director-' + i +
            '" value="董事 Director"> <label class="form-check-label" for="director-' + i +
            '"> 董事 Director </label> </div> <div class="form-check"> <input class="form-check-input" type="checkbox" name="applicant-position-' +
            i +
            '[]" id="beneficial-owner-' + i +
            '" value="受益人 Beneficial Owner"> <label class="form-check-label" for="beneficial-owner-' + i +
            '"> 受益人 Beneficial Owner </label> </div> </div> <div class="col-lg-6 col-md-6 col-sm-12 col-12 mb-3"><label for="name-on-id-chinese-' +
            i +
            '"> 證件上名稱 Name on ID/Passport * <div class="small">(中文 Chinese)</div></label> </div> <div class="col-lg-6 col-md-6 col-sm-12 col-12 mb-3"><input  required id="name-on-id-chinese-' +
            i +
            '" name="name-on-id-chinese-' + i +
            '" type="text" class="form-control"> </div> <div class="col-lg-6 col-md-6 col-sm-12 col-12 mb-3"><label for="name-on-id-english-' +
            i +
            '"> 證件上名稱 Name on ID/Passport *<div class="small">(英文 English)</div></label> </div> <div class="col-lg-6 col-md-6 col-sm-12 col-12 mb-3"><input  required id="name-on-id-english-' +
            i +
            '" name="name-on-id-english-' + i +
            '" type="text" class="form-control"> </div> <div class="col-lg-6 col-md-6 col-sm-12 col-12 mb-3"><label for="id-pass-co-no-' +
            i +
            '"> 身份證/護照/公司號碼 <br> ID/Passport/Company No *</label> </div> <div class="col-lg-6 col-md-6 col-sm-12 col-12 mb-3"><input required id="id-pass-co-no-' +
            i +
            '" name="id-pass-co-no-' + i +
            '" type="text" class="form-control"> </div> <div class="col-lg-6 col-md-6 col-sm-12 col-12 mb-3"><label for="percent-of-shares-' +
            i +
            '"> 持股比例 <br> % of Shares *</label> </div> <div class="col-lg-6 col-md-6 col-sm-12 col-12 mb-3"><input required id="percent-of-shares-' +
            i +
            '" name="percent-of-shares-' + i +
            '" type="text" class="form-control"> </div> <div class="col-lg-6 col-md-6 col-sm-12 col-12 mb-3"><label for="residential-address-' +
            i +
            '"> 住址 <br> Residential Address *</label> </div> <div class="col-lg-6 col-md-6 col-sm-12 col-12 mb-3"><input required id="residential-address-' +
            i + '" name="residential-address-' + i + '" type="text" class="form-control"> </div> </div>';

        $('.applicant-div-wrapper').append(append_fill_html);




    }

    $(function() {


        $('.qt').click(function() {
            $(this).toggleClass('active');
            if ($(this).hasClass('active')) {
                $(this).next('.ans').slideDown(200);
            } else {
                $(this).next('.ans').slideUp(200);

            }
        });

        $('#tnc').html($('#tnc-data').html());




        $('input[name="other-year-end-date"]').focus(function() {
            // alert(7);
            $('#year-end-date-3').click();
        });

        $('#year-end-date-3').focus(function() {
            $('input[name="other-year-end-date"]').focus();
        })


        no_of_applicant++;
        add_fill_area(no_of_applicant);


        // generate_fill_area(no_of_applicant, applicant_fill_html);

        $('.add-more-applicant-btn').click(function() {
            no_of_applicant++;

            add_fill_area(no_of_applicant);
        })

        $('.minus-applicant-btn').click(function() {
            if (no_of_applicant >= 2) {
                no_of_applicant--;
                $('.applicant-div:last-child').remove();

                applicant_fill_html = $('.applicant-div-wrapper').html();
            }

        })

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

        // $('.service-contact-btn').click(function() {


        //     $("html, body").animate({
        //         scrollTop: $('.contact-form-container').offset().top
        //     }, 200);




        // })



        $('#form').submit(function() {

            var invalid_obj_arr = [];

            for (i = 0; i < $('div.checkbox-group.required').length; i++) {

                if ($('div.checkbox-group.required').eq(i).find(':checkbox:checked').length == 0) {
                    invalid_obj_arr.push($('div.checkbox-group.required').eq(i));
                }
            }

            if (invalid_obj_arr.length > 0) {
                $('html, body').animate({
                    scrollTop: invalid_obj_arr[0].offset().top - 50
                });

                return false;

            } else {
                $('.lightbox').fadeIn(200);
                $('.lightbox-msg-txt').html(
                    'Submitting the form. Please wait...');
                $('.close-btn').fadeOut(0);
                $('.cover').fadeIn(0);
            }



        })









    })
    </script>
    </body>

    </html>