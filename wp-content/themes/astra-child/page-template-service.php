<?php
/**
 * Template Name: Service page
 * Template Post Type: page
 **/


// if ( ! defined( 'ABSPATH' ) ) {
	// exit; // Exit if accessed directly.
// }

get_header(); ?>

<!-- <div class="main-banner"> -->


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
        <!-- <div class="text-end gold small">CountAudit宗旨</div> -->
    </div>
</div>

<div class="container mt-5">


    <div class="row justify-content-center gx-5">
        <div class="col-lg-5 col-md-10 col-sm-10 col-10  mb-5">
            <div class="img-shadow-div grey-bg p-3">

                <img class="w-100" src="<?php echo wp_get_attachment_image_src(get_field('service_image'),'full')[0];?>"
                    alt="">


                <!-- <div class="deep-blue">
                    <h3 class="blue mt-3">我們是CountAudit算數會計師事務所</h3>
                    <div class=" mt-3">是真正在hkicpa登記的執業會計師事務所<br>PC Firm Registration Number:<br>2589</div>
                </div>

                <div class="text-end mt-3">
                    <a href="javascript:void(0);" class="service-contact-btn">Registry</a>
                </div> -->
                <?php echo get_field('content_1');?>

                <div class="img-shadow"></div>


            </div>


        </div>
        <div class="col-lg-5 col-md-10 col-sm-10 col-10 ">
            <div class="text-start">
                <?php echo get_field('service_content');?>



                <!--
                    
                <div>
                    <h4 class="gold"> //HK$3,500起
                    </h4>
                </div>
                <div>
                    <h2 class="blue"> 有限公司周年審計服務 </h2>
                    <div class="small-2">價格包括以下服務﹕</div>
                </div>

                <ul class="service-ul mt-4">
                    <li>審計核數服務</li>
                    <li> 編制財務年報</li>
                    <li> 委任為稅務代表</li>
                    <li> 填妥利得稅報稅表</li>
                    <li> 遞交報稅表</li>
                    <li> 稅務建議</li>
                    <li> 其他雜項費用</li>

                </ul>

                <div class="mt-4">如您需要，我們也可負責將不完整的賬目完善直到合乎審計標準，詳情另議。
                    會有專人跟進回覆提問及與客戶商討解決其所有困難。不計工作時間，以解決客人問題為本。</div>
                 -->
            </div>
        </div>

        <?php if(get_field('intro_title') ||get_field('intro_content'))
{
    ?>
        <div class="row justify-content-center gx-5 mt-4">

            <div class="col-lg-10 col-md-10 col-sm-12 col-12 ">

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

            <div class="col-lg-10 col-md-10 col-sm-12 col-12 ">

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





</div>


<div class="grey-bg-2 mt-5">


    <div class="container contact-form-container">
        <div class="row pt-0 pb-0  mt-0 align-items-center justify-content-center">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12  text-center mt-5">



                <?php echo get_field('content_2');?>


            </div>
            <div class="col-lg-8 col-md-12 col-sm-12 col-12  p-lg-5 p-md-5 p-sm-3 p-3 ">


                <?php echo get_field('bottom_form');?>

                <!--  -->

                <!--  -->
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

       
if($_POST['form-type']=='accounting_q_form')
{
    
    $client_name = $_POST['client-name'];
    $tel = $_POST['tel'];
    $email = $_POST['email'];
    $company_name=$_POST['company-name'];
    $principal_activities=$_POST['principal-activities'];
    $performed_audit_before=$_POST['performed-audit-before'];
    $year_ended_date=$_POST['year-ended-date'];
    $declared_profits_tax_before=$_POST['declared-profits-tax-before'];
    $year_assessment=$_POST['year-assessment'];
    $done_accounting_before=$_POST['done-accounting-before'];
    $year_ended_date_2=$_POST['year-ended-date-2'];
    $reporting_frequency=$_POST['reporting-frequency'];
    $excel_for_business_records=$_POST['excel-for-business-records'];
    $way_of_sorting_receipts=$_POST['way-of-sorting-receipts'];
    $total_turnover_yearly = $_POST['total-turnover-yearly'];
    $any_stock=$_POST['any-stock'];
    $no_of_bank_used=$_POST['no-of-bank-used'];
    $no_of_bank_transactions_monthly=$_POST['no-of-bank-transactions-monthly'];
    $any_property= $_POST['any-property'];
    $any_motor_vehicle=$_POST['any-motor-vehicle'];
    $no_of_loans_hire_purchases=$_POST['no-of-loans-hire-purchases'];
    $no_of_employees=$_POST['no-of-employees'];

    $post_title = $client_name.' application';
    $post_id = wp_insert_post(array (
        'post_type' => 'accounting_q_form',
        'post_title' => $post_title,
        'post_status' => 'publish',
        'comment_status' => 'closed',   // if you prefer
        'ping_status' => 'closed',      // if you prefer
    ));

    if ($post_id) {
        add_post_meta($post_id, 'client_name', $client_name);
        add_post_meta($post_id, 'tel', $tel);
        add_post_meta($post_id, 'email', $email);
        add_post_meta($post_id, 'company_name', $company_name);
        add_post_meta($post_id, 'principal_activities', $principal_activities);
        add_post_meta($post_id, 'performed_audit_before', $performed_audit_before);
        add_post_meta($post_id, 'year_ended_date', $year_ended_date);
        add_post_meta($post_id, 'declared_profits_tax_before', $declared_profits_tax_before);
        add_post_meta($post_id, 'year_assessment', $year_assessment);
        add_post_meta($post_id, 'done_accounting_before', $done_accounting_before);
        add_post_meta($post_id, 'year_ended_date_2', $year_ended_date_2);
        add_post_meta($post_id, 'reporting_frequency', $reporting_frequency);
        add_post_meta($post_id, 'excel_for_business_records', $excel_for_business_records);
        add_post_meta($post_id, 'way_of_sorting_receipts', $way_of_sorting_receipts);
        add_post_meta($post_id, 'total_turnover_yearly', $total_turnover_yearly);
        add_post_meta($post_id, 'any_stock', $any_stock);
        add_post_meta($post_id, 'no_of_bank_used', $no_of_bank_used);
        add_post_meta($post_id, 'no_of_bank_transactions_monthly', $no_of_bank_transactions_monthly);
        add_post_meta($post_id, 'any_property', $any_property);
        add_post_meta($post_id, 'any_motor_vehicle', $any_motor_vehicle);
        add_post_meta($post_id, 'no_of_loans_hire_purchases', $no_of_loans_hire_purchases);
        add_post_meta($post_id, 'no_of_employees', $no_of_employees);

   


    }

}


if($_POST['form-type']=='audit_and_tax_report')
{
   
    $client_name = $_POST['client-name'];
    $tel = $_POST['tel'];
    $email = $_POST['email'];
    $reporting_purposes = $_POST['reporting-purposes'];
    $other_reporting_purposes=$_POST['other-reporting-purposes'];
    $company_name=$_POST['company-name'];
    $principal_activities=$_POST['principal-activities'];
    $incorporation_date=$_POST['incorporation-date'];
   
    $performed_audit_before=$_POST['performed-audit-before'];
    $year_ended_date=$_POST['year-ended-date'];
   
    $declared_profits_tax_before=$_POST['declared-profits-tax-before'];
    $year_assessment=$_POST['year-assessment'];
   
    $has_receive_tax_return=$_POST['has-receive-tax-return'];
   
   
    $total_turnover_yearly=$_POST['total-turnover-yearly'];
    $any_stock=$_POST['any-stock'];
    $no_of_bank_used=$_POST['no-of-bank-used'];
    $no_of_bank_transactions_monthly= $_POST['no-of-bank-transactions-monthly'];
    $no_of_non_bank_transactions_monthly=$_POST['no-of-non-bank-transactions-monthly'];
    $any_property= $_POST['any-property'];
    $any_motor_vehicle=$_POST['any-motor-vehicle'];
    $no_of_loans_hire_purchases=$_POST['no-of-loans-hire-purchases'];
    $no_of_employees=$_POST['no-of-employees'];
   
    
    $post_title = $client_name.' application';
    $post_id = wp_insert_post(array (
        'post_type' => 'audit_and_tax_report',
        'post_title' => $post_title,
        'post_status' => 'publish',
        'comment_status' => 'closed',   // if you prefer
        'ping_status' => 'closed',      // if you prefer
    ));   


    if ($post_id) {
        add_post_meta($post_id, 'client_name', $client_name);
        add_post_meta($post_id, 'tel', $tel);
        add_post_meta($post_id, 'email', $email);
        add_post_meta($post_id, 'reporting_purposes', $reporting_purposes);
        add_post_meta($post_id, 'other_reporting_purposes', $other_reporting_purposes);
        add_post_meta($post_id, 'company_name', $company_name);
        add_post_meta($post_id, 'principal_activities', $principal_activities);
        add_post_meta($post_id, 'incorporation_date', $incorporation_date);
        add_post_meta($post_id, 'performed_audit_before', $performed_audit_before);
        add_post_meta($post_id, 'year_ended_date', $year_ended_date);
        add_post_meta($post_id, 'declared_profits_tax_before', $declared_profits_tax_before);
        add_post_meta($post_id, 'year_assessment', $year_assessment);
        add_post_meta($post_id, 'has_receive_tax_return', $has_receive_tax_return);
        add_post_meta($post_id, 'total_turnover_yearly', $total_turnover_yearly);
        add_post_meta($post_id, 'any_stock', $any_stock);
        add_post_meta($post_id, 'no_of_bank_used', $no_of_bank_used);
        add_post_meta($post_id, 'no_of_bank_transactions_monthly', $no_of_bank_transactions_monthly);
        add_post_meta($post_id, 'no_of_non_bank_transactions_monthly', $no_of_non_bank_transactions_monthly);
        add_post_meta($post_id, 'any_property', $any_property);
        add_post_meta($post_id, 'any_motor_vehicle', $any_motor_vehicle);
        add_post_meta($post_id, 'no_of_loans_hire_purchases', $no_of_loans_hire_purchases);
        add_post_meta($post_id, 'no_of_employees', $no_of_employees);   


        global $receive_email;

        $send_content='';
        $send_content .='稱呼:'.$client_name.'<br>';
        $send_content .='聯絡電話:'.$tel.'<br>';
        $send_content .='電郵:'.$email.'<br>';
        $send_content .='Browse form:'.get_site_url().'/print/?f=atrqf&aid='.$post_id.'<br>';
     
        $headers = array(
            'From: Countaudit <info@countaudit.com>',
          );
        wp_mail( $receive_email, 'Countaudit 審計及稅務報價表(from '.$client_name.')', $send_content,$headers );   

        
    }
}


if($_POST['form-type']=='com_sec_app_form')
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
    $date_change_secretary=$_POST['date-change-secretary'];
    $details_of_changes=$_POST['details-of-changes'];
    $details_of_changes_others=$_POST['details-of-changes-others'];
    $remarks=$_POST['remarks'];
    $service_plan_information=$_POST['service-plan-information'];
    $virtual_office=$_POST['virtual-office'];
    // $increase_of_capital=$_POST['increase-of-capital'];
    // $allotment_of_shares=$_POST['allotment-of-shares'];
    // $register_branch=$_POST['register-branch'];
    // $annual_general_name=$_POST['annual-general-name'];
    // $change_of_company_branch_name=$_POST['change-of-company-branch-name'];
    // $transfer_of_shares= $_POST['transfer-of-shares'];
    // $deregistration_of_limited_company= $_POST['deregistration-of-limited-company'];
    $deregistration_of_limited_company = $_POST['deregistration-of-limited-company'];
    $others=$_POST['others'];
    
    
    $post_title = $client_name.' application';
    $post_id = wp_insert_post(array (
        'post_type' => 'com_sec_app_form',
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
        add_post_meta($post_id, 'date_of_changing_company_secretary', $date_change_secretary);
        add_post_meta($post_id, 'remarks', $remarks);

        add_post_meta($post_id, 'details_of_changes', $details_of_changes);
        add_post_meta($post_id, 'details_of_changes_others', $details_of_changes_others);
        add_post_meta($post_id, 'service_plan_information', $service_plan_information);


        add_post_meta($post_id, 'virtual_office', $virtual_office);
        add_post_meta($post_id, 'deregistration_of_limited_company', $deregistration_of_limited_company);


        // add_post_meta($post_id, 'increase_of_capital', $increase_of_capital);
        // add_post_meta($post_id, 'allotment_of_shares', $allotment_of_shares);
        // add_post_meta($post_id, 'register_branch', $register_branch);
        // add_post_meta($post_id, 'annual_general_name', $annual_general_name);
        // add_post_meta($post_id, 'change_of_company_branch_name', $change_of_company_branch_name);
        // add_post_meta($post_id, 'transfer_of_shares', $transfer_of_shares);
        // add_post_meta($post_id, 'deregistration_of_limited_company', $deregistration_of_limited_company);
        add_post_meta($post_id, 'others', $deregistration_of_limited_company);

        global $receive_email;

        $send_content='';
        $send_content .='稱呼:'.$client_name.'<br>';
        $send_content .='聯絡電話:'.$tel.'<br>';
        $send_content .='電郵:'.$email.'<br>';
        $send_content .='Browse form:'.get_site_url().'/print/?f=csf&aid='.$post_id.'<br>';
     

        $headers = array(
            'From: Countaudit <info@countaudit.com>',
          );

        wp_mail( $receive_email, 'Countaudit 香港公司秘書服務計劃申請表 (from '.$client_name.')', $send_content,$headers );   

        

        // 
    }
    

}


if(!empty($_FILES))
{

    
    //File 1
    if($_FILES["excel-file"]['size'])
    {
            $wordpress_upload_dir = wp_upload_dir();

            $new_file_path = $wordpress_upload_dir['path'] . '/' . $_FILES["excel-file"]["name"];

                $i=0;
            while( file_exists( $new_file_path ) ) {
                $i++;
                $new_file_path = $wordpress_upload_dir['path'] . '/' . $i . '_' . $_FILES["excel-file"]["name"];
            }
            
            if (move_uploaded_file($_FILES["excel-file"]["tmp_name"], $new_file_path)) {
    
                $upload_id = wp_insert_attachment( array(
                'guid'           => $new_file_path, 
                'post_mime_type' => 'image/*',
                //$_FILES["file_upload"]["tmp_name"],
                'post_title'     => preg_replace( '/\.[^.]+$/', '', $_FILES["excel-file"]["name"] ),
                'post_content'   => '',
                'post_status'    => 'inherit'
            ), $new_file_path );
            require_once( ABSPATH . 'wp-admin/includes/image.php' );
        
            wp_update_attachment_metadata( $upload_id, wp_generate_attachment_metadata( $upload_id, $new_file_path ) );

            update_field( 'excel_file', $upload_id, $post_id );
            // update_field( 'mid_report_approval', false, $school_id );


            } else {
                echo "Sorry, there was an error uploading your file.";
            }
    }

        
    //File a

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
  

        
    //File b
    // if($_FILES["upload-file-2"]['size'])
    // {
    //         $wordpress_upload_dir = wp_upload_dir();

    //         $new_file_path = $wordpress_upload_dir['path'] . '/' . $_FILES["upload-file-2"]["name"];

    //             $i=0;
    //         while( file_exists( $new_file_path ) ) {
    //             $i++;
    //             $new_file_path = $wordpress_upload_dir['path'] . '/' . $i . '_' . $_FILES["upload-file-2"]["name"];
    //         }
            
    //         if (move_uploaded_file($_FILES["upload-file-2"]["tmp_name"], $new_file_path)) {
    
    //             $upload_id = wp_insert_attachment( array(
    //             'guid'           => $new_file_path, 
    //             'post_mime_type' => 'image/*',
    //             //$_FILES["file_upload"]["tmp_name"],
    //             'post_title'     => preg_replace( '/\.[^.]+$/', '', $_FILES["upload-file-2"]["name"] ),
    //             'post_content'   => '',
    //             'post_status'    => 'inherit'
    //         ), $new_file_path );
    //         require_once( ABSPATH . 'wp-admin/includes/image.php' );
        
    //         wp_update_attachment_metadata( $upload_id, wp_generate_attachment_metadata( $upload_id, $new_file_path ) );

    //         update_field( 'upload_file_2', $upload_id, $post_id );
    //         // update_field( 'mid_report_approval', false, $school_id );


    //         } else {
    //             echo "Sorry, there was an error uploading your file.";
    //         }
    // }
    
}

        }
     
    }




    
    ?>
    <script type="text/javascript">
    // alert(99)

    $(function() {



        $('.qt').click(function() {
            $(this).toggleClass('active');
            if ($(this).hasClass('active')) {
                $(this).next('.ans').slideDown(200);
            } else {
                $(this).next('.ans').slideUp(200);

            }
        });

        // var tnc = '<?php// echo get_field('tnc');?>';
        // $('#tnc').html('<?php //echo get_field('tnc');?>');
        // $('#tnc').val(div.replace("\\n","\n"));
        // alert(90)
        $('#tnc').html($('#tnc-data').html());
        // alert(80);

        $('#form').submit(function() {

            if ($('div.checkbox-group.required :checkbox:checked').length == 0) {
                $('html, body').animate({
                    scrollTop: $('div.checkbox-group.required').offset().top - 50
                });
                // alert('請填上必須填寫項目* Please fill all required Fields*');
                // $('html, body').animate({
                // scrollTop: $('div.checkbox-group.required :checkbox:checked').offset().top
                // }, 200);

                return false;
            } else {
                $('.lightbox').fadeIn(200);
                $('.lightbox-msg-txt').html(
                    'Submitting the form. Please wait...');
                $('.close-btn').fadeOut(0);
                $('.cover').fadeIn(0);
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







    })
    </script>
    </body>

    </html>