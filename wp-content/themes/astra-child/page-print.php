<?php
get_header(); 
?>

<div class="container mx-auto">


    <div class="print-header">
        <div class="client-code-div">
            <table>
                <tr>
                    <td class="fit">Client Code:</td>
                    <td class="fit"></td>
                </tr>
            </table>
        </div>

        <img class="ca-print-logo" src="<?php echo get_site_url();?>/wp-content/uploads/2022/03/ca-print-logo-1.jpg"
            alt="">

        <div class="float-end border border-dark p-2">Trust or Company Service Provider Liscense No. <br>
            信托或公司服務提供牌照:TC007204</div>
    </div>

    <div class="desktop-print-header">

        <a href="javascript:void(0);" class="print-btn">Print/Print as PDF</a>


        <div class="client-code-div">
            <table>
                <tr>
                    <td class="fit">Client Code:</td>
                    <td class="fit"></td>
                </tr>
            </table>
        </div>

        <img class="ca-print-logo" src="<?php echo get_site_url();?>/wp-content/uploads/2022/03/ca-print-logo-1.jpg"
            alt="">

        <div class="float-end border border-dark p-2">Trust or Company Service Provider Liscense No. <br>
            信托或公司服務提供牌照:TC007204</div>

    </div>

    <div class="print-content">


        <?php if($_GET['f']=='aqf')
    {
        
    ?>
        <div class="accounting-q-form-div">
            <div class="print-form-container">
                <h2 class="text-center mt-4">Quotation Form of Accounting Service <br>
                    會計服務報價表
                </h2>

                <table class="form-table mt-3 mb-0">
                    <tr>
                        <td colspan="2" class="text-center orange-yellow-bg fw-bold">Contact Information 聯絡資料</td>
                    </tr>
                    <tr>
                        <td class="fit text-nowrap">
                            Name 姓名:</td>
                        <td class=""></td>
                    </tr>
                    <tr>
                        <td class="fit text-nowrap">
                            Tel 電話:</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td class="fit text-nowrap">
                            E-mail 電郵:</td>
                        <td></td>
                    </tr>
                </table>


                <table class="form-table mt-0">
                    <tr>
                        <td colspan="4" class="text-center orange-yellow-bg fw-bold">Company Information 公司資料</td>
                    </tr>
                    <tr>
                        <td class="fit  text-nowrap">Company name <br> 公司名稱</td>
                        <td colspan="3">
                        </td>
                    </tr>
                    <tr>
                        <td class="fit text-nowrap">
                            Principal activities <br>
                            主要業務
                        </td>
                        <td colspan="3">
                        </td>
                    </tr>
                    <tr>
                        <td class="fit text-nowrap">Incorporation date <br>
                            公司開立日期</td>
                        <td colspan="3"></td>
                    </tr>
                    <tr>
                        <td class="fit text-nowrap">Has performed audit before?<br>
                            是否曾進行核數</td>
                        <td class="fit text-nowrap">Yes / No If Yes, please provide the related year ended date<br>
                            是 / 否 如是，請提供相關年結日</td>
                        <td class="text-wrap" colspan="2"></td>
                    </tr>
                    <tr>
                        <td class="fit">Has declared profits tax before?<br>
                            是否曾申報利得稅</td>
                        <td class="fit">Yes / No If Yes, please provide the related year of assessment<br>
                            是 / 否 如是，請提供相關課稅年度</td>
                        <td class="text-wrap" colspan="2"></td>
                    </tr>
                    <tr>
                        <td class="fit">Has done accounting before?<br>
                            是否曾做會計帳</td>
                        <td class="fit">Yes / No If Yes, please provide the related year ended date<br>
                            是 / 否 如是，請提供相關年結日</td>
                        <td class="text-wrap" colspan="2"></td>
                    </tr>
                    <tr>
                        <td class="fit">Reporting Frequency <br>
                            會計匯報頻率</td>
                        <td colspan="3">
                            每月 Monthly □ 每季 Quarterly □ 每年 Yearly
                        </td>
                    </tr>
                    <tr>
                        <td>Has done Excel for business records? <br>
                            有否做Excel營業記錄？ </td>
                        <td colspan="3">

                            Yes / No, if Yes, please upload <br>
                            　如有，請上載</td>
                    </tr>
                    <tr>
                        <td>Way of sorting and keeping receipts <br>
                            整理單據的方式<br>

                            <div class="small"> e.g. Scanning / taking picture /<br>sorted by folder / unsorted <br>
                                例如電子掃描//拍照/<br>分類袋分類/沒有任何分類</div>
                        </td>
                        <td colspan="3">

                        </td>
                    </tr>

                    <tr>
                        <td>Total Turnover (yearly) <br>
                            全年總營業額</td>
                        <td colspan="3">

                        </td>
                    </tr>
                    <tr>
                        <td class="fit">Any stock? <br>
                            有否存貨?</td>
                        <td class="text-wrap">Yes/No</td>
                        <td class="fit">No. of bank used <br>
                            使用銀行的數量</td>
                        <td class="text-wrap"></td>
                    </tr>

                    <tr>
                        <td class="fit text-nowrap">No. of bank transactions <br> (monthly) <br>
                            每月經銀行交易的數量</td>
                        <td class="text-wrap"></td>
                        <td class="fit  text-nowrap">No. of non-bank transactions <br>(monthly) <br>
                            每月非經銀行交易的數量</td>
                        <td class="text-wrap"></td>
                    </tr>

                    <tr>
                        <td class="fit">Any property? <br>
                            有否物業?</td>
                        <td class="text-wrap">Yes /No</td>
                        <td class="fit">Any motor vehicle? <br>
                            有否車輛?</td>
                        <td class="text-wrap">Yes /No</td>
                    </tr>


                    <tr>
                        <td class="fit">No. of loans / hire purchases <br>
                            貸款/分期付款數目</td>
                        <td class="text-wrap"></td>
                        <td class="fit">No. of employees <br>
                            員工人數</td>
                        <td class="text-wrap"></td>
                    </tr>


                </table>

            </div>
        </div>
        <?php
    }
    ?>

        <?php
     if($_GET['f']=='atrqf')
     {
         $application_no = $_GET['aid'];
         $query_args = array(
            'post_type' => 'audit_and_tax_report',
            'p' => $application_no,
        );
        $the_query = new WP_Query( $query_args );
        if ( $the_query->have_posts() ) {
                $the_query->the_post();
        } else {
            
        }
        

         ?>
        <div class="audit-and-tax-reporting-q-form">
            <div class="print-form-container">
                <h2 class="text-center mt-4">
                    Quotation Form of Audit and Tax Reporting <br>
                    審計及稅務報價表
                </h2>

                <table class="form-table mt-3 mb-0">
                    <tr>
                        <td colspan="2" class="text-center orange-yellow-bg fw-bold">Contact Information 聯絡資料</td>
                    </tr>
                    <tr>
                        <td class="fit text-nowrap">
                            Name 姓名:</td>
                        <td> <span
                                class="text-primary"><?php echo get_field('client_name') ? get_field('client_name') :'<span class="opacity-0">empty</span>' ;?></span>
                        </td>
                    </tr>
                    <tr>
                        <td class="fit text-nowrap">
                            Tel 電話:</td>
                        <td> <span
                                class="text-primary"><?php echo get_field('tel') ? get_field('tel') : '<span class="opacity-0">empty</span>';?></span>
                        </td>
                    </tr>
                    <tr>
                        <td class="fit text-nowrap">
                            E-mail 電郵:</td>
                        <td> <span
                                class="text-primary"><?php echo get_field('email') ?  get_field('email') :'<span class="opacity-0">empty</span>';?></span>
                        </td>
                    </tr>
                </table>


                <table class="form-table mt-0 mb-0">
                    <tr>
                        <td colspan="4" class="text-center orange-yellow-bg fw-bold">Reporting purposes 報表用途</td>
                    </tr>
                    <tr>
                        <td><?php echo get_field('reporting_purposes')  =='HK Profits Tax declaration 申報香港利得稅' ? '<span class="text-primary">☑</span>':'☐';  ?>
                            HK
                            Profits Tax declaration <br>
                            申報香港利得稅</td>
                        <!-- Borrowing loans from banks 向銀行借款 -->
                        <td><?php echo get_field('reporting_purposes')  =='Borrowing loans from banks 向銀行借款' ? '<span class="text-primary">☑</span>':'☐';  ?>
                            Borrowing loans from banks<br>
                            向銀行借款</td>
                        <!-- Funding purposes 基金要求 -->
                        <td><?php echo get_field('reporting_purposes')  =='Funding purposes 基金要求' ? '<span class="text-primary">☑</span>':'☐';  ?>
                            Funding
                            purposes <br>
                            基金要求</td>
                        <td>
                            Other: Please specify <br>
                            其他：請註明 <br>
                            <?php echo get_field('other_reporting_purposes') ? '<u class="text-primary">'.get_field('other_reporting_purposes').'</u>' : '_____________________';?>

                        </td>
                    </tr>




                </table>

                <table class="form-table mt-0">
                    <tr>
                        <td colspan="4" class="text-center orange-yellow-bg fw-bold">Company Information 公司資料</td>
                    </tr>
                    <tr>
                        <td class="fit  text-nowrap">Company name <br> 公司名稱</td>
                        <td colspan="3">
                            <span
                                class="text-primary"><?php echo get_field('company_name') ? get_field('company_name') : '<span class="opacity-0">empty</span>' ;?></span>
                        </td>
                    </tr>
                    <tr>
                        <td class="fit  text-nowrap">
                            Principal activities <br>
                            主要業務
                        </td>
                        <td colspan="3">
                            <span
                                class="text-primary"><?php echo get_field('principal_activities') ? get_field('principal_activities'): '<span class="opacity-0">empty</span>';?></span>

                        </td>
                    </tr>
                    <tr>
                        <td class="fit  text-nowrap">Incorporation date <br>
                            公司開立日期</td>
                        <td colspan="3">
                            <span
                                class="text-primary"><?php echo get_field('incorporation_date') ? get_field('incorporation_date') : '<span class="opacity-0">empty</span>';?></span>

                        </td>
                    </tr>
                    <tr>
                        <td class="fit  text-nowrap">Has performed audit before?<br>
                            是否曾進行核數</td>
                        <td class="fit">Yes / No If Yes, please provide the related year ended date<br>
                            是 / 否 如是，請提供相關年結日</td>
                        <td class="text-wrap" colspan="2">
                            <span
                                class="text-primary"><?php echo get_field('performed_audit_before') ? get_field('performed_audit_before'):'<span class="opacity-0">empty</span>';?></span>
                            <span
                                class="text-primary"><?php echo get_field('year_ended_date') ? get_field('year_ended_date') :'<span class="opacity-0">empty</span>';?></span>

                        </td>
                    </tr>
                    <tr>
                        <td class="fit  text-nowrap">Has declared profits tax before?<br>
                            是否曾申報利得稅</td>
                        <td class="fit  text-nowrap">Yes / No If Yes, please provide the related year of assessment<br>
                            是 / 否 如是，請提供相關課稅年度</td>
                        <td class="text-wrap" colspan="2">
                            <span
                                class="text-primary"><?php echo get_field('declared_profits_tax_before')? get_field('declared_profits_tax_before'):'<span class="opacity-0">empty</span>';?></span>

                            <span
                                class="text-primary"><?php echo get_field('year_assessment') ? get_field('year_assessment'):'<span class="opacity-0">empty</span>';?></span>

                        </td>
                    </tr>
                    <tr>
                        <td class="fit text-nowrap">Has received the tax return this year <br>
                            有否收到今年度利得稅報稅表</td>
                        <td class="fit text-nowrap">Yes / No If Yes, please provide the issued date<br>
                            是 / 否 如有，請提供發出日期</td>
                        <td class="text-wrap" colspan="2">
                            <span
                                class="text-primary"><?php echo get_field('has_receive_tax_return') ? get_field('has_receive_tax_return'):'<span class="opacity-0">empty</span>' ;?></span>

                            <div class="text-primary"><?php echo wp_get_attachment_url(get_field('excel_file'));?></div>



                        </td>
                    </tr>
                    <tr>
                        <td colspan="4" class="fw-bold">
                            是否有做會計帳目？ 如有，請提供審計年度的Profit and Loss, Balance Sheet <br>
                            如沒有，請提供以下資料
                        </td>
                    </tr>
                    <tr>
                        <td class="fit  text-nowrap">Total Turnover (yearly) <br>
                            全年總營業額</td>
                        <td colspan="3">
                            <span
                                class="text-primary"><?php echo get_field('total_turnover_yearly') ? get_field('total_turnover_yearly'): '<span class="opacity-0">empty</span>';?></span>

                        </td>
                    </tr>
                    <tr>
                        <td class="fit  text-nowrap">Any stock? <br>
                            有否存貨?</td>
                        <td class="text-wrap">
                            <span
                                class="text-primary"><?php echo get_field('any_stock') ? get_field('any_stock') :'<span class="opacity-0">empty</span>';?></span>


                        </td>
                        <td class="fit  text-nowrap">No. of bank used <br>
                            使用銀行的數量</td>
                        <td class="text-wrap">
                            <span
                                class="text-primary"><?php echo get_field('no_of_bank_used') ? get_field('no_of_bank_used') :'<span class="opacity-0">empty</span>';?></span>


                        </td>
                    </tr>

                    <tr>
                        <td class="fit">No. of bank transactions (monthly) <br>
                            每月經銀行交易的數量</td>
                        <td class="text-wrap">
                            <span
                                class="text-primary"><?php echo get_field('no_of_bank_transactions_monthly') ? get_field('no_of_bank_transactions_monthly'):'<span class="opacity-0">empty</span>';?></span>


                        </td>
                        <td class="fit">No. of non-bank transactions (monthly) <br>
                            每月非經銀行交易的數量</td>
                        <td class="text-wrap">
                            <span
                                class="text-primary"><?php echo get_field('no_of_non_bank_transactions_monthly')? get_field('no_of_non_bank_transactions_monthly'):'<span class="opacity-0">empty</span>';?></span>

                        </td>
                    </tr>

                    <tr>
                        <td class="fit  text-nowrap">Any property? <br>
                            有否物業?</td>
                        <td class="text-wrap">
                            <span
                                class="text-primary"><?php echo get_field('any_property')?get_field('any_property'):'<span class="opacity-0">empty</span>';?></span>

                        </td>
                        <td class="fit text-nowrap">Any motor vehicle? <br>
                            有否車輛?</td>
                        <td class="text-wrap">
                            <span
                                class="text-primary"><?php echo get_field('any_motor_vehicle')?get_field('any_motor_vehicle'):'<span class="opacity-0">empty</span>';?></span>

                        </td>
                    </tr>


                    <tr>
                        <td class="fit text-nowrap">No. of loans / hire purchases <br>
                            貸款/分期付款數目</td>
                        <td class="text-wrap">

                            <span
                                class="text-primary"><?php echo get_field('no_of_loans_hire_purchases') ? get_field('no_of_loans_hire_purchases'):'<span class="opacity-0">empty</span>';?></span>

                        </td>
                        <td class="fit text-nowrap">No. of employees <br>
                            員工人數</td>
                        <td class="text-wrap">
                            <span
                                class="text-primary"><?php echo get_field('no_of_employees') ? get_field('no_of_employees') : '<span class="opacity-0">empty</span>';?></span>

                        </td>
                    </tr>








                </table>

            </div>
        </div>
        <?php
     }
    ?>

        <?php
     if($_GET['f']=='csf')
     {

        // 4292

        $application_no = $_GET['aid'];
        $query_args = array(
           'post_type' => 'com_sec_app_form',
           'p' => $application_no,
       );
       $the_query = new WP_Query( $query_args );
       if ( $the_query->have_posts() ) {
               $the_query->the_post();
       } else {
           
       }
       


        ?>
        <div class="accounting-q-form-div">
            <div class="print-form-container">
                <h2 class="text-center mt-4">Company Secretary in Hong Kong Application Form
                    <br>
                    香港公司秘書服務計劃申請表
                    <div class="small mt-2">*為必須填寫項目 Required Fields</div>
                </h2>

                <table class="form-table mt-3 mb-0">
                    <tr>
                        <td colspan="4" class="text-center orange-yellow-bg fw-bold">申請人資料 Applicant Information

                        </td>
                    </tr>
                    <tr>
                        <td class="fit text-nowrap">
                            Name 姓名:</td>
                        <td><span
                                class="text-primary"><?php echo get_field('name') ? get_field('name'):'<span class="opacity-0">empty</span>' ;?></span>
                        </td>
                        <td class="fit text-nowrap">*電郵 Email:
                        </td>
                        <td> <span
                                class="text-primary"><?php echo get_field('email') ? get_field('email'):'<span class="opacity-0">empty</span>';?></span>
                        </td>
                    </tr>
                    <tr>
                        <td class="fit text-nowrap">
                            *電話 Tel:

                        </td>
                        <td><span
                                class="text-primary"><?php echo get_field('tel')? get_field('tel'):'<span class="opacity-0">empty</span>';?></span>
                        </td>
                        <td class="fit text-nowrap">傳真 Fax:



                        </td>
                        <td><span
                                class="text-primary"><?php echo get_field('fax')? get_field('fax'):'<span class="opacity-0">empty</span>';?></span>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="4">

                            *上述申請人為賬單聯絡人 The above applicant is the billing contact person
                            <?php echo get_field('is_billing_contact_person')  =='yes' ? '<span class="text-primary">☑</span>':'☐';  ?>
                            是 Yes
                            <?php echo get_field('is_billing_contact_person')  =='no' ? '<span class="text-primary">☑</span>':'☐';  ?>
                            否 No <br>
                            如否，請提供賬單聯絡人資料 If No, please provide the information of the billing contact person <br>
                            <br>
                            姓名Name：<?php echo get_field('is_billing_contact_person')=='no' ? '<u class="text-primary">'.get_field('contact_person_name').'</u>' : '_____________________';?>
                            聯絡電話Phone
                            Number：<?php echo get_field('is_billing_contact_person')=='no' ? '<u class="text-primary">'.get_field('contact_person_phone_number').'</u>' : '_____________________';?>

                        </td>
                    </tr>


                </table>


                <table class="form-table mt-0 mb-0">
                    <tr>
                        <td colspan="4" class="text-center orange-yellow-bg fw-bold">公司資料 Company Information



                        </td>
                    </tr>
                    <tr>
                        <td rowspan="2" class="text-nowrap">*公司名稱 <br>
                            Company Name
                        </td>
                        <td>中文名稱 Chinese Name

                            <span
                                class="text-primary"><?php echo get_field('company_name_chinese')? get_field('company_name_chinese'):'<span class="opacity-0">empty</span>';?></span>
                        </td>
                    </tr>
                    <tr>


                        <td>英文名稱 English Name <span
                                class="text-primary"><?php echo get_field('company_name_chinese')? get_field('company_name_chinese'):'<span class="opacity-0">empty</span>';?></span>


                        </td>
                    </tr>

                    <tr>
                        <td class="fit  text-nowrap">*公司秘書更改日期 <br>
                            The date of changing Company Secretary
                        </td>
                        <td> <span
                                class="text-primary"><?php echo get_field('date_of_changing_company_secretary')? get_field('date_of_changing_company_secretary'):'<span class="opacity-0">empty</span>';?></span>
                        </td>
                    </tr>




                </table>

                <table class="form-table mt-0 mb-0">
                    <tr>
                        <td colspan="2" class="text-center orange-yellow-bg fw-bold">

                            *申請所需之文件 Required Documents
                            <div class="small">(請上載下列文件 Please upload the following documents)
                            </div>


                        </td>
                    </tr>
                    <tr>
                        <td>1. 商業登記証(副本) (BR); 周年申報表(副本) (NAR1) / 法團成立表格 <br>
                            (NNC1); 公司證書 (CI); 公司章程 (AA)*
                            <br>
                            <?php //echo get_field('upload_file_1')['url'];?>
                            <?php //echo get_field('upload_file_1'); //echo wp_get_attachment_url(get_field('upload_file_1'));?>
                        </td>
                        <td>2. 有效之身份證 / 護照副本 及 3 個月內之住址證明 <br>
                            All member’s ID/passport copy and address proof within 3 months <br>
                            <?php //echo get_field('upload_file_2')['url'];?>

                            <?php //echo  wp_get_attachment_url(get_field('upload_file_2'));?>
                        </td>
                    </tr>
                </table>

                <table class="form-table mt-0 mb-0">
                    <tr>
                        <td colspan="2" class="text-center orange-yellow-bg fw-bold">

                            附加詳情 Further Information


                        </td>

                    </tr>
                    <tr>
                        <td colspan="2">上一個年度至今是否有任何股份變動或成員資料變更? <br> Is there any Shares Transfer or Information change
                            of
                            the
                            Company
                            Members during the past annual year?

                        </td>
                    </tr>
                    <tr>
                        <td>*變動詳情 <br>

                            Details of changes

                        </td>
                        <td>
                            <?php echo get_field('details_of_changes')  =='沒有 No' ? '<span class="text-primary">☑</span>':'☐';  ?>
                            沒有 No <br>
                            <?php echo get_field('details_of_changes')  =='更改公司名稱 [NNC2] Change of Company Name' ? '<span class="text-primary">☑</span>':'☐';  ?>
                            更改公司名稱 [NNC2] Change of Company Name<br>
                            <?php echo get_field('details_of_changes')  =='委任 / 辭任董事或公司秘書 [ND2A / ND4] Change / Resignation of Company Director(s) / Secretary' ? '<span class="text-primary">☑</span>':'☐';  ?>
                            委任 / 辭任董事或公司秘書 [ND2A / ND4] Change / Resignation of Company Director(s) / Secretary<br>
                            <?php echo get_field('details_of_changes')  =='股權變動 Shares Transfer' ? '<span class="text-primary">☑</span>':'☐';  ?>
                            股權變動 Shares Transfer<br>
                            <?php echo get_field('details_of_changes')  =='更改註冊地址 [NR1] Change of Registered Address' ? '<span class="text-primary">☑</span>':'☐';  ?>
                            更改註冊地址 [NR1] Change of Registered Address<br>
                            <?php echo get_field('details_of_changes')  =='更改董事或公司秘書資料 [ND2B] Change of Information of Company Director(s) / Secretary' ? '<span class="text-primary">☑</span>':'☐';  ?>
                            更改董事或公司秘書資料 [ND2B] Change of Information of Company Director(s) / Secretary<br>
                            <?php echo get_field('details_of_changes')  =='增加註冊資本 [NSC1] Return of Allotment' ? '<span class="text-primary">☑</span>':'☐';  ?>
                            增加註冊資本 [NSC1] Return of Allotment<br>
                            <?php echo get_field('details_of_changes')  =='登記册及公司紀錄備存地點通知書 Notice of Location of Registers and Company Records' ? '<span class="text-primary">☑</span>':'☐';  ?>
                            登記册及公司紀錄備存地點通知書 Notice of Location of Registers and Company Records<br>
                            <?php echo get_field('details_of_changes_others')  ? '<span class="text-primary">☑</span>':'☐';  ?>
                            其他 Others:
                            <?php echo '<span class="text-primary">'.get_field('details_of_changes_others') ? get_field('details_of_changes_others') :''.'</span>'?>

                        </td>
                    </tr>
                    <tr>
                        <td>備註 <br>

                            Remarks
                        </td>
                        <td>
                            <span
                                class="text-primary"><?php echo get_field('remarks')?get_field('remarks'):'<span class="opacity-0">empty</span>';?></span>


                        </td>
                    </tr>
                </table>

                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>

                <table class="form-table mt-0">
                    <tr>
                        <td colspan="4" class="text-center orange-yellow-bg fw-bold">服務計劃資料 Service Plan Information

                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="mb-2">
                                <p><b class="d-block text-center">Plan A (HK$1,400)
                                        <?php echo in_array("plan A", get_field('service_plan_information')) ? '<span class="text-primary">☑</span>' :'☐'; ?>
                                    </b>

                                </p>
                                <ul class="m-0 mt-2 p-0 ps-4">
                                    <li class="ls1">擔任法定公司秘書 Act as Company Secretary</li>
                                    <li class="ls1">準備及遞交週年申報表 Prepare and Submit Annual Return</li>
                                    <li class="ls1">協助續辦商業登記證 Renew the Business Registration Certificate</li>
                                    <li class="ls1">對公司註冊署及稅局信提供專業意見 Provide professional opinions for CR and IRD’s
                                        letter
                                    </li>
                                    <li class="ls1">更改公司註冊地址資料 Change of Registered Office Address</li>
                                    <li class="ls1">準備及遞交任免董事資料 Appointment / Resignation / Change of Director</li>
                                    <li class="ls1">準備及遞交任免秘書資料 Appointment / Resignation / Change of Secretary</li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="mb-2">
                                <p><b class="d-block text-center">Plan B (HK$2,200)
                                        <?php echo in_array("plan B", get_field('service_plan_information')) ? '<span class="text-primary">☑</span>' :'☐'; ?></b>

                                </p>
                                <ul class="m-0 mt-2 p-0 ps-4">
                                    <li class="ls1">擔任法定公司秘書 Act as Company Secretary</li>
                                    <li class="ls1">準備及遞交週年申報表 Prepare and Submit Annual Return</li>
                                    <li class="ls1">協助續辦商業登記證 Renew the Business Registration Certificate</li>
                                    <li class="ls1">對公司註冊署及稅局信提供專業意見 Provide professional opinions for CR and IRD’s
                                        letter
                                    </li>
                                    <li class="ls1">更改公司註冊地址資料 Change of Registered Office Address</li>
                                    <li class="ls1">準備及遞交任免董事資料 Appointment / Resignation / Change of Director</li>
                                    <li class="ls1">準備及遞交任免秘書資料 Appointment / Resignation / Change of Secretary</li>
                                    <li class="">更改董事個人資料 Change of Personal Particulars of Director</li>
                                    <li class="">業務性質變更 Change of Company Business Nature</li>
                                    <li class="">準備及保存重要控制人登記册 Prepare and keep record of Significant Controllers
                                        Register
                                    </li>
                                    <li class="">宣布及登記公司處於不活動狀態 Declare Dormant Business</li>
                                    <li class="">準備及保存董事、股東及公司秘書登記册 Prepare and keep record of Register of Directors,
                                        shareholders</li>
                                    <li class="">and company secretaries</li>
                                    <li class="">準備及保存股票證 Prepare and keep record of stock certificate</li>
                                    <li class="">增加公司註冊股本 Increase of Capital</li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="mb-2">
                                <p><b class=" d-block text-center">Plan C (HK$3,000)
                                        <?php echo in_array("plan C", get_field('service_plan_information')) ? '<span class="text-primary">☑</span>' :'☐'; ?>
                                    </b>
                                </p>
                                <ul class="m-0 mt-2 p-0 ps-4">
                                    <li class="ls1">擔任法定公司秘書 Act as Company Secretary</li>
                                    <li class="ls1">準備及遞交週年申報表 Prepare and Submit Annual Return</li>
                                    <li class="ls1">協助續辦商業登記證 Renew the Business Registration Certificate</li>
                                    <li class="ls1">對公司註冊署及稅局信提供專業意見 Provide professional opinions for CR and IRD’s
                                        letter
                                    </li>
                                    <li class="ls1">更改公司註冊地址資料 Change of Registered Office Address</li>
                                    <li class="ls1">準備及遞交任免董事資料 Appointment / Resignation / Change of Director</li>
                                    <li class="ls1">準備及遞交任免秘書資料 Appointment / Resignation / Change of Secretary</li>
                                    <li class="">更改董事個人資料 Change of Personal Particulars of Director</li>
                                    <li class="">業務性質變更 Change of Company Business Nature</li>
                                    <li class="">準備及保存重要控制人登記册 Prepare and keep record of Significant Controllers
                                        Register
                                    </li>
                                    <li class="">宣布及登記公司處於不活動狀態 Declare Dormant Business</li>
                                    <li class="">準備及保存董事、股東及公司秘書登記册 Prepare and keep record of Register of Directors,
                                        shareholders and company secretaries</li>
                                    <li class="">準備及保存股票證 Prepare and keep record of stock certificate</li>
                                    <li class="">增加公司註冊股本 Increase of Capital</li>
                                    <li class="ls3">分配股份 Allotment of Shares</li>
                                    <li class="ls3">申請分行 Register Branch</li>
                                    <li class="ls3">年度股東大會Annual General Meeting</li>
                                    <li class="ls3">更改公司或分行名稱 Change of Company / Branch Name</li>
                                    <li class="ls3">股份轉讓 Transfer of Shares (不包括印花稅 stamp duty fee is not included)</li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                </table>

                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>

                <table class="form-table mt-0 mb-0">
                    <tr>
                        <td colspan="4" class="text-center orange-yellow-bg fw-bold">附加服務 Additional Services

                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="text-start">
                                <span
                                    class="text-primary"><?php echo count(get_field('virtual_office')) >0 ? '<span class="text-primary">☑</span>' : '☐'; ?></span>
                                虛擬辦工室 Virtual Office
                            </div>


                            <table class="form-table mt-0 mb-0">
                                <tr>
                                    <td>尖沙咀 Tsim Sha Tsui

                                    </td>
                                    <td>荔枝角 Lai Chi Kok

                                    </td>
                                    <td>觀塘 Kwun Tong

                                    </td>
                                </tr>
                                <tr>
                                    <td class="fit">
                                        <div class="">
                                            <?php echo in_array("tst-HK1600-year", get_field('virtual_office')) ? '<span class="text-primary">☑</span>' :'☐'; ?>
                                            HK$1,600/year
                                        </div>
                                        <ul class="m-0 ps-4">
                                            <li class="ls1">註冊公司地址</li>
                                            <li class="ls1">信件包裹代收</li>
                                            <li class="ls1">稅局郵件轉寄</li>
                                            <li class="ls1">製作公司水牌</li>
                                            <li class="ls1">每月轉寄郵件及包裹(包首1KG 20x20x20cm)</li>
                                            <li class="ls1">郵件到取</li>
                                            <li class="ls1">更改商業登記及公司註冊處地址</li>
                                            <li class="ls1">郵件電子掃描</li>
                                        </ul>

                                    </td>
                                    <td class="fit">
                                        <div class="">
                                            <?php echo in_array("lck-HK950-year", get_field('virtual_office')) ? '<span class="text-primary">☑</span>' :'☐'; ?>
                                            <label class="-label" for="lck-HK950-year"> HK$950/year </label>
                                        </div>
                                        <ul class="m-0 ps-4">
                                            <li class="ls1">註冊公司地址</li>
                                            <li class="ls1">信件包裹代收</li>
                                            <li class="ls1">稅局郵件轉寄 (按要求)</li>
                                            <li class="ls1">製作公司水牌</li>
                                            <li class="ls1">每月轉寄郵件</li>
                                            <li class="ls1">郵件到取</li>
                                            <li class="ls1">更改商業登記及公司註冊處地址</li>
                                        </ul>


                                    </td>


                                    <td class="fit">

                                        <div class="">
                                            <?php echo in_array("kt-HK900-year", get_field('virtual_office')) ? '<span class="text-primary">☑</span>' :'☐'; ?>
                                            <label class="-label" for="kt-HK900-year"> HK$900/year </label>
                                        </div>
                                        <ul class="m-0 ps-4">
                                            <li class="ls1">註冊公司地址</li>
                                            <li class="ls1">信件代收</li>
                                            <li class="ls1">每月一次郵件轉寄 （註：不設到取服務）</li>
                                            <li class="ls1">更改商業登記及公司註冊處地址</li>
                                        </ul>

                                    </td>
                                </tr>
                                <tr>
                                    <td class="fit">

                                        <div class="">
                                            <?php echo in_array("tst-HK4000-year", get_field('virtual_office')) ? '<span class="text-primary">☑</span>' :'☐'; ?>
                                            <label class="form-check-label" for="tst-HK4000-year"> HK$4,000/year
                                            </label>
                                        </div>
                                        <ul class="m-0 ps-4">
                                            <li class="ls1">註冊公司地址</li>
                                            <li class="ls1">信件包裹代收</li>
                                            <li class="ls1">稅局郵件轉寄</li>
                                            <li class="ls1">製作公司水牌</li>
                                            <li class="ls1">每月轉寄郵件/包裹(包首1KG 20x20x20cm)</li>
                                            <li class="ls1">郵件到取</li>
                                            <li class="ls1">更改商業登記及公司註冊處地址</li>
                                            <li class="ls1">郵件電子掃描</li>
                                            <li class="ls2">辦公室電話代接</li>
                                            <li class="ls2">稅局文件代處理及信件代開</li>
                                            <li class="ls2">準備及保存重要控制人登記册</li>
                                        </ul>
                                    </td>
                                    <td class="fit">
                                        <div class="">
                                            <?php echo in_array("lck-HK1500-year", get_field('virtual_office')) ? '<span class="text-primary">☑</span>' :'☐'; ?>
                                            <label class="-label" for="lck-HK1500-year"> HK$1,500/year </label>
                                        </div>
                                        <ul class="m-0 ps-4">
                                            <li class="ls1">註冊公司地址</li>
                                            <li class="ls1">信件包裹代收</li>
                                            <li class="ls1">稅局郵件轉寄</li>
                                            <li class="ls1">製作公司水牌</li>
                                            <li class="ls1">每月轉寄郵件及包裹(包首1KG 20x20x20cm)</li>
                                            <li class="ls1">郵件到取</li>
                                            <li class="ls1">更改商業登記及公司註冊處地址</li>
                                            <li class="ls2">郵件電子掃描</li>
                                            <li class="ls2">每月一次會議室出租</li>
                                            <li class="ls2">辦公室電話代接</li>
                                        </ul>

                                    </td>
                                    <td class="fit">

                                    </td>
                                </tr>
                                <tr>
                                    <td class="fit">
                                        <div class="">
                                            <?php echo in_array("tst-HK12000-year", get_field('virtual_office')) ? '<span class="text-primary">☑</span>' :'☐'; ?>
                                            <label class="-label" for="tst-HK12000-year"> HK$12,000/year </label>
                                        </div>
                                        <ul class="m-0 ps-4">
                                            <li class="ls1">註冊公司地址</li>
                                            <li class="ls1">信件包裹代收</li>
                                            <li class="ls1">稅局郵件轉寄</li>
                                            <li class="ls1">製作公司水牌</li>
                                            <li class="ls1">每月轉寄郵件及包裹(包首1KG 20x20x20cm)</li>
                                            <li class="ls1">郵件到取</li>
                                            <li class="ls1">更改商業登記及公司註冊處地址</li>
                                            <li class="ls1">郵件電子掃描</li>
                                            <li class="ls2">辦公室電話代接</li>
                                            <li class="ls2">稅局文件代處理及信件代開</li>
                                            <li class="ls2">準備及保存重要控制人登記册</li>
                                            <li class="ls3">每月三次會議室出租</li>
                                        </ul>
                                    </td>
                                    <td class="fit">

                                    </td>
                                    <td class="fit">

                                    </td>
                                </tr>
                            </table>


                        </td>
                    </tr>
                    <tr>
                        <td>

                            <?php echo get_field('deregistration_of_limited_company') ? '<span class="text-primary">☑</span>':'☐';  ?>
                            撤銷公司(港幣$1,500加政府費用) <br>
                            Deregistration of Limited Company (HK$1,500 plus government charges)


                        </td>
                    </tr>
                    <tr>
                        <td><?php echo get_field('others') ? '<span class="text-primary">☑</span>':'☐';  ?> 其他 Others
                            請註明
                            please specify:
                            <?php echo get_field('others') ? '<span class="text-primary">'.get_field('others').'</span>':'____________________________________';  ?>

                        </td>
                    </tr>
                </table>

                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>

                <table class="form-table mt-0 mb-0">

                    <tr>
                        <td class="text-center orange-yellow-bg fw-bold">條款及細則 Terms and Conditions

                        </td>
                    </tr>
                    <tr>
                        <td>
                            <u> 服務條款 MAIN TERMS</u> <br>
                            <u> *適用於虛擬辦工室客戶Applicable for Virtual Office Service</u>

                            <br>
                            1 本申請表由算數秘書有限公司（“本公司”）提供，並由公司秘書/虛擬辦公室服務計畫申請人（“客戶”）同意，雙方共同履行申請表內所載的條款及細則。
                            This application form is offered by CountAudit Secretarial Limited and accepted by the
                            Company Secretarial Service / Virtual Office Service  Applicants (the “Client”), both
                            executing the terms and conditions started in this application form.
                            <br> <br>

                            2 客戶須於服務到期日一個月前與本公司書面提出續約或中止服務，否則會遞交政府文件辭任公司秘書。
                            Client are required to renew / terminate the service with CountAudit Secretarial Limited 1
                            month
                            before the expiry date of the service period. Otherwise, the resignation form of company
                            secretary will be submitted to Companies Registry.  <br><br>

                            3 客戶如自行更改過公司資料，包括及不限於公司名稱、股權變動等，必須於周年日前   7   
                            個工作天將相關資料以電郵通知本公司，如果因客戶的遺漏而導致周年申報表資料錯誤，客戶需另外支付額外費用，並可能需要支付遲交罰款。 
                            If there is any Shares Transfer or Information Change of the Company Members during the past
                            Annual year. Client must send the related information and documents to CountAudit
                            Secretarial
                            Limited 7 days prior to the anniversary of the date of the company’s incorporation of that
                            year.
                            Client would be responsible if there is any missing of providing accurate information for
                            preparing the Annual Return, and have to pay the additional fees for re-doing the Annual
                            Return,
                            the Client would also be responsible for paying the late charge / penalty (if any) due to
                            late
                            submission. <br> <br>
                            4 客戶如需要簽署周年申報表或相關文件，必須將簽妥的文件正本於該年中的周年日後的    30   
                            日內寄回本公司以確保有足夠時間安排提交文件及費用，如果因遲交而導致任何罰款，客戶需要自行承擔。
                            If Client has to sign the Annual Return, the signed documents must be returned to CountAudit
                            Secretarial Limited within 30 days after the anniversary of the date of the company’s
                            incorporation in that year, to ensure CountAudit Secretarial Limited has sufficient time to
                            arrange submission of the documents. If there is any late charge / penalty due to late
                            submission, the Client should hold full responsibilities.  <br><br>
                            5 *客戶知悉並同意本申請表中沒有賦予客戶佔用或使用任何本虛擬辦公室服務所列位址之辦公室、設備或設施的權力。
                            The Client understands and agrees that they will have no right to occupy and access any part
                            of
                            the premises, and any equipment or facilities within the premise of the virtual office
                            address
                            under this application form. <br> <br>

                            6
                            *客戶不能在服務生效前或終止後，公開或使用本公司提供的位址、電話號碼以及傳真號碼。客戶也不能以其他未向本公司登記的公司和用戶的名義，公開或使用本公司提供的位址、電話號碼以及傳真號碼。
                            The Client shall not publish or use the provided address, telephone number and fax number
                            provided by CountAudit Secretarial Limited before the commencement of the service or after
                            the
                            termination of service. The Client shall not allow any company or user not registered with
                            CountAudit Secretarial Limited to publish or use the provided address, telephone number and
                            fax
                            number provided by CountAudit Secretarial Limited.
                            <br>
                            <br>
                            7
                            *本公司只為申請人之公司提供虛擬辦公室服務，故不會代收其聯絡人之私人信件或包裹。如有此情況，本公司將收取HKD100手續費，並且本公司不承擔任何因此引致之損失（包括但不限於信件或包裹丟失）。
                            The virtual office service is provided to the applicant only, i.e.the Company registered
                            with
                            us. Thus, CountAudit Secretarial Limited will not accept the mails or parcels addressed to
                            the
                            other parties (including but not limited to the company contact persons) (“unauthorized
                            mails
                            and parcels”). If any unauthorized mails or parcels are sent to CountAudit Secretarial
                            Limited,
                            CountAudit Secretarial Limited will charge HKD100 handling fee. Moreover, CountAudit
                            Secretarial
                            Limited will not be responsible for any loss incurred resulted from this matter (including
                            but
                            not limited to the loss of mail or parcels).
                            <br> <br>
                            8
                            *在服務生效前及或終止期間，或任何未經許可的情況下，本公司有權拒絕收取客戶的郵件、包裹、電郵或傳真，及拒絕處理客戶專線電話的來電或傳真，並且不會通知以上各種項目的傳送。在服務終止的30天后，客戶遺下的任何郵件、包裹、傳真和物件，本公司有權代為處理。

                            Before the commencement of service, during suspension period, or any situation without the
                            prior
                            authorization, CountAudit Secretarial Limited reserves the right to reject any mails,
                            parcels,
                            faxes or any other objects sent to the Client and will not handle all calls from the
                            assigned
                            telephone/fax numbers. CountAudit Secretarial Limited is not responsible to notify the
                            Client of
                            such delivery. 30 days after the termination of service, any mail, parcels, fax or any other
                            objects sent to or left at any offices of CountAudit Secretarial Limited shall be at the
                            disposal of CountAudit Secretarial Limited at its absolute discretion.
                            <br>
                            <br>
                            9 *代收取客戶郵件及包裹 MAIL HANDING SERVICES
                            <br>
                            <br>
                            [1]
                            包裹的體積不應超過20釐米*20釐米*20釐米。如包裹超過20釐米*20釐米*20釐米，本公司將按HKD20/每天/每20釐米*20釐米*20釐米收取存放費，並且本公司有權拒收任何超出上述體積的包裹。
                            The volume of parcels shall not exceed 20cm*20cm*20cm.If the volume of parcels exceed
                            20cm*20cm*20cm, storage fee will be charged at HKD20/day/20cm*20cm*20cm.Moreover, CountAudit
                            Secretarial Limited reserves the right to refuse receiving mails and parcels exceeding the
                            above
                            stated size. <br>
                            <br>

                            [2] 客戶之體積不超過20釐米*20釐米*20釐米的包裹可以免費存放3天，3天後本公司將收取存放費(HKD20/每天/每件)
                            The storage of the parcel with its volume not exceeding 20cm*20cm*20cm will be free of
                            charge
                            for the first 3 days and HKD20/item/day will be charged afterwards.
                            <br>
                            <br>
                            [3] 本公司有權拒絕收任何危險或非法物件。 
                            CountAudit Secretarial Limited reserves the right to refuse receiving any dangerous or
                            illegal
                            items.
                            <br>
                            <br>
                            [4]
                            超逾30天不取，及不能聯絡者，本公司將自行處理寄存物，而不另行通知，並且不負任何責任，後果客戶自負。若客戶暫存的物件基於任何原因而被盜，遺失或損毀，本公司不須為此而負上任何責任。
                            Mails and parcels uncollected over 30 days, or if the Client is un-contactable, the mails
                            and
                            parcels shall be disposed of without any notice. CountAudit Secretarial Limited shall not be
                            responsible for any losses or any obligations. CountAudit Secretarial Limited shall not be
                            liable if the stored items are lost, being stolen or damaged due to any reason during the
                            storage period. 






                        </td>
                    </tr>
                </table>

                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>


                <table class="form-table mt-0 mb-0">

                    <tr>
                        <td>
                            10 *轉寄郵件及包裹服務 MAIL FORWARDING SERVICES <br>
                            若客戶需要轉寄郵件及包裹，需於服務申請時提出，或每次以電郵或書面形式通知本公司。本公司不會為轉寄郵件及包裹所引致的損失、被竊、被破壞、或任何災害，而作出任何賠償及負上任何責任。本公司每次將收取HKD80元手續費（不包轉寄郵件及包裹之郵寄費用）。
                            If mail forwarding services is required, the Client should state at the time of application.
                            Otherwise, the Client     should notice CountAudit Secretarial Limited by email or written
                            notice every time. CountAudit Secretarial Limited shall not be liable for any losses,
                            damages,
                            cost, claims and expenses of liabilities of whatever nature in mail forwarding. CountAudit
                            Secretarial Limited will charge HKD80 for handling charge (excluding mailing fee) of the
                            forward
                            mails and/or parcels.
                            <br>
                            <br>
                            11 *電話服務 CALL SERVICES <br> <br>

                            [1]  所有來電轉駁服務只適用於本地電話號碼。  <br><br>
                             All call forwarding services apply to local telephone number only.
                            [2] 若客戶須更改系統直接轉駁之指定號碼，須於生效期前2個工作天向本公司以書面形式通知。 
                            If the designated number direct transferred by system is to be changed, a formal written
                            notification should be submitted to CountAudit Secretarial Limited on or before 2 working
                            days
                            prior to the effective date.<br><br>
                            [3] 為保障客戶之利益及私隱，所有來電訊息只會儲存48小時。 
                            For protecting the Client’s interest and privacy, all messages from callers will be reserved
                            48
                            hours only.<br><br>
                            [4] 專線電話服務只限代接後留言及轉駁電話，而不包括任何產品查詢，報價及客戶服務的工作。
                            The telephone services provided by CountAudit Secretarial Limited can be only used for
                            receiving
                            calls, leaving messages and transferring calls on behalf of the Client, not including any
                            services related to product inquires, making quotations and customer services. <br> <br>
                            <br><br>
                            12 若有本公司不能控制的事件（包括客戶的作為或不作為），影響本公司按原定計劃履行本服務的能力，本公司或會酌加服務費用。
                            For CountAudit Secretarial Limited uncontrollable events, including Client act or omission
                            to
                            act, which affects CountAudit Secretarial Limited's ability to perform the service,
                            CountAudit
                            Secretarial Limited reserves the right to charge extra fee. 
                            <br><br>
                            13 客戶應於賬單上列明的到期日前繳交有關款項，否則本公司有權終止其服務而不作另行通知。同時客戶有責任於到期日前確保已繳交之費用已由本公司收取並確認。 
                            The Client shall settle the fees before the due date specified on the relevant invoices,
                            otherwise, CountAudit Secretarial Limited has right to suspend the services to the Client.
                            The
                            Client has the responsibility to ensure that their payments are received and identified by
                            CountAudit Secretarial Limited before the due date specified on the relevant invoices.
                            <br><br>
                            14 若客戶要求重啟因延遲繳款或欠款被終止的服務，本公司將會向客戶收取於終止期間的相關服務費用。 
                            If Client requests to reactivate the services which has been suspended by CountAudit
                            Secretarial
                            Limited due to late payment or overdue situation, CountAudit Secretarial Limited shall
                            charge
                            the Client the service fees for the suspended period.
                            <br><br>
                            15 客戶如需更改服務指令、內容，需以書面形式通知本公司，及繳付相關費用。
                            If the Client requires to amend service instructions, contents, a written notice is required
                            to
                            provide to CountAudit Secretarial Limited, and the related service fees shall be applied.
                            <br><br>
                            16 客戶或客戶代表所提供的一切資訊（“客戶資訊”）均為準確與完整的。本公司將依賴所獲提供的客戶資訊，本公司不會對客戶資訊進行任何評估或核證，也不會對任何錯誤資訊所引致之損失負責。
                            The information provided by the Client (“Client Information”) must be accurate and complete.
                            CountAudit Secretarial Limited will depend on what the Client provide, and CountAudit
                            Secretarial Limited shall not do any evaluation or certification about the Client
                            Information
                            and shall not be responsible for any loss suffered due to the inaccurate or incomplete
                            information.
                            <br><br>
                            17 就以下情況，本公司有權終止服務而不作任何通知；同時亦無須為停止提供服務，而負上法律責任或承擔任何被索償的後果。
                            Under the following circumstances, CountAudit Secretarial Limited reserves all rights to
                            terminate services without any prior notice. CountAudit Secretarial Limited shall bear no
                            legal
                            responsibilities nor shall be liable for any claims or compensation for discontinuing
                            services.
                            <br><br>


                            [1]   客戶未能按時繳交費用，包括服務費、手續費或轉寄郵件費用；或未能及時更新商業登記；
                            The Client has failed to settle any service fees, handing fees or reimbursements of postage,
                            or
                            to renew business registration on time;
                            <br><br> [2] 客戶涉嫌進行或涉及任何非法、違例或詐騙活動；
                            In suspicion of the Client is involving or carrying out a fraud and any illegal or improper
                            activities;
                            <br><br> [3] 客戶涉嫌利用本公司提供的服務作展銷會或招聘會等活動；
                            In suspicion of the Client is using provided services to hold any promotional sales or
                            public
                            recruitment events;
                            <br><br> [4] 客戶涉嫌在未經本公司許可下，把服務轉移或分配至任何第三者使用。
                            In suspicion of the Client is transferring or assigning any or part of the services to any
                            other
                            parties, without the prior authorization from CountAudit Secretarial Limited.
                            <br><br>
                            18 如有任何爭議，本公司將保留最終決定權。
                            Should any disputes arise, the decision of CountAudit Secretarial Limited shall be final.

                        </td>
                    </tr>
                </table>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>

                <table class="form-table mt-0">
                    <tr>
                        <td>責任範圍 LIMITATION OF LIABILITY <br><br>

                            19 客戶已知悉因語言、文字或電子通訊的限制，如服務受阻、延誤或中斷、或任何錯漏，本公司的責任只限於其服務受影響的服務費，本公司不會因上述原因而負上其他責任。
                            The Client acknowledges that due to the imperfect nature of verbal, written and electronic
                            communications, CountAudit Secretarial Limited is not responsible for any failure to render
                            any
                            service, or any delay or interruption of any service, the sole obligation is limited to the
                            service charges during the affected period. <br><br>

                            20 客戶同意不會因服務受阻、延誤或中斷、或任何錯漏而引致的直接或間接損失(包括業務及收益之損失)而提出索償。
                            The Client agrees to waive, and agrees not to make, any claims for damages, direct or
                            consequential, including with respect to lost business or profits, arising out any service,
                            any
                            error or omission with respect there to, or any delay or interruption of services.
                            <br><br>
                            協議期限與終止 SERVICE PERIOD AND TERMINATION
                            <br><br>

                            21 本次服務由服務生效日開始計算，其後服務期會按照客戶每次繳付的服務週期而延續，而本申請表之內容亦會於新延續的服務期內適用。
                            The service period starts from the effective date of the service plan and the contract
                            period
                            will be extended according to the period covered by each payment from the Client. The
                            content of
                            this application form will be applicable within the extended contract period.
                            <br><br>

                            22 未經本公司許可下，客戶不能在首張合約期之結束日期終止服務。
                            The Client is not allowed to terminate the service before the end date of the first contract
                            period unless prior approval from CountAudit Secretarial Limited is obtained.
                            <br><br>

                            23 提早終止服務並不會退回已繳交之服務費用。
                            Service fee will not be refunded for early termination.
                            <br><br>
                            資料保護DATE PROTECTION
                            <br><br>
                            24 本公司可收集、使用、傳輸、儲存或以其他方式處理（統稱“處理”）可能與個別人士有關的客戶資訊（“個人資料”）。本公司處理個人資料時，將遵照適用的法律及專業守則。
                            The Company may collect, use, transfer, store or otherwise process (collectively referred to
                            as
                            the "processing") the information provided by the Clients, which may include personal
                            information. The processing of those data will be in compliance with applicable laws and
                            professional codes of practice.
                            <br><br>

                            25 客戶同意在本公司在為客戶提供服務的情況下向第三者提供與客戶有關之資料。本公司亦將要求代本公司處理個人資料的任何服務供應商，遵守該等規定。
                            The Client agrees CountAudit Secretarial Limited to provide customer-related information to
                            third parties for services to be provided to the Client by CountAudit Secretarial Limited.
                            CountAudit Secretarial Limited will also request any third party service providers to be in
                            compliance with applicable laws and professional codes of practice.
                            <br><br>

                            26 客戶同意接收本公司推廣優惠之資訊，如客戶日後不欲繼續接收有關本公司推廣資訊，可隨時通知本公司停止有關資訊之發送。
                            The Client agrees to receive promotional information from CountAudit Secretarial Limited.
                            Should
                            the Client determines not to continue receiving such information, the Client can inform
                            CountAudit Secretarial Limited and cease the receipt of the promotional information.
                            <br><br>

                            不可抗力FORCE MAJEURE <br><br>


                            27 若因客戶及本公司合理控制以外的情況而出現違反本申請表的情況，客戶及本公司均無須負責（付款責任除外）。
                            The Client and CountAudit Secretarial Limited shall not be liable (except payment
                            obligations)
                            for any violation of the application form due to circumstances beyond the reasonable control
                            of
                            the Client and CountAudit Secretarial Limited.
                            <br><br>

                            適用法律與爭議解決APPLICABLE LAW AND DISPUTE RESOLUTION
                            <br><br>

                            28 本申請表受香港特別行政區法律管轄，且應當依照香港特別行政區法律進行解釋。雙方因本申請表而發生的爭議，應友好協商解決。經友好協商不成的會提交香港國際仲裁中心進行仲裁。
                            This application form shall be governed by and construed in accordance with the Laws of the
                            Hong
                            Kong Special Administrative Region. Both parties by this application form of disputes shall
                            be
                            settled through friendly consultations. If the dispute cannot be resolved, it will be
                            settled by
                            Hong Kong International Arbitration Center for arbitration.
                            <br><br>

                            其他事項OTHER BUSINESS
                            <br><br>

                            29 本申請表構成雙方就本服務及本申請表所涵蓋其他事項的全部協定，並取代先前一切有關的協議、諒解、聲明。
                            The Application Form constitutes the entire agreement of all matters covered regarding the
                            service and supersede the previous all relevant agreements, understandings and declarations.
                            <br><br>

                            30 雙方可用電子方式簽署本申請表（及其修訂），各方可在本申請表的不同副本上簽署。本申請表或任何其附件的修訂，必須經雙方書面同意。
                            Both sides can electronically sign the application form (and its amendments), the parties
                            sign
                            on different copies of the application form. Any amendments on the Application Form or on
                            its
                            Appendix(es) must be agreed by both parties in writing.
                            <br><br>

                            31 本申請表的任何條文（不論全部或部分）若被認定為不合法、無效或因其他理由不能執行，本申請表其他條文仍具有十足效力。
                            If any of the provisions of the Application Form (whether in whole or in part) identified as
                            illegal, void, or for any other reason, unable to perform, the other provisions remain in
                            full
                            force and in effect.
                            <br><br>

                            32 本公司不承擔任何與本服務相關的客戶的管理層責任。
                            CountAudit Secretarial Limited does not undertake any relevant client management
                            responsibility.
                            <br><br>

                            33 現有客戶續約本公司服務最少6個月起。
                            Existing Customers renewal to CountAudit Secretarial Limited with not less  than 6-month
                            commitment period and agree to the relevant terms and conditions.


                        </td>
                    </tr>
                </table>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <table class="form-table mt-0">
                    <tr>
                        <td class="text-center orange-yellow-bg fw-bold">付款方法 Payment Methods

                        </td>

                    </tr>
                    <tr>
                        <td>

                            客戶可以用以下途徑繳付款項 Client can settle the payment by following methods <br><br>
                            (I)親身付款 Pay in person<br>
                            (II)存入現金或轉帳至匯豐銀行(戶口號碼: 747-122000-838)<br>
                            Direct deposit into HSBC (Account No.: 747-122000-838)<br>
                            (III)劃線支票抬頭「CountAudit」至以下地址: 九龍荔枝角永康街18號永康中心11樓C室<br>
                            Crossed cheque payable to “CountAudit” to following address: Flat C, 11/F., Wing Hong
                            Centre, 18
                            Wing Hong Street, Lai Chi Kok, Kowloon<br>
                            (IV)轉數快 (轉數快識別號碼: 0818617) FPS Identifier: 0818617<br>
                            (V)網上連結支付Online Payment: https://app.cardup.hk/collect/pay/countaudit (網上付款系統或設相關手續費)<br>
                            #付款後請提供入數紙/截圖作紀錄



                        </td>
                    </tr>
                </table>

                <table class="form-table mt-0">
                    <tr>
                        <td class="text-center orange-yellow-bg fw-bold">聲明 Declaration


                        </td>

                    </tr>
                    <tr>
                        <td>



                            本人茲證實上述資料確實無誤，並已知悉及同意以上所有條款。 <br>
                            I have read and agreed with all the terms and conditions above.<br>
                            *本人清楚知道須於每年於公司成立為法團之日在該年中的周年日後的 42 日內 (訂明時限)，向公司註冊處處長交付周年申報表登記。逾期罰款及相關的法律責任會由本人 /
                            我司自行承擔。<br>
                            I acknowledge and understand every year annual return is required to be delivered to the
                            Registrar of Companies for registration within 42 days after the anniversary of the date of
                            the
                            company’s incorporation in that year (the prescribed time period) period), I/ my comp any
                            will
                            have responsibilities for all penalties and legal liability from late delivery. <br>
                            *（只適用於公司秘書服務 Applicable for Company Secretarial Services Only）



                            <table class="border-0 mt-5">
                                <tr>
                                    <td class="fit border-0">
                                        <div class="sign-line"></div>
                                        <div>
                                            客戶簽名 Applicant ‘s Signature</div>
                                    </td>
                                    <td class="fit border-0">
                                        <div class="sign-line"></div>

                                        <div>
                                            日期 Date</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="fit border-0 pt-4">
                                        <div class="sign-line"></div>

                                        <div>
                                            客戶姓名 Applicant’s Name
                                        </div>
                                    </td>
                                    <td class="fit border-0"></td>
                                </tr>
                            </table>

                        </td>
                    </tr>
                </table>


            </div>
        </div>
        <?php
     }
    ?>

        <?php
         if($_GET['f']=='ilaf')
         {

               // 4297
       
               $application_no = $_GET['aid'];
               $query_args = array(
                  'post_type' => 'incorp_limited_app',
                  'p' => $application_no,
              );
              $the_query = new WP_Query( $query_args );
              if ( $the_query->have_posts() ) {
                      $the_query->the_post();
              } else {
                  
              }
       
              

    ?>


        <div class="incorp-limited-app-form">
            <div class="print-form-container">
                <h2 class="text-center mt-4">
                    Limited Company Registration Application Form
                    <br>
                    香港有限公司註冊申請表
                    <div class="small mt-2">*為必須填寫項目 Required Fields
                    </div>

                </h2>

                <table class="form-table mt-3 mb-0">
                    <tr>
                        <td colspan="2" class="text-center orange-yellow-bg fw-bold">
                            申請人資料 Applicant Information


                        </td>
                    </tr>
                    <tr>
                        <td>申請人姓名 <br>
                            Applicant’s Name*
                        </td>
                        <td>
                            <span class="text-primary"> <?php echo get_field('name')?get_field('name'):'' ;?></span>
                        </td>
                    </tr>
                    <tr>
                        <td>聯絡電話 <br>
                            Phone Number *
                        </td>
                        <td> <span class="text-primary"> <?php echo get_field('tel')?get_field('tel'):'';?></span>
                        </td>
                    </tr>
                    <tr>
                        <td>電郵 <br>
                            Email *
                        </td>
                        <td> <span class="text-primary"> <?php echo get_field('email')?get_field('email'):'';?></span>
                        </td>
                    </tr>
                    <tr>
                        <td>選擇語言 <br>
                            Language *
                        </td>
                        <td>
                            <?php echo get_field('language')  =='中文 Chinese' ? '<span class="text-primary">☑</span>':'☐';  ?>
                            中文 Chinese
                            <?php echo get_field('language')  =='英文 English' ? '<span class="text-primary">☑</span>':'☐';  ?>
                            英文 English

                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            *上述申請人為賬單聯絡人 The above applicant is the billing contact person
                            <?php echo get_field('is_billing_contact_person')  =='yes' ? '<span class="text-primary">☑</span>':'☐';  ?>
                            是 Yes
                            <?php echo get_field('is_billing_contact_person')  =='no' ? '<span class="text-primary">☑</span>':'☐';  ?>
                            否 No <br>
                            如否，請提供賬單聯絡人資料 If No, please provide the information of the billing contact person <br>
                            <br>
                            姓名Name：<?php echo get_field('is_billing_contact_person')=='no' ? '<u class="text-primary">'.get_field('contact_person_name').'</u>' : '_____________________';?>
                            聯絡電話Phone
                            Number：<?php echo get_field('is_billing_contact_person')=='no' ? '<u class="text-primary">'.get_field('contact_person_phone_number').'</u>' : '_____________________';?>
                        </td>
                    </tr>
                </table>

                <table class="form-table mt-0 mb-0">
                    <tr>
                        <td colspan="4" class="text-center orange-yellow-bg fw-bold">公司資料 Company Information



                        </td>
                    </tr>
                    <tr>
                        <td rowspan="2" class="text-nowrap">*公司名稱 <br>
                            Company Name
                        </td>
                        <td>中文名稱 Chinese Name <span
                                class="text-primary"><?php echo get_field('company_name_chinese')?get_field('company_name_chinese'):'';?></span>
                        </td>
                    </tr>
                    <tr>


                        <td>英文名稱 English Name <span
                                class="text-primary"><?php echo get_field('company_name_english')?get_field('company_name_english'):'';?></span>

                        </td>
                    </tr>

                    <tr>
                        <td class="fit  text-nowrap">公司註冊地址 <br>
                            Registered Address

                        </td>
                        <td>

                            <?php echo get_field('use_countaudit_virtual_office') ? '<span class="text-primary">☑</span>':'☐';?>
                            選用算數秘書公司的虛擬辦公室服務 Use CountAudit Virtual Office Service <br>
                            (費用詳情請看第4頁 Please see details in page 4 below for the fees) <br> <br>

                            <?php echo get_field('use_countaudit_virtual_office')=='tst' ? '<span class="text-primary">☑</span>':'☐';?>
                            尖沙咀 Tsim Sha Tsui <br>
                            <?php echo get_field('use_countaudit_virtual_office')=='lck' ? '<span class="text-primary">☑</span>':'☐';?>
                            荔枝角 Lai Chi Kok <br>
                            <?php echo get_field('use_countaudit_virtual_office')=='kt' ? '<span class="text-primary">☑</span>':'☐';?>
                            觀塘 Kwun Tong <br>

                            <?php echo get_field('custom_address_as_registered_office') ? '<span class="text-primary">☑</span>':'☐'; ?>
                            以下列地址為公司註冊(英文)地址：Use the following address as registered office (English) address <br>
                            <?php echo get_field('custom_address_as_registered_office') ? '<u class="text-primary">'.get_field('custom_address_as_registered_office').'</u>' : '_____________________';?>





                        </td>
                    </tr>
                    <tr>
                        <td>業務性質 <br>
                            Business Nature *
                        </td>
                        <td>
                            <?php echo in_array("貿易 Trading", get_field('business_nature')) ? '<span class="text-primary">☑</span>' :'☐'; ?>
                            貿易 Trading
                            <?php echo get_field('business_service') ? '<span class="text-primary">☑</span>':'☐';?> 服務
                            Service:
                            <?php echo get_field('business_service') ? '<u class="text-primary">'.get_field('business_service').'</u>' : '_____________________';?>
                            <br>
                            <?php echo in_array("零售 Retail", get_field('business_nature')) ? '<span class="text-primary">☑</span>' :'☐'; ?>
                            零售 Retail
                            <?php echo in_array("製造 Manufacture", get_field('business_nature')) ? '<span class="text-primary">☑</span>' :'☐'; ?>
                            製造 Manufacture<br>
                            <?php echo in_array("顧問 Consultancy", get_field('business_nature')) ? '<span class="text-primary">☑</span>' :'☐'; ?>
                            顧問 Consultancy
                            <?php echo in_array("運輸 Transport", get_field('business_nature')) ? '<span class="text-primary">☑</span>' :'☐'; ?>
                            運輸 Transport<br>
                            <?php echo in_array("設計 Design", get_field('business_nature')) ? '<span class="text-primary">☑</span>' :'☐'; ?>
                            設計 Design
                            <?php echo in_array("資訊科技 IT", get_field('business_nature')) ? '<span class="text-primary">☑</span>' :'☐'; ?>
                            資訊科技 IT<br>
                            <?php echo in_array("推廣劃 Marketing", get_field('business_nature')) ? '<span class="text-primary">☑</span>' :'☐'; ?>
                            推廣劃 Marketing
                            <?php echo get_field('business_others') ? '<span class="text-primary">☑</span>':'☐';?> 其他
                            Others:
                            <?php echo get_field('business_others') ? '<u class="text-primary">'.get_field('business_others').'</u>' : '_____________________';?>


                        </td>
                    </tr>




                </table>

                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>

                <!-- shareholders_and_directors -->
                <?php
            if( have_rows('shareholders_and_directors') ){
                while( have_rows('shareholders_and_directors') ) { the_row();
                    // $sub_value = get_sub_field('sub_field');
                }
            }
            // echo count(get_field('shareholders_and_directors'));
            ?>
                <table class="form-table">
                    <tr>
                        <td colspan="4" class="text-center orange-yellow-bg fw-bold"> 股東及董事資料 Shareholder’s and
                            Director’s
                            Information
                        </td>
                    </tr>
                    <tr>
                        <td colspan="4">請連同所有董事及股東之身份證明及住宅地址副本一併遞交。Please also submit the ID/Passport copy and address
                            proof of every
                            director and shareholder. <br>
                            如股東或董事是公司，請提供NNC1/NAR1，CI，BR，公司所有董事及股東之身份證明及住宅地址副本。If the
                            Director or Shareholder is company, please also submit the NNCI / NAR1, CI, BR and
                            ID/Passport
                            copy and address proof of every director and shareholder.

                        </td>
                    </tr>
                    <?php

                $count_shareholders_and_directors=count(get_field('shareholders_and_directors'));
                $current_idx=1;
                for($i=1;$i<=4;$i++)
                {
                
                    if($i<$count_shareholders_and_directors)
                    {
                        have_rows('shareholders_and_directors');
                        the_row();
                        $applicant_name_chinese=get_sub_field('applicant_name_chinese');    
                        $applicant_name_english=get_sub_field('applicant_name_english');    
                        $applicant_id_passport_company_no=get_sub_field('applicant_id_passport_company_no');    
                        $percent_of_shares=get_sub_field('percent_of_shares');    
                        $residential_address=get_sub_field('residential_address'); 
                        $is_shareholder=in_array("股東 Shareholder", get_sub_field('applicant_position')) ? true:false;
                        $is_director=in_array("董事 Director", get_sub_field('applicant_position')) ? true:false;
                        $is_beneficial_owner=in_array("受益人 Beneficial Owner", get_sub_field('applicant_position')) ? true:false;

                        // $applicant_name_chinese='';
                        // $applicant_name_english='';    
                        // $applicant_id_passport_company_no='';    
                        // $percent_of_shares='';    
                        // $residential_address='';   
                        // $is_shareholder=false;
                        // $is_director=false;
                        // $is_beneficial_owner=false; 
                        
                    }
                    else
                    {
                        $applicant_name_chinese='';
                        $applicant_name_english='';    
                        $applicant_id_passport_company_no='';    
                        $percent_of_shares='';    
                        $residential_address='';    
                        $is_shareholder=false;
                        $is_director=false;
                        $is_beneficial_owner=false;
                    }
                   
                    
                    ?>
                    <tbody>
                        <tr>
                            <td class="fit"><?php echo $current_idx;?>. 申請人身份 <br>
                                Applicant’s Position *
                            </td>
                            <td class="fit" colspan="3">
                                <?php echo $is_shareholder ? '<span class="text-primary">☑</span>' :'☐';?> 股東
                                Shareholder
                                <?php echo $is_director ? '<span class="text-primary">☑</span>' :'☐';?> 董事 Director
                                <?php echo $is_beneficial_owner? '<span class="text-primary">☑</span>' :'☐';?> 受益人
                                Beneficial
                                Owner <br>

                                <div class="small"> 請選擇最少其中一項 Choose at least one</div>
                            </td>
                        </tr>
                        <tr>
                            <td class="fit">證件上名稱 <br>
                                Name on ID/Passport *
                            </td>
                            <td>中文 Chinese <span
                                    class="text-primary"><?php echo $applicant_name_chinese?$applicant_name_chinese:'<span class="opacity-0">empty</span>' ;?></span>
                            </td>
                            <td colspan="2">英文 English <span
                                    class="text-primary"><?php echo $applicant_name_english?$applicant_name_english:'<span class="opacity-0">empty</span>';?></span>

                            </td>
                        </tr>
                        <tr>
                            <td class="fit">身份證/護照/公司號碼 ID/Passport/Company No *

                            </td>
                            <td class="fit"><span
                                    class="text-primary"><?php echo $applicant_id_passport_company_no ? $applicant_id_passport_company_no : '<span class="opacity-0">empty</span>';?></span>
                            </td>
                            <td class="fit">持股比例 % of Shares *

                            </td>
                            <td class="fit"><span
                                    class="text-primary"><?php echo $percent_of_shares ? $percent_of_shares : '<span class="opacity-0">empty</span>';?></span>
                            </td>

                        </tr>
                        <tr>
                            <td colspan="4">住址 Residential Address * <span
                                    class="text-primary"><?php echo $residential_address ? $residential_address :'<span class="opacity-0">empty</span>';?></span>
                            </td>
                        </tr>
                    </tbody>
                    <?php
                $current_idx++;
                }
                ?>


                </table>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>

                <!--new page  -->
                <!-- additional page

-->
                <?php 
        //    (11 - 4) /5
           $additional_page = $count_shareholders_and_directors > 4 ? ceil(($count_shareholders_and_directors - 4)/5) :0;
                $additional_page=0;
            // echo  $additional_page;
            for($i=0;$i<$additional_page;$i++)
            {?>
                <div class="shareholder-page">
                    <div class="blank-area">- BLANK AREA -</div>
                    <div class="blank-area">- BLANK AREA -</div>
                    <div class="blank-area">- BLANK AREA -</div>
                    <div class="blank-area">- BLANK AREA -</div>

                    <div class="blank-area">- BLANK AREA -</div>
                    <div class="blank-area">- BLANK AREA -</div>
                    <div class="blank-area">- BLANK AREA -</div>
                    <div class="blank-area">- BLANK AREA -</div>
                    <table class="form-table">

                        <?php
                for($j=1;$j<=5;$j++)
                {
                
                    if($current_idx<$count_shareholders_and_directors)
                    {
                        have_rows('shareholders_and_directors');
                        the_row();
                        $applicant_name_chinese=get_sub_field('applicant_name_chinese');    
                        $applicant_name_english=get_sub_field('applicant_name_english');    
                        $applicant_id_passport_company_no=get_sub_field('applicant_id_passport_company_no');    
                        $percent_of_shares=get_sub_field('percent_of_shares');    
                        $residential_address=get_sub_field('residential_address'); 
                        $is_shareholder=in_array("股東 Shareholder", get_sub_field('applicant_position')) ? true:false;
                        $is_director=in_array("董事 Director", get_sub_field('applicant_position')) ? true:false;
                        $is_beneficial_owner=in_array("受益人 Beneficial Owner", get_sub_field('applicant_position')) ? true:false;
                        // $applicant_name_chinese='';
                        // $applicant_name_english='';    
                        // $applicant_id_passport_company_no='';    
                        // $percent_of_shares='';    
                        // $residential_address='';   
                        // $is_shareholder=false;
                        // $is_director=false;
                        // $is_beneficial_owner=false; 
                    }
                    else
                    {
                        $applicant_name_chinese='';
                        $applicant_name_english='';    
                        $applicant_id_passport_company_no='';    
                        $percent_of_shares='';    
                        $residential_address='';   
                        $is_shareholder=false;
                        $is_director=false;
                        $is_beneficial_owner=false; 
                    }
                   
                    
                    ?>
                        <tbody>
                            <tr>
                                <td class="fit"><?php echo $current_idx;?>. 申請人身份 <br>
                                    Applicant’s Position *
                                </td>
                                <td class="fit" colspan="3">
                                    <?php echo $is_shareholder ? '<span class="text-primary">☑</span>' :'☐';?> 股東
                                    Shareholder
                                    <?php echo $is_director ? '<span class="text-primary">☑</span>' :'☐';?> 董事 Director
                                    <?php echo $is_beneficial_owner? '<span class="text-primary">☑</span>' :'☐';?> 受益人
                                    Beneficial
                                    Owner <br>

                                    <div class="small"> 請選擇最少其中一項 Choose at least one</div>
                                </td>
                            </tr>
                            <tr>
                                <td class="fit">證件上名稱 <br>
                                    Name on ID/Passport *
                                </td>
                                <td>中文 Chinese <span
                                        class="text-primary"><?php echo $applicant_name_chinese ? $applicant_name_chinese :'<span class="opacity-0">empty</span>';?></span>
                                </td>
                                <td colspan="2">英文 English <span
                                        class="text-primary"><?php echo $applicant_name_english ? $applicant_name_english :'<span class="opacity-0">empty</span>';?></span>

                                </td>
                            </tr>
                            <tr>
                                <td class="fit">身份證/護照/公司號碼 ID/Passport/Company No *

                                </td>
                                <td class="fit"><span
                                        class="text-primary"><?php echo $applicant_id_passport_company_no ? $applicant_id_passport_company_no : '<span class="opacity-0">empty</span>';?></span>
                                </td>
                                <td class="fit">持股比例 % of Shares *

                                </td>
                                <td class="fit"><span
                                        class="text-primary"><?php echo $percent_of_shares ? $percent_of_shares : '<span class="opacity-0">empty</span>';?></span>
                                </td>

                            </tr>
                            <tr>
                                <td colspan="4">住址 Residential Address * <span
                                        class="text-primary"><?php echo $residential_address ? $residential_address : '<span class="opacity-0">empty</span>';?></span>
                                </td>
                            </tr>
                        </tbody>
                        <?php
                $current_idx++;
                }
                ?>

                    </table>
                    <div class="blank-area">- BLANK AREA -</div>
                    <div class="blank-area">- BLANK AREA -</div>
                    <div class="blank-area">- BLANK AREA -</div>
                    <div class="blank-area">- BLANK AREA -</div>

                    <div class="blank-area">- BLANK AREA -</div>
                    <div class="blank-area">- BLANK AREA -</div>
                    <div class="blank-area">- BLANK AREA -</div>
                    <!-- <div class="blank-area">- BLANK AREA -</div> -->

                </div>
                <?php
            }
            ?>

                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>


                <table class="form-table">
                    <tr>
                        <td class="text-center orange-yellow-bg fw-bold">服務計劃資料 Service Plan Information

                        </td>
                    </tr>
                    <tr>
                        <td> 服務費用 (港幣$3,845 [已包括政府費用]) Service fee (HK$3,845 inclusive of government charges)，已包括：

                        </td>
                    </tr>
                    <tr>
                        <td>
                            <ul class="m-0 mt-2 p-0 ps-3">
                                <li>查册公司名稱Name Search</li>
                                <li>準備公司註冊證書申請文件 Prepare documents for Certificate of Incorporation</li>
                                <li>準備商業登記證申請文件 Prepare documents for Business Registration</li>
                                <li>首年公司秘書服務 First Year Company Secretary Service</li>
                                <li>精美綠盒 Green Box (內含公司章程，公司鋼印，公司簽名印，公司圓印，股票書，法定記錄薄)</li>
                                <li>會計師核證副本（如需要，銀行開戶用）Certified True Copy by CPA (for Bank Account Opening, if needed)
                                </li>
                                <li>轉介開設銀行戶口（HSBC/東亞/中信）Bank Account Opening Referral</li>
                                <li>設立僱主MPF戶口 Setting up Employer’s MPF Account</li>
                                <li>勞保報價 Quotation for Employees’ Compensation Insurance</li>
                                <li>員工福利報價 Quotation for Employees’ Benefits</li>
                                <li>持續業務諮詢 Free Business Consultation</li>
                            </ul>

                        </td>
                    </tr>
                </table>

                <table class="form-table">
                    <tr>
                        <td class="text-center orange-yellow-bg fw-bold">附加服務 Additional Services


                        </td>

                    </tr>
                    <tr>
                        <td>
                            <?php echo count(get_field('business_stamp'))?'<span class="text-primary">☑</span>':'☐';?>
                            公司印章

                            <div class="ms-2">
                                <?php echo in_array("小圓印 Round Chop [HK$150/個each]", get_field('business_stamp')) ?'<span class="text-primary">☑</span>':'☐';?>
                                小圓印 Round
                                Chop [HK$150/個each] <br>
                                <?php echo in_array("支票印 Signature Chop [HK$150/個 each]", get_field('business_stamp')) ?'<span class="text-primary">☑</span>':'☐';?>
                                支票印 Signature Chop [HK$150/個 each]<br>
                                <?php echo in_array("鋼印 Company Seal [HK$250/個 each]", get_field('business_stamp')) ?'<span class="text-primary">☑</span>':'☐';?>
                                鋼印 Company Seal [HK$250/個 each]
                            </div>


                        </td>

                    </tr>
                    <tr>

                        <td>
                            <div class="text-start">
                                <?php echo count(get_field('virtual_office')) ? '<span class="text-primary">☑</span>' :'☐';?>
                                虛擬辦工室 Virtual Office
                            </div>


                            <table class="form-table mt-0 mb-0">
                                <tr>
                                    <td>尖沙咀 Tsim Sha Tsui

                                    </td>
                                    <td>荔枝角 Lai Chi Kok

                                    </td>
                                    <td>觀塘 Kwun Tong

                                    </td>
                                </tr>
                                <tr>
                                    <td class="fit">
                                        <div class="">
                                            <?php echo in_array("tst-HK1600-year", get_field('virtual_office')) ? '<span class="text-primary">☑</span>' :'☐'; ?>
                                            HK$1,600/year
                                        </div>
                                        <ul class="m-0 ps-4">
                                            <li class="ls1">註冊公司地址</li>
                                            <li class="ls1">信件包裹代收</li>
                                            <li class="ls1">稅局郵件轉寄</li>
                                            <li class="ls1">製作公司水牌</li>
                                            <li class="ls1">每月轉寄郵件及包裹(包首1KG 20x20x20cm)</li>
                                            <li class="ls1">郵件到取</li>
                                            <li class="ls1">更改商業登記及公司註冊處地址</li>
                                            <li class="ls1">郵件電子掃描</li>
                                        </ul>

                                    </td>
                                    <td class="fit">
                                        <div class="">
                                            <?php echo in_array("lck-HK950-year", get_field('virtual_office')) ? '<span class="text-primary">☑</span>' :'☐'; ?>
                                            <label class="-label" for="lck-HK950-year"> HK$950/year </label>
                                        </div>
                                        <ul class="m-0 ps-4">
                                            <li class="ls1">註冊公司地址</li>
                                            <li class="ls1">信件包裹代收</li>
                                            <li class="ls1">稅局郵件轉寄 (按要求)</li>
                                            <li class="ls1">製作公司水牌</li>
                                            <li class="ls1">每月轉寄郵件</li>
                                            <li class="ls1">郵件到取</li>
                                            <li class="ls1">更改商業登記及公司註冊處地址</li>
                                        </ul>


                                    </td>


                                    <td class="fit">

                                        <div class="">
                                            <?php echo in_array("kt-HK900-year", get_field('virtual_office')) ? '<span class="text-primary">☑</span>' :'☐'; ?>
                                            <label class="-label" for="kt-HK900-year"> HK$900/year </label>
                                        </div>
                                        <ul class="m-0 ps-4">
                                            <li class="ls1">註冊公司地址</li>
                                            <li class="ls1">信件代收</li>
                                            <li class="ls1">每月一次郵件轉寄 （註：不設到取服務）</li>
                                            <li class="ls1">更改商業登記及公司註冊處地址</li>
                                        </ul>

                                    </td>
                                </tr>
                                <tr>
                                    <td class="fit">

                                        <div class="">
                                            <?php echo in_array("tst-HK4000-year", get_field('virtual_office')) ? '<span class="text-primary">☑</span>' :'☐'; ?>
                                            <label class="form-check-label" for="tst-HK4000-year"> HK$4,000/year
                                            </label>
                                        </div>
                                        <ul class="m-0 ps-4">
                                            <li class="ls1">註冊公司地址</li>
                                            <li class="ls1">信件包裹代收</li>
                                            <li class="ls1">稅局郵件轉寄</li>
                                            <li class="ls1">製作公司水牌</li>
                                            <li class="ls1">每月轉寄郵件/包裹(包首1KG 20x20x20cm)</li>
                                            <li class="ls1">郵件到取</li>
                                            <li class="ls1">更改商業登記及公司註冊處地址</li>
                                            <li class="ls1">郵件電子掃描</li>
                                            <li class="ls2">辦公室電話代接</li>
                                            <li class="ls2">稅局文件代處理及信件代開</li>
                                            <li class="ls2">準備及保存重要控制人登記册</li>
                                        </ul>
                                    </td>
                                    <td class="fit">
                                        <div class="">
                                            <?php echo in_array("lck-HK1500-year", get_field('virtual_office')) ? '<span class="text-primary">☑</span>' :'☐'; ?>
                                            <label class="-label" for="lck-HK1500-year"> HK$1,500/year </label>
                                        </div>
                                        <ul class="m-0 ps-4">
                                            <li class="ls1">註冊公司地址</li>
                                            <li class="ls1">信件包裹代收</li>
                                            <li class="ls1">稅局郵件轉寄</li>
                                            <li class="ls1">製作公司水牌</li>
                                            <li class="ls1">每月轉寄郵件及包裹(包首1KG 20x20x20cm)</li>
                                            <li class="ls1">郵件到取</li>
                                            <li class="ls1">更改商業登記及公司註冊處地址</li>
                                            <li class="ls2">郵件電子掃描</li>
                                            <li class="ls2">每月一次會議室出租</li>
                                            <li class="ls2">辦公室電話代接</li>
                                        </ul>

                                    </td>
                                    <td class="fit">

                                    </td>
                                </tr>
                                <tr>
                                    <td class="fit">
                                        <div class="">
                                            <?php echo in_array("tst-HK12000-year", get_field('virtual_office')) ? '<span class="text-primary">☑</span>' :'☐'; ?>
                                            <label class="-label" for="tst-HK12000-year"> HK$12,000/year </label>
                                        </div>
                                        <ul class="m-0 ps-4">
                                            <li class="ls1">註冊公司地址</li>
                                            <li class="ls1">信件包裹代收</li>
                                            <li class="ls1">稅局郵件轉寄</li>
                                            <li class="ls1">製作公司水牌</li>
                                            <li class="ls1">每月轉寄郵件及包裹(包首1KG 20x20x20cm)</li>
                                            <li class="ls1">郵件到取</li>
                                            <li class="ls1">更改商業登記及公司註冊處地址</li>
                                            <li class="ls1">郵件電子掃描</li>
                                            <li class="ls2">辦公室電話代接</li>
                                            <li class="ls2">稅局文件代處理及信件代開</li>
                                            <li class="ls2">準備及保存重要控制人登記册</li>
                                            <li class="ls3">每月三次會議室出租</li>
                                        </ul>
                                    </td>
                                    <td class="fit">

                                    </td>
                                    <td class="fit">

                                    </td>
                                </tr>
                            </table>


                        </td>
                    </tr>

                </table>

                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>

                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>

                <table class="form-table">

                    <tr>
                        <td colspan="2" class="text-center orange-yellow-bg fw-bold">會計年度資料 Account Audit Information

                        </td>
                    </tr>
                    <tr>
                        <td>年結日 <br>
                            Year End Date
                        </td>

                        <td>
                            <?php echo get_field('year_end_date') =='12 月 31 日 (31-Dec)' ? '<span class="text-primary">☑</span>' :'☐'; ?>
                            12 月 31 日 (31-Dec)
                            <?php echo get_field('year_end_date') =='3 月 31 日 (31-Mar)' ? '<span class="text-primary">☑</span>' :'☐'; ?>
                            3 月 31 日
                            (31-Mar)
                            <?php echo get_field('year_end_date') =='客戶自訂 Others' ? '<span class="text-primary">☑</span>' :'☐'; ?>
                            客戶自訂
                            Others ：
                            <?php echo get_field('other_year_end_date') ? '<u class="text-primary">'.get_field('other_year_end_date').'</u>' : '_____________________';?>




                        </td>
                    </tr>
                    <tr>
                        <td>
                            會否委任CountAudit為您提供會計/審計服務 <br>
                            Will you appoint CountAudit to provide Accounting / Audit Services?


                        </td>
                        <td>
                            <?php //echo get_field('bank_account_opening_referral_services');?>
                            <?php echo get_field('appoint_countaudit_to_provide_accounting_audit_services')=='yes' ?'<span class="text-primary">☑</span>' :'☐';?>
                            會
                            Yes <br>
                            <?php echo get_field('appoint_countaudit_to_provide_accounting_audit_services')=='no' ?'<span class="text-primary">☑</span>' :'☐';?>
                            不會 No


                        </td>
                    </tr>
                </table>


                <table class="form-table">

                    <tr>
                        <td colspan="2" class="text-center orange-yellow-bg fw-bold">轉介公司銀行戶口服務 Bank Account Opening
                            Referral Services


                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">
                            <?php echo get_field('bank_account_opening_referral_services')=='need' ?'<span class="text-primary">☑</span>' :'☐';?>
                            需要
                            <?php echo get_field('bank_account_opening_referral_services')=='no need' ?'<span class="text-primary">☑</span>' :'☐';?>
                            不需要
                        </td>
                    </tr>
                </table>

                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>



                <table class="form-table mt-0 mb-0">

                    <tr>
                        <td class="text-center orange-yellow-bg fw-bold">條款及細則 Terms and Conditions

                        </td>
                    </tr>
                    <tr>
                        <td>
                            <u> 服務條款 MAIN TERMS</u> <br>
                            <u> *適用於虛擬辦工室客戶Applicable for Virtual Office Service</u>

                            <br>
                            1 本申請表由算數秘書有限公司（“本公司”）提供，並由公司秘書/虛擬辦公室服務計畫申請人（“客戶”）同意，雙方共同履行申請表內所載的條款及細則。
                            This application form is offered by CountAudit Secretarial Limited and accepted by the
                            Company Secretarial Service / Virtual Office Service  Applicants (the “Client”), both
                            executing the terms and conditions started in this application form.
                            <br> <br>

                            2 客戶須於服務到期日一個月前與本公司書面提出續約或中止服務，否則會遞交政府文件辭任公司秘書。
                            Client are required to renew / terminate the service with CountAudit Secretarial Limited 1
                            month
                            before the expiry date of the service period. Otherwise, the resignation form of company
                            secretary will be submitted to Companies Registry.  <br><br>

                            3 客戶如自行更改過公司資料，包括及不限於公司名稱、股權變動等，必須於周年日前   7   
                            個工作天將相關資料以電郵通知本公司，如果因客戶的遺漏而導致周年申報表資料錯誤，客戶需另外支付額外費用，並可能需要支付遲交罰款。 
                            If there is any Shares Transfer or Information Change of the Company Members during the past
                            Annual year. Client must send the related information and documents to CountAudit
                            Secretarial
                            Limited 7 days prior to the anniversary of the date of the company’s incorporation of that
                            year.
                            Client would be responsible if there is any missing of providing accurate information for
                            preparing the Annual Return, and have to pay the additional fees for re-doing the Annual
                            Return,
                            the Client would also be responsible for paying the late charge / penalty (if any) due to
                            late
                            submission. <br> <br>
                            4 客戶如需要簽署周年申報表或相關文件，必須將簽妥的文件正本於該年中的周年日後的    30   
                            日內寄回本公司以確保有足夠時間安排提交文件及費用，如果因遲交而導致任何罰款，客戶需要自行承擔。
                            If Client has to sign the Annual Return, the signed documents must be returned to CountAudit
                            Secretarial Limited within 30 days after the anniversary of the date of the company’s
                            incorporation in that year, to ensure CountAudit Secretarial Limited has sufficient time to
                            arrange submission of the documents. If there is any late charge / penalty due to late
                            submission, the Client should hold full responsibilities.  <br><br>
                            5 *客戶知悉並同意本申請表中沒有賦予客戶佔用或使用任何本虛擬辦公室服務所列位址之辦公室、設備或設施的權力。
                            The Client understands and agrees that they will have no right to occupy and access any part
                            of
                            the premises, and any equipment or facilities within the premise of the virtual office
                            address
                            under this application form. <br> <br>

                            6
                            *客戶不能在服務生效前或終止後，公開或使用本公司提供的位址、電話號碼以及傳真號碼。客戶也不能以其他未向本公司登記的公司和用戶的名義，公開或使用本公司提供的位址、電話號碼以及傳真號碼。
                            The Client shall not publish or use the provided address, telephone number and fax number
                            provided by CountAudit Secretarial Limited before the commencement of the service or after
                            the
                            termination of service. The Client shall not allow any company or user not registered with
                            CountAudit Secretarial Limited to publish or use the provided address, telephone number and
                            fax
                            number provided by CountAudit Secretarial Limited.
                            <br>
                            <br>
                            7
                            *本公司只為申請人之公司提供虛擬辦公室服務，故不會代收其聯絡人之私人信件或包裹。如有此情況，本公司將收取HKD100手續費，並且本公司不承擔任何因此引致之損失（包括但不限於信件或包裹丟失）。
                            The virtual office service is provided to the applicant only, i.e.the Company registered
                            with
                            us. Thus, CountAudit Secretarial Limited will not accept the mails or parcels addressed to
                            the
                            other parties (including but not limited to the company contact persons) (“unauthorized
                            mails
                            and parcels”). If any unauthorized mails or parcels are sent to CountAudit Secretarial
                            Limited,
                            CountAudit Secretarial Limited will charge HKD100 handling fee. Moreover, CountAudit
                            Secretarial
                            Limited will not be responsible for any loss incurred resulted from this matter (including
                            but
                            not limited to the loss of mail or parcels).
                            <br> <br>
                            8
                            *在服務生效前及或終止期間，或任何未經許可的情況下，本公司有權拒絕收取客戶的郵件、包裹、電郵或傳真，及拒絕處理客戶專線電話的來電或傳真，並且不會通知以上各種項目的傳送。在服務終止的30天后，客戶遺下的任何郵件、包裹、傳真和物件，本公司有權代為處理。

                            Before the commencement of service, during suspension period, or any situation without the
                            prior
                            authorization, CountAudit Secretarial Limited reserves the right to reject any mails,
                            parcels,
                            faxes or any other objects sent to the Client and will not handle all calls from the
                            assigned
                            telephone/fax numbers. CountAudit Secretarial Limited is not responsible to notify the
                            Client of
                            such delivery. 30 days after the termination of service, any mail, parcels, fax or any other
                            objects sent to or left at any offices of CountAudit Secretarial Limited shall be at the
                            disposal of CountAudit Secretarial Limited at its absolute discretion.
                            <br>
                            <br>
                            9 *代收取客戶郵件及包裹 MAIL HANDING SERVICES
                            <br>
                            <br>
                            [1]
                            包裹的體積不應超過20釐米*20釐米*20釐米。如包裹超過20釐米*20釐米*20釐米，本公司將按HKD20/每天/每20釐米*20釐米*20釐米收取存放費，並且本公司有權拒收任何超出上述體積的包裹。
                            The volume of parcels shall not exceed 20cm*20cm*20cm.If the volume of parcels exceed
                            20cm*20cm*20cm, storage fee will be charged at HKD20/day/20cm*20cm*20cm.Moreover, CountAudit
                            Secretarial Limited reserves the right to refuse receiving mails and parcels exceeding the
                            above
                            stated size. <br>
                            <br>

                            [2] 客戶之體積不超過20釐米*20釐米*20釐米的包裹可以免費存放3天，3天後本公司將收取存放費(HKD20/每天/每件)
                            The storage of the parcel with its volume not exceeding 20cm*20cm*20cm will be free of
                            charge
                            for the first 3 days and HKD20/item/day will be charged afterwards.
                            <br>
                            <br>
                            [3] 本公司有權拒絕收任何危險或非法物件。 
                            CountAudit Secretarial Limited reserves the right to refuse receiving any dangerous or
                            illegal
                            items.
                            <br>
                            <br>
                            [4]
                            超逾30天不取，及不能聯絡者，本公司將自行處理寄存物，而不另行通知，並且不負任何責任，後果客戶自負。若客戶暫存的物件基於任何原因而被盜，遺失或損毀，本公司不須為此而負上任何責任。
                            Mails and parcels uncollected over 30 days, or if the Client is un-contactable, the mails
                            and
                            parcels shall be disposed of without any notice. CountAudit Secretarial Limited shall not be
                            responsible for any losses or any obligations. CountAudit Secretarial Limited shall not be
                            liable if the stored items are lost, being stolen or damaged due to any reason during the
                            storage period. 






                        </td>
                    </tr>
                </table>

                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>


                <table class="form-table mt-0 mb-0">

                    <tr>
                        <td>
                            10 *轉寄郵件及包裹服務 MAIL FORWARDING SERVICES <br>
                            若客戶需要轉寄郵件及包裹，需於服務申請時提出，或每次以電郵或書面形式通知本公司。本公司不會為轉寄郵件及包裹所引致的損失、被竊、被破壞、或任何災害，而作出任何賠償及負上任何責任。本公司每次將收取HKD80元手續費（不包轉寄郵件及包裹之郵寄費用）。
                            If mail forwarding services is required, the Client should state at the time of application.
                            Otherwise, the Client     should notice CountAudit Secretarial Limited by email or written
                            notice every time. CountAudit Secretarial Limited shall not be liable for any losses,
                            damages,
                            cost, claims and expenses of liabilities of whatever nature in mail forwarding. CountAudit
                            Secretarial Limited will charge HKD80 for handling charge (excluding mailing fee) of the
                            forward
                            mails and/or parcels.
                            <br>
                            <br>
                            11 *電話服務 CALL SERVICES <br> <br>

                            [1]  所有來電轉駁服務只適用於本地電話號碼。  <br><br>
                             All call forwarding services apply to local telephone number only.
                            [2] 若客戶須更改系統直接轉駁之指定號碼，須於生效期前2個工作天向本公司以書面形式通知。 
                            If the designated number direct transferred by system is to be changed, a formal written
                            notification should be submitted to CountAudit Secretarial Limited on or before 2 working
                            days
                            prior to the effective date.<br><br>
                            [3] 為保障客戶之利益及私隱，所有來電訊息只會儲存48小時。 
                            For protecting the Client’s interest and privacy, all messages from callers will be reserved
                            48
                            hours only.<br><br>
                            [4] 專線電話服務只限代接後留言及轉駁電話，而不包括任何產品查詢，報價及客戶服務的工作。
                            The telephone services provided by CountAudit Secretarial Limited can be only used for
                            receiving
                            calls, leaving messages and transferring calls on behalf of the Client, not including any
                            services related to product inquires, making quotations and customer services. <br> <br>
                            <br><br>
                            12 若有本公司不能控制的事件（包括客戶的作為或不作為），影響本公司按原定計劃履行本服務的能力，本公司或會酌加服務費用。
                            For CountAudit Secretarial Limited uncontrollable events, including Client act or omission
                            to
                            act, which affects CountAudit Secretarial Limited's ability to perform the service,
                            CountAudit
                            Secretarial Limited reserves the right to charge extra fee. 
                            <br><br>
                            13 客戶應於賬單上列明的到期日前繳交有關款項，否則本公司有權終止其服務而不作另行通知。同時客戶有責任於到期日前確保已繳交之費用已由本公司收取並確認。 
                            The Client shall settle the fees before the due date specified on the relevant invoices,
                            otherwise, CountAudit Secretarial Limited has right to suspend the services to the Client.
                            The
                            Client has the responsibility to ensure that their payments are received and identified by
                            CountAudit Secretarial Limited before the due date specified on the relevant invoices.
                            <br><br>
                            14 若客戶要求重啟因延遲繳款或欠款被終止的服務，本公司將會向客戶收取於終止期間的相關服務費用。 
                            If Client requests to reactivate the services which has been suspended by CountAudit
                            Secretarial
                            Limited due to late payment or overdue situation, CountAudit Secretarial Limited shall
                            charge
                            the Client the service fees for the suspended period.
                            <br><br>
                            15 客戶如需更改服務指令、內容，需以書面形式通知本公司，及繳付相關費用。
                            If the Client requires to amend service instructions, contents, a written notice is required
                            to
                            provide to CountAudit Secretarial Limited, and the related service fees shall be applied.
                            <br><br>
                            16 客戶或客戶代表所提供的一切資訊（“客戶資訊”）均為準確與完整的。本公司將依賴所獲提供的客戶資訊，本公司不會對客戶資訊進行任何評估或核證，也不會對任何錯誤資訊所引致之損失負責。
                            The information provided by the Client (“Client Information”) must be accurate and complete.
                            CountAudit Secretarial Limited will depend on what the Client provide, and CountAudit
                            Secretarial Limited shall not do any evaluation or certification about the Client
                            Information
                            and shall not be responsible for any loss suffered due to the inaccurate or incomplete
                            information.
                            <br><br>
                            17 就以下情況，本公司有權終止服務而不作任何通知；同時亦無須為停止提供服務，而負上法律責任或承擔任何被索償的後果。
                            Under the following circumstances, CountAudit Secretarial Limited reserves all rights to
                            terminate services without any prior notice. CountAudit Secretarial Limited shall bear no
                            legal
                            responsibilities nor shall be liable for any claims or compensation for discontinuing
                            services.
                            <br><br>


                            [1]   客戶未能按時繳交費用，包括服務費、手續費或轉寄郵件費用；或未能及時更新商業登記；
                            The Client has failed to settle any service fees, handing fees or reimbursements of postage,
                            or
                            to renew business registration on time;
                            <br><br> [2] 客戶涉嫌進行或涉及任何非法、違例或詐騙活動；
                            In suspicion of the Client is involving or carrying out a fraud and any illegal or improper
                            activities;
                            <br><br> [3] 客戶涉嫌利用本公司提供的服務作展銷會或招聘會等活動；
                            In suspicion of the Client is using provided services to hold any promotional sales or
                            public
                            recruitment events;
                            <br><br> [4] 客戶涉嫌在未經本公司許可下，把服務轉移或分配至任何第三者使用。
                            In suspicion of the Client is transferring or assigning any or part of the services to any
                            other
                            parties, without the prior authorization from CountAudit Secretarial Limited.
                            <br><br>
                            18 如有任何爭議，本公司將保留最終決定權。
                            Should any disputes arise, the decision of CountAudit Secretarial Limited shall be final.

                        </td>
                    </tr>
                </table>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>

                <table class="form-table mt-0">
                    <tr>
                        <td>責任範圍 LIMITATION OF LIABILITY <br><br>

                            19 客戶已知悉因語言、文字或電子通訊的限制，如服務受阻、延誤或中斷、或任何錯漏，本公司的責任只限於其服務受影響的服務費，本公司不會因上述原因而負上其他責任。
                            The Client acknowledges that due to the imperfect nature of verbal, written and electronic
                            communications, CountAudit Secretarial Limited is not responsible for any failure to render
                            any
                            service, or any delay or interruption of any service, the sole obligation is limited to the
                            service charges during the affected period. <br><br>

                            20 客戶同意不會因服務受阻、延誤或中斷、或任何錯漏而引致的直接或間接損失(包括業務及收益之損失)而提出索償。
                            The Client agrees to waive, and agrees not to make, any claims for damages, direct or
                            consequential, including with respect to lost business or profits, arising out any service,
                            any
                            error or omission with respect there to, or any delay or interruption of services.
                            <br><br>
                            協議期限與終止 SERVICE PERIOD AND TERMINATION
                            <br><br>

                            21 本次服務由服務生效日開始計算，其後服務期會按照客戶每次繳付的服務週期而延續，而本申請表之內容亦會於新延續的服務期內適用。
                            The service period starts from the effective date of the service plan and the contract
                            period
                            will be extended according to the period covered by each payment from the Client. The
                            content of
                            this application form will be applicable within the extended contract period.
                            <br><br>

                            22 未經本公司許可下，客戶不能在首張合約期之結束日期終止服務。
                            The Client is not allowed to terminate the service before the end date of the first contract
                            period unless prior approval from CountAudit Secretarial Limited is obtained.
                            <br><br>

                            23 提早終止服務並不會退回已繳交之服務費用。
                            Service fee will not be refunded for early termination.
                            <br><br>
                            資料保護DATE PROTECTION
                            <br><br>
                            24 本公司可收集、使用、傳輸、儲存或以其他方式處理（統稱“處理”）可能與個別人士有關的客戶資訊（“個人資料”）。本公司處理個人資料時，將遵照適用的法律及專業守則。
                            The Company may collect, use, transfer, store or otherwise process (collectively referred to
                            as
                            the "processing") the information provided by the Clients, which may include personal
                            information. The processing of those data will be in compliance with applicable laws and
                            professional codes of practice.
                            <br><br>

                            25 客戶同意在本公司在為客戶提供服務的情況下向第三者提供與客戶有關之資料。本公司亦將要求代本公司處理個人資料的任何服務供應商，遵守該等規定。
                            The Client agrees CountAudit Secretarial Limited to provide customer-related information to
                            third parties for services to be provided to the Client by CountAudit Secretarial Limited.
                            CountAudit Secretarial Limited will also request any third party service providers to be in
                            compliance with applicable laws and professional codes of practice.
                            <br><br>

                            26 客戶同意接收本公司推廣優惠之資訊，如客戶日後不欲繼續接收有關本公司推廣資訊，可隨時通知本公司停止有關資訊之發送。
                            The Client agrees to receive promotional information from CountAudit Secretarial Limited.
                            Should
                            the Client determines not to continue receiving such information, the Client can inform
                            CountAudit Secretarial Limited and cease the receipt of the promotional information.
                            <br><br>

                            不可抗力FORCE MAJEURE <br><br>


                            27 若因客戶及本公司合理控制以外的情況而出現違反本申請表的情況，客戶及本公司均無須負責（付款責任除外）。
                            The Client and CountAudit Secretarial Limited shall not be liable (except payment
                            obligations)
                            for any violation of the application form due to circumstances beyond the reasonable control
                            of
                            the Client and CountAudit Secretarial Limited.
                            <br><br>

                            適用法律與爭議解決APPLICABLE LAW AND DISPUTE RESOLUTION
                            <br><br>

                            28 本申請表受香港特別行政區法律管轄，且應當依照香港特別行政區法律進行解釋。雙方因本申請表而發生的爭議，應友好協商解決。經友好協商不成的會提交香港國際仲裁中心進行仲裁。
                            This application form shall be governed by and construed in accordance with the Laws of the
                            Hong
                            Kong Special Administrative Region. Both parties by this application form of disputes shall
                            be
                            settled through friendly consultations. If the dispute cannot be resolved, it will be
                            settled by
                            Hong Kong International Arbitration Center for arbitration.
                            <br><br>

                            其他事項OTHER BUSINESS
                            <br><br>

                            29 本申請表構成雙方就本服務及本申請表所涵蓋其他事項的全部協定，並取代先前一切有關的協議、諒解、聲明。
                            The Application Form constitutes the entire agreement of all matters covered regarding the
                            service and supersede the previous all relevant agreements, understandings and declarations.
                            <br><br>

                            30 雙方可用電子方式簽署本申請表（及其修訂），各方可在本申請表的不同副本上簽署。本申請表或任何其附件的修訂，必須經雙方書面同意。
                            Both sides can electronically sign the application form (and its amendments), the parties
                            sign
                            on different copies of the application form. Any amendments on the Application Form or on
                            its
                            Appendix(es) must be agreed by both parties in writing.
                            <br><br>

                            31 本申請表的任何條文（不論全部或部分）若被認定為不合法、無效或因其他理由不能執行，本申請表其他條文仍具有十足效力。
                            If any of the provisions of the Application Form (whether in whole or in part) identified as
                            illegal, void, or for any other reason, unable to perform, the other provisions remain in
                            full
                            force and in effect.
                            <br><br>

                            32 本公司不承擔任何與本服務相關的客戶的管理層責任。
                            CountAudit Secretarial Limited does not undertake any relevant client management
                            responsibility.
                            <br><br>

                            33 現有客戶續約本公司服務最少6個月起。
                            Existing Customers renewal to CountAudit Secretarial Limited with not less  than 6-month
                            commitment period and agree to the relevant terms and conditions.


                        </td>
                    </tr>
                </table>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>

                <table class="form-table mt-0">
                    <tr>
                        <td class="text-center orange-yellow-bg fw-bold">付款方法 Payment Methods

                        </td>

                    </tr>
                    <tr>
                        <td>

                            客戶可以用以下途徑繳付款項 Client can settle the payment by following methods <br><br>
                            (I)親身付款 Pay in person<br>
                            (II)存入現金或轉帳至匯豐銀行(戶口號碼: 747-122000-838)<br>
                            Direct deposit into HSBC (Account No.: 747-122000-838)<br>
                            (III)劃線支票抬頭「CountAudit」至以下地址: 九龍荔枝角永康街18號永康中心11樓C室<br>
                            Crossed cheque payable to “CountAudit” to following address: Flat C, 11/F., Wing Hong
                            Centre, 18
                            Wing Hong Street, Lai Chi Kok, Kowloon<br>
                            (IV)轉數快 (轉數快識別號碼: 0818617) FPS Identifier: 0818617<br>
                            (V)網上連結支付Online Payment: https://app.cardup.hk/collect/pay/countaudit (網上付款系統或設相關手續費)<br>
                            #付款後請提供入數紙/截圖作紀錄



                        </td>
                    </tr>
                </table>

                <table class="form-table mt-0">
                    <tr>
                        <td class="text-center orange-yellow-bg fw-bold">聲明 Declaration


                        </td>

                    </tr>
                    <tr>
                        <td>



                            本人茲證實上述資料確實無誤，並已知悉及同意以上所有條款。 <br>
                            I have read and agreed with all the terms and conditions above.<br>
                            *本人清楚知道須於每年於公司成立為法團之日在該年中的周年日後的 42 日內 (訂明時限)，向公司註冊處處長交付周年申報表登記。逾期罰款及相關的法律責任會由本人 /
                            我司自行承擔。<br>
                            I acknowledge and understand every year annual return is required to be delivered to the
                            Registrar of Companies for registration within 42 days after the anniversary of the date of
                            the
                            company’s incorporation in that year (the prescribed time period) period), I/ my comp any
                            will
                            have responsibilities for all penalties and legal liability from late delivery. <br>
                            *（只適用於公司秘書服務 Applicable for Company Secretarial Services Only）



                            <table class="border-0 mt-5">
                                <tr>
                                    <td class="fit border-0">
                                        <div class="sign-line"></div>
                                        <div>
                                            客戶簽名 Applicant ‘s Signature</div>
                                    </td>
                                    <td class="fit border-0">
                                        <div class="sign-line"></div>

                                        <div>
                                            日期 Date</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="fit border-0 pt-4">
                                        <div class="sign-line"></div>

                                        <div>
                                            客戶姓名 Applicant’s Name
                                        </div>
                                    </td>
                                    <td class="fit border-0"></td>
                                </tr>
                            </table>

                        </td>
                    </tr>
                </table>




            </div>
        </div>
        <?php
         }
    ?>

        <?php
    if($_GET['f']=='vof')
    {

        $application_no = $_GET['aid'];
        $query_args = array(
           'post_type' => 'virtual_office_form',
           'p' => $application_no,
       );
       $the_query = new WP_Query( $query_args );
       if ( $the_query->have_posts() ) {
               $the_query->the_post();
       } else {
           
       }
       
        ?>
        <div class="incorp-limited-app-form">
            <div class="print-form-container">
                <h2 class="text-center mt-4">
                    Virtual Office Service Application Form
                    <br>
                    虛擬辦工室服務計劃申請表
                    <div class="small mt-2">*為必須填寫項目 Required Fields
                    </div>

                </h2>

                <table class="form-table mt-3 mb-0">
                    <tr>
                        <td colspan="4" class="text-center orange-yellow-bg fw-bold">申請人資料 Applicant Information

                        </td>
                    </tr>
                    <tr>
                        <td class="fit text-nowrap">
                            Name 姓名:</td>
                        <td><span
                                class="text-primary"><?php echo get_field('name') ? get_field('name'):'<span class="opacity-0">empty</span>';?></span>
                        </td>
                        <td class="fit text-nowrap">*電郵 Email:

                        </td>
                        <td><span
                                class="text-primary"><?php echo get_field('email') ? get_field('email'):'<span class="opacity-0">empty</span>';?></span>
                        </td>
                    </tr>
                    <tr>
                        <td class="fit text-nowrap">
                            *電話 Tel:

                        </td>
                        <td><span
                                class="text-primary"><?php echo get_field('tel') ? get_field('tel'):'<span class="opacity-0">empty</span>';?></span>
                        </td>
                        <td class="fit text-nowrap">傳真 Fax:



                        </td>
                        <td><span
                                class="text-primary"><?php echo get_field('fax') ? get_field('fax'):'<span class="opacity-0">empty</span>';?></span>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="4">


                            *上述申請人為賬單聯絡人 The above applicant is the billing contact person
                            <?php echo get_field('is_billing_contact_person')  =='yes' ? '<span class="text-primary">☑</span>':'☐';  ?>
                            是 Yes
                            <?php echo get_field('is_billing_contact_person')  =='no' ? '<span class="text-primary">☑</span>':'☐';  ?>
                            否 No <br>
                            如否，請提供賬單聯絡人資料 If No, please provide the information of the billing contact person <br>
                            <br>
                            姓名Name：<?php echo get_field('is_billing_contact_person')=='no' ? '<u class="text-primary">'.get_field('contact_person_name').'</u>' : '_____________________';?>
                            聯絡電話Phone
                            Number：<?php echo get_field('is_billing_contact_person')=='no' ? '<u class="text-primary">'.get_field('contact_person_phone_number').'</u>' : '_____________________';?>


                        </td>
                    </tr>


                </table>
                <table class="form-table mt-0 mb-0">
                    <tr>
                        <td colspan="4" class="text-center orange-yellow-bg fw-bold">公司資料 Company Information



                        </td>
                    </tr>
                    <tr>
                        <td rowspan="2" class="text-nowrap">*公司名稱 <br>
                            Company Name
                        </td>
                        <td>中文名稱 Chinese Name <span
                                class="text-primary"><?php echo get_field('company_name_chinese')?get_field('company_name_chinese'):'<span class="opacity-0">empty</span>';?></span>
                        </td>
                    </tr>
                    <tr>


                        <td>英文名稱 English Name <span
                                class="text-primary"><?php echo get_field('company_name_english')?get_field('company_name_english'):'<span class="opacity-0">empty</span>';?></span>

                        </td>
                    </tr>




                </table>
                <table class="form-table mt-0 mb-0">
                    <tr>
                        <td colspan="2" class="text-center orange-yellow-bg fw-bold">

                            *申請所需之文件 Required Documents
                            <div class="small">(請上載下列文件 Please upload the following documents)
                            </div>


                        </td>
                    </tr>
                    <tr>
                        <td class="fit">1. 商業登記証(副本) (BR); 最新周年申報表(副本) (latest NAR1) / 法團成立表格 (NNC1); 公司證書 (CI)
                            <br>
                            <?php //echo get_field('upload_file_1')['url'];?>

                        </td>
                        <td class="fit">
                            2. 有效之身份證 / 護照副本 及 3 個月內之住址證明 <br>
                            All member’s ID/passport copy and address proof within 3 months <br>
                            <?php //echo get_field('upload_file_2')['url'];?>

                        </td>
                    </tr>
                </table>


                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>

                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>

                <table class="form-table mt-0 mb-0">
                    <tr>
                        <td colspan="2" class="text-center orange-yellow-bg fw-bold">

                            服務計劃資料 Service Plan Information




                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="text-start">
                                虛擬辦工室 Virtual Office
                            </div>


                            <table class="form-table mt-0 mb-0">
                                <tr>
                                    <td>尖沙咀 Tsim Sha Tsui

                                    </td>
                                    <td>荔枝角 Lai Chi Kok

                                    </td>
                                    <td>觀塘 Kwun Tong

                                    </td>
                                </tr>
                                <tr>
                                    <td class="fit">
                                        <div class="">
                                            <?php echo in_array("tst-HK1600-year", get_field('virtual_office')) ? '<span class="text-primary">☑</span>' :'☐'; ?>
                                            HK$1,600/year
                                        </div>
                                        <ul class="m-0 ps-4">
                                            <li class="ls1">註冊公司地址</li>
                                            <li class="ls1">信件包裹代收</li>
                                            <li class="ls1">稅局郵件轉寄</li>
                                            <li class="ls1">製作公司水牌</li>
                                            <li class="ls1">每月轉寄郵件及包裹(包首1KG 20x20x20cm)</li>
                                            <li class="ls1">郵件到取</li>
                                            <li class="ls1">更改商業登記及公司註冊處地址</li>
                                            <li class="ls1">郵件電子掃描</li>
                                        </ul>

                                    </td>
                                    <td class="fit">
                                        <div class="">
                                            <?php echo in_array("lck-HK950-year", get_field('virtual_office')) ? '<span class="text-primary">☑</span>' :'☐'; ?>
                                            <label class="-label" for="lck-HK950-year"> HK$950/year </label>
                                        </div>
                                        <ul class="m-0 ps-4">
                                            <li class="ls1">註冊公司地址</li>
                                            <li class="ls1">信件包裹代收</li>
                                            <li class="ls1">稅局郵件轉寄 (按要求)</li>
                                            <li class="ls1">製作公司水牌</li>
                                            <li class="ls1">每月轉寄郵件</li>
                                            <li class="ls1">郵件到取</li>
                                            <li class="ls1">更改商業登記及公司註冊處地址</li>
                                        </ul>


                                    </td>


                                    <td class="fit">

                                        <div class="">
                                            <?php echo in_array("kt-HK900-year", get_field('virtual_office')) ? '<span class="text-primary">☑</span>' :'☐'; ?>
                                            <label class="-label" for="kt-HK900-year"> HK$900/year </label>
                                        </div>
                                        <ul class="m-0 ps-4">
                                            <li class="ls1">註冊公司地址</li>
                                            <li class="ls1">信件代收</li>
                                            <li class="ls1">每月一次郵件轉寄 （註：不設到取服務）</li>
                                            <li class="ls1">更改商業登記及公司註冊處地址</li>
                                        </ul>

                                    </td>
                                </tr>
                                <tr>
                                    <td class="fit">

                                        <div class="">
                                            <?php echo in_array("tst-HK4000-year", get_field('virtual_office')) ? '<span class="text-primary">☑</span>' :'☐'; ?>
                                            <label class="form-check-label" for="tst-HK4000-year"> HK$4,000/year
                                            </label>
                                        </div>
                                        <ul class="m-0 ps-4">
                                            <li class="ls1">註冊公司地址</li>
                                            <li class="ls1">信件包裹代收</li>
                                            <li class="ls1">稅局郵件轉寄</li>
                                            <li class="ls1">製作公司水牌</li>
                                            <li class="ls1">每月轉寄郵件/包裹(包首1KG 20x20x20cm)</li>
                                            <li class="ls1">郵件到取</li>
                                            <li class="ls1">更改商業登記及公司註冊處地址</li>
                                            <li class="ls1">郵件電子掃描</li>
                                            <li class="ls2">辦公室電話代接</li>
                                            <li class="ls2">稅局文件代處理及信件代開</li>
                                            <li class="ls2">準備及保存重要控制人登記册</li>
                                        </ul>
                                    </td>
                                    <td class="fit">
                                        <div class="">
                                            <?php echo in_array("lck-HK1500-year", get_field('virtual_office')) ? '<span class="text-primary">☑</span>' :'☐'; ?>
                                            <label class="-label" for="lck-HK1500-year"> HK$1,500/year </label>
                                        </div>
                                        <ul class="m-0 ps-4">
                                            <li class="ls1">註冊公司地址</li>
                                            <li class="ls1">信件包裹代收</li>
                                            <li class="ls1">稅局郵件轉寄</li>
                                            <li class="ls1">製作公司水牌</li>
                                            <li class="ls1">每月轉寄郵件及包裹(包首1KG 20x20x20cm)</li>
                                            <li class="ls1">郵件到取</li>
                                            <li class="ls1">更改商業登記及公司註冊處地址</li>
                                            <li class="ls2">郵件電子掃描</li>
                                            <li class="ls2">每月一次會議室出租</li>
                                            <li class="ls2">辦公室電話代接</li>
                                        </ul>

                                    </td>
                                    <td class="fit">

                                    </td>
                                </tr>
                                <tr>
                                    <td class="fit">
                                        <div class="">
                                            <?php echo in_array("tst-HK12000-year", get_field('virtual_office')) ? '<span class="text-primary">☑</span>' :'☐'; ?>
                                            <label class="-label" for="tst-HK12000-year"> HK$12,000/year </label>
                                        </div>
                                        <ul class="m-0 ps-4">
                                            <li class="ls1">註冊公司地址</li>
                                            <li class="ls1">信件包裹代收</li>
                                            <li class="ls1">稅局郵件轉寄</li>
                                            <li class="ls1">製作公司水牌</li>
                                            <li class="ls1">每月轉寄郵件及包裹(包首1KG 20x20x20cm)</li>
                                            <li class="ls1">郵件到取</li>
                                            <li class="ls1">更改商業登記及公司註冊處地址</li>
                                            <li class="ls1">郵件電子掃描</li>
                                            <li class="ls2">辦公室電話代接</li>
                                            <li class="ls2">稅局文件代處理及信件代開</li>
                                            <li class="ls2">準備及保存重要控制人登記册</li>
                                            <li class="ls3">每月三次會議室出租</li>
                                        </ul>
                                    </td>
                                    <td class="fit">

                                    </td>
                                    <td class="fit">

                                    </td>
                                </tr>
                            </table>

                        </td>
                    </tr>
                </table>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>


                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>

                <table class="form-table mt-0 mb-0">

                    <tr>
                        <td class="text-center orange-yellow-bg fw-bold">條款及細則 Terms and Conditions

                        </td>
                    </tr>
                    <tr>
                        <td>
                            <u> 服務條款 MAIN TERMS</u> <br>
                            <u> *適用於虛擬辦工室客戶Applicable for Virtual Office Service</u>

                            <br>
                            1 本申請表由算數秘書有限公司（“本公司”）提供，並由公司秘書/虛擬辦公室服務計畫申請人（“客戶”）同意，雙方共同履行申請表內所載的條款及細則。
                            This application form is offered by CountAudit Secretarial Limited and accepted by
                            the
                            Company Secretarial Service / Virtual Office Service  Applicants (the “Client”),
                            both
                            executing the terms and conditions started in this application form.
                            <br> <br>

                            2 客戶須於服務到期日一個月前與本公司書面提出續約或中止服務，否則會遞交政府文件辭任公司秘書。
                            Client are required to renew / terminate the service with CountAudit Secretarial
                            Limited 1 month
                            before the expiry date of the service period. Otherwise, the resignation form of
                            company
                            secretary will be submitted to Companies Registry.  <br><br>

                            3 客戶如自行更改過公司資料，包括及不限於公司名稱、股權變動等，必須於周年日前   7   
                            個工作天將相關資料以電郵通知本公司，如果因客戶的遺漏而導致周年申報表資料錯誤，客戶需另外支付額外費用，並可能需要支付遲交罰款。 
                            If there is any Shares Transfer or Information Change of the Company Members during
                            the past
                            Annual year. Client must send the related information and documents to CountAudit
                            Secretarial
                            Limited 7 days prior to the anniversary of the date of the company’s incorporation
                            of that year.
                            Client would be responsible if there is any missing of providing accurate
                            information for
                            preparing the Annual Return, and have to pay the additional fees for re-doing the
                            Annual Return,
                            the Client would also be responsible for paying the late charge / penalty (if any)
                            due to late
                            submission. <br> <br>
                            4 客戶如需要簽署周年申報表或相關文件，必須將簽妥的文件正本於該年中的周年日後的    30   
                            日內寄回本公司以確保有足夠時間安排提交文件及費用，如果因遲交而導致任何罰款，客戶需要自行承擔。
                            If Client has to sign the Annual Return, the signed documents must be returned to
                            CountAudit
                            Secretarial Limited within 30 days after the anniversary of the date of the
                            company’s
                            incorporation in that year, to ensure CountAudit Secretarial Limited has sufficient
                            time to
                            arrange submission of the documents. If there is any late charge / penalty due to
                            late
                            submission, the Client should hold full responsibilities.  <br><br>
                            5 *客戶知悉並同意本申請表中沒有賦予客戶佔用或使用任何本虛擬辦公室服務所列位址之辦公室、設備或設施的權力。
                            The Client understands and agrees that they will have no right to occupy and access
                            any part of
                            the premises, and any equipment or facilities within the premise of the virtual
                            office address
                            under this application form. <br> <br>

                            6
                            *客戶不能在服務生效前或終止後，公開或使用本公司提供的位址、電話號碼以及傳真號碼。客戶也不能以其他未向本公司登記的公司和用戶的名義，公開或使用本公司提供的位址、電話號碼以及傳真號碼。
                            The Client shall not publish or use the provided address, telephone number and fax
                            number
                            provided by CountAudit Secretarial Limited before the commencement of the service or
                            after the
                            termination of service. The Client shall not allow any company or user not
                            registered with
                            CountAudit Secretarial Limited to publish or use the provided address, telephone
                            number and fax
                            number provided by CountAudit Secretarial Limited.
                            <br>
                            <br>
                            7
                            *本公司只為申請人之公司提供虛擬辦公室服務，故不會代收其聯絡人之私人信件或包裹。如有此情況，本公司將收取HKD100手續費，並且本公司不承擔任何因此引致之損失（包括但不限於信件或包裹丟失）。
                            The virtual office service is provided to the applicant only, i.e.the Company
                            registered with
                            us. Thus, CountAudit Secretarial Limited will not accept the mails or parcels
                            addressed to the
                            other parties (including but not limited to the company contact persons)
                            (“unauthorized mails
                            and parcels”). If any unauthorized mails or parcels are sent to CountAudit
                            Secretarial Limited,
                            CountAudit Secretarial Limited will charge HKD100 handling fee. Moreover, CountAudit
                            Secretarial
                            Limited will not be responsible for any loss incurred resulted from this matter
                            (including but
                            not limited to the loss of mail or parcels).
                            <br> <br>
                            8
                            *在服務生效前及或終止期間，或任何未經許可的情況下，本公司有權拒絕收取客戶的郵件、包裹、電郵或傳真，及拒絕處理客戶專線電話的來電或傳真，並且不會通知以上各種項目的傳送。在服務終止的30天后，客戶遺下的任何郵件、包裹、傳真和物件，本公司有權代為處理。

                            Before the commencement of service, during suspension period, or any situation
                            without the prior
                            authorization, CountAudit Secretarial Limited reserves the right to reject any
                            mails, parcels,
                            faxes or any other objects sent to the Client and will not handle all calls from the
                            assigned
                            telephone/fax numbers. CountAudit Secretarial Limited is not responsible to notify
                            the Client of
                            such delivery. 30 days after the termination of service, any mail, parcels, fax or
                            any other
                            objects sent to or left at any offices of CountAudit Secretarial Limited shall be at
                            the
                            disposal of CountAudit Secretarial Limited at its absolute discretion.
                            <br>
                            <br>
                            9 *代收取客戶郵件及包裹 MAIL HANDING SERVICES
                            <br>
                            <br>
                            [1]
                            包裹的體積不應超過20釐米*20釐米*20釐米。如包裹超過20釐米*20釐米*20釐米，本公司將按HKD20/每天/每20釐米*20釐米*20釐米收取存放費，並且本公司有權拒收任何超出上述體積的包裹。
                            The volume of parcels shall not exceed 20cm*20cm*20cm.If the volume of parcels
                            exceed
                            20cm*20cm*20cm, storage fee will be charged at HKD20/day/20cm*20cm*20cm.Moreover,
                            CountAudit
                            Secretarial Limited reserves the right to refuse receiving mails and parcels
                            exceeding the above
                            stated size. <br>
                            <br>

                            [2] 客戶之體積不超過20釐米*20釐米*20釐米的包裹可以免費存放3天，3天後本公司將收取存放費(HKD20/每天/每件)
                            The storage of the parcel with its volume not exceeding 20cm*20cm*20cm will be free
                            of charge
                            for the first 3 days and HKD20/item/day will be charged afterwards.
                            <br>
                            <br>
                            [3] 本公司有權拒絕收任何危險或非法物件。 
                            CountAudit Secretarial Limited reserves the right to refuse receiving any dangerous
                            or illegal
                            items.
                            <br>
                            <br>
                            [4]
                            超逾30天不取，及不能聯絡者，本公司將自行處理寄存物，而不另行通知，並且不負任何責任，後果客戶自負。若客戶暫存的物件基於任何原因而被盜，遺失或損毀，本公司不須為此而負上任何責任。
                            Mails and parcels uncollected over 30 days, or if the Client is un-contactable, the
                            mails and
                            parcels shall be disposed of without any notice. CountAudit Secretarial Limited
                            shall not be
                            responsible for any losses or any obligations. CountAudit Secretarial Limited shall
                            not be
                            liable if the stored items are lost, being stolen or damaged due to any reason
                            during the
                            storage period. 






                        </td>
                    </tr>
                </table>

                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>


                <table class="form-table mt-0 mb-0">

                    <tr>
                        <td>
                            10 *轉寄郵件及包裹服務 MAIL FORWARDING SERVICES <br>
                            若客戶需要轉寄郵件及包裹，需於服務申請時提出，或每次以電郵或書面形式通知本公司。本公司不會為轉寄郵件及包裹所引致的損失、被竊、被破壞、或任何災害，而作出任何賠償及負上任何責任。本公司每次將收取HKD80元手續費（不包轉寄郵件及包裹之郵寄費用）。
                            If mail forwarding services is required, the Client should state at the time of
                            application.
                            Otherwise, the Client     should notice CountAudit Secretarial Limited by email or
                            written
                            notice every time. CountAudit Secretarial Limited shall not be liable for any
                            losses, damages,
                            cost, claims and expenses of liabilities of whatever nature in mail forwarding.
                            CountAudit
                            Secretarial Limited will charge HKD80 for handling charge (excluding mailing fee) of
                            the forward
                            mails and/or parcels.
                            <br>
                            <br>
                            11 *電話服務 CALL SERVICES <br> <br>

                            [1]  所有來電轉駁服務只適用於本地電話號碼。  <br><br>
                             All call forwarding services apply to local telephone number only.
                            [2] 若客戶須更改系統直接轉駁之指定號碼，須於生效期前2個工作天向本公司以書面形式通知。 
                            If the designated number direct transferred by system is to be changed, a formal
                            written
                            notification should be submitted to CountAudit Secretarial Limited on or before 2
                            working days
                            prior to the effective date.<br><br>
                            [3] 為保障客戶之利益及私隱，所有來電訊息只會儲存48小時。 
                            For protecting the Client’s interest and privacy, all messages from callers will be
                            reserved 48
                            hours only.<br><br>
                            [4] 專線電話服務只限代接後留言及轉駁電話，而不包括任何產品查詢，報價及客戶服務的工作。
                            The telephone services provided by CountAudit Secretarial Limited can be only used
                            for receiving
                            calls, leaving messages and transferring calls on behalf of the Client, not
                            including any
                            services related to product inquires, making quotations and customer services. <br>
                            <br>
                            <br><br>
                            12 若有本公司不能控制的事件（包括客戶的作為或不作為），影響本公司按原定計劃履行本服務的能力，本公司或會酌加服務費用。
                            For CountAudit Secretarial Limited uncontrollable events, including Client act or
                            omission to
                            act, which affects CountAudit Secretarial Limited's ability to perform the service,
                            CountAudit
                            Secretarial Limited reserves the right to charge extra fee. 
                            <br><br>
                            13 客戶應於賬單上列明的到期日前繳交有關款項，否則本公司有權終止其服務而不作另行通知。同時客戶有責任於到期日前確保已繳交之費用已由本公司收取並確認。 
                            The Client shall settle the fees before the due date specified on the relevant
                            invoices,
                            otherwise, CountAudit Secretarial Limited has right to suspend the services to the
                            Client. The
                            Client has the responsibility to ensure that their payments are received and
                            identified by
                            CountAudit Secretarial Limited before the due date specified on the relevant
                            invoices.
                            <br><br>
                            14 若客戶要求重啟因延遲繳款或欠款被終止的服務，本公司將會向客戶收取於終止期間的相關服務費用。 
                            If Client requests to reactivate the services which has been suspended by CountAudit
                            Secretarial
                            Limited due to late payment or overdue situation, CountAudit Secretarial Limited
                            shall charge
                            the Client the service fees for the suspended period.
                            <br><br>
                            15 客戶如需更改服務指令、內容，需以書面形式通知本公司，及繳付相關費用。
                            If the Client requires to amend service instructions, contents, a written notice is
                            required to
                            provide to CountAudit Secretarial Limited, and the related service fees shall be
                            applied.
                            <br><br>
                            16
                            客戶或客戶代表所提供的一切資訊（“客戶資訊”）均為準確與完整的。本公司將依賴所獲提供的客戶資訊，本公司不會對客戶資訊進行任何評估或核證，也不會對任何錯誤資訊所引致之損失負責。
                            The information provided by the Client (“Client Information”) must be accurate and
                            complete.
                            CountAudit Secretarial Limited will depend on what the Client provide, and
                            CountAudit
                            Secretarial Limited shall not do any evaluation or certification about the Client
                            Information
                            and shall not be responsible for any loss suffered due to the inaccurate or
                            incomplete
                            information.
                            <br><br>
                            17 就以下情況，本公司有權終止服務而不作任何通知；同時亦無須為停止提供服務，而負上法律責任或承擔任何被索償的後果。
                            Under the following circumstances, CountAudit Secretarial Limited reserves all
                            rights to
                            terminate services without any prior notice. CountAudit Secretarial Limited shall
                            bear no legal
                            responsibilities nor shall be liable for any claims or compensation for
                            discontinuing services.
                            <br><br>


                            [1]   客戶未能按時繳交費用，包括服務費、手續費或轉寄郵件費用；或未能及時更新商業登記；
                            The Client has failed to settle any service fees, handing fees or reimbursements of
                            postage, or
                            to renew business registration on time;
                            <br><br> [2] 客戶涉嫌進行或涉及任何非法、違例或詐騙活動；
                            In suspicion of the Client is involving or carrying out a fraud and any illegal or
                            improper
                            activities;
                            <br><br> [3] 客戶涉嫌利用本公司提供的服務作展銷會或招聘會等活動；
                            In suspicion of the Client is using provided services to hold any promotional sales
                            or public
                            recruitment events;
                            <br><br> [4] 客戶涉嫌在未經本公司許可下，把服務轉移或分配至任何第三者使用。
                            In suspicion of the Client is transferring or assigning any or part of the services
                            to any other
                            parties, without the prior authorization from CountAudit Secretarial Limited.
                            <br><br>
                            18 如有任何爭議，本公司將保留最終決定權。
                            Should any disputes arise, the decision of CountAudit Secretarial Limited shall be
                            final.

                        </td>
                    </tr>
                </table>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>

                <table class="form-table mt-0">
                    <tr>
                        <td>責任範圍 LIMITATION OF LIABILITY <br><br>

                            19 客戶已知悉因語言、文字或電子通訊的限制，如服務受阻、延誤或中斷、或任何錯漏，本公司的責任只限於其服務受影響的服務費，本公司不會因上述原因而負上其他責任。
                            The Client acknowledges that due to the imperfect nature of verbal, written and
                            electronic
                            communications, CountAudit Secretarial Limited is not responsible for any failure to
                            render any
                            service, or any delay or interruption of any service, the sole obligation is limited
                            to the
                            service charges during the affected period. <br><br>

                            20 客戶同意不會因服務受阻、延誤或中斷、或任何錯漏而引致的直接或間接損失(包括業務及收益之損失)而提出索償。
                            The Client agrees to waive, and agrees not to make, any claims for damages, direct
                            or
                            consequential, including with respect to lost business or profits, arising out any
                            service, any
                            error or omission with respect there to, or any delay or interruption of services.
                            <br><br>
                            協議期限與終止 SERVICE PERIOD AND TERMINATION
                            <br><br>

                            21 本次服務由服務生效日開始計算，其後服務期會按照客戶每次繳付的服務週期而延續，而本申請表之內容亦會於新延續的服務期內適用。
                            The service period starts from the effective date of the service plan and the
                            contract period
                            will be extended according to the period covered by each payment from the Client.
                            The content of
                            this application form will be applicable within the extended contract period.
                            <br><br>

                            22 未經本公司許可下，客戶不能在首張合約期之結束日期終止服務。
                            The Client is not allowed to terminate the service before the end date of the first
                            contract
                            period unless prior approval from CountAudit Secretarial Limited is obtained.
                            <br><br>

                            23 提早終止服務並不會退回已繳交之服務費用。
                            Service fee will not be refunded for early termination.
                            <br><br>
                            資料保護DATE PROTECTION
                            <br><br>
                            24 本公司可收集、使用、傳輸、儲存或以其他方式處理（統稱“處理”）可能與個別人士有關的客戶資訊（“個人資料”）。本公司處理個人資料時，將遵照適用的法律及專業守則。
                            The Company may collect, use, transfer, store or otherwise process (collectively
                            referred to as
                            the "processing") the information provided by the Clients, which may include
                            personal
                            information. The processing of those data will be in compliance with applicable laws
                            and
                            professional codes of practice.
                            <br><br>

                            25 客戶同意在本公司在為客戶提供服務的情況下向第三者提供與客戶有關之資料。本公司亦將要求代本公司處理個人資料的任何服務供應商，遵守該等規定。
                            The Client agrees CountAudit Secretarial Limited to provide customer-related
                            information to
                            third parties for services to be provided to the Client by CountAudit Secretarial
                            Limited.
                            CountAudit Secretarial Limited will also request any third party service providers
                            to be in
                            compliance with applicable laws and professional codes of practice.
                            <br><br>

                            26 客戶同意接收本公司推廣優惠之資訊，如客戶日後不欲繼續接收有關本公司推廣資訊，可隨時通知本公司停止有關資訊之發送。
                            The Client agrees to receive promotional information from CountAudit Secretarial
                            Limited. Should
                            the Client determines not to continue receiving such information, the Client can
                            inform
                            CountAudit Secretarial Limited and cease the receipt of the promotional information.
                            <br><br>

                            不可抗力FORCE MAJEURE <br><br>


                            27 若因客戶及本公司合理控制以外的情況而出現違反本申請表的情況，客戶及本公司均無須負責（付款責任除外）。
                            The Client and CountAudit Secretarial Limited shall not be liable (except payment
                            obligations)
                            for any violation of the application form due to circumstances beyond the reasonable
                            control of
                            the Client and CountAudit Secretarial Limited.
                            <br><br>

                            適用法律與爭議解決APPLICABLE LAW AND DISPUTE RESOLUTION
                            <br><br>

                            28
                            本申請表受香港特別行政區法律管轄，且應當依照香港特別行政區法律進行解釋。雙方因本申請表而發生的爭議，應友好協商解決。經友好協商不成的會提交香港國際仲裁中心進行仲裁。
                            This application form shall be governed by and construed in accordance with the Laws
                            of the Hong
                            Kong Special Administrative Region. Both parties by this application form of
                            disputes shall be
                            settled through friendly consultations. If the dispute cannot be resolved, it will
                            be settled by
                            Hong Kong International Arbitration Center for arbitration.
                            <br><br>

                            其他事項OTHER BUSINESS
                            <br><br>

                            29 本申請表構成雙方就本服務及本申請表所涵蓋其他事項的全部協定，並取代先前一切有關的協議、諒解、聲明。
                            The Application Form constitutes the entire agreement of all matters covered
                            regarding the
                            service and supersede the previous all relevant agreements, understandings and
                            declarations.
                            <br><br>

                            30 雙方可用電子方式簽署本申請表（及其修訂），各方可在本申請表的不同副本上簽署。本申請表或任何其附件的修訂，必須經雙方書面同意。
                            Both sides can electronically sign the application form (and its amendments), the
                            parties sign
                            on different copies of the application form. Any amendments on the Application Form
                            or on its
                            Appendix(es) must be agreed by both parties in writing.
                            <br><br>

                            31 本申請表的任何條文（不論全部或部分）若被認定為不合法、無效或因其他理由不能執行，本申請表其他條文仍具有十足效力。
                            If any of the provisions of the Application Form (whether in whole or in part)
                            identified as
                            illegal, void, or for any other reason, unable to perform, the other provisions
                            remain in full
                            force and in effect.
                            <br><br>

                            32 本公司不承擔任何與本服務相關的客戶的管理層責任。
                            CountAudit Secretarial Limited does not undertake any relevant client management
                            responsibility.
                            <br><br>

                            33 現有客戶續約本公司服務最少6個月起。
                            Existing Customers renewal to CountAudit Secretarial Limited with not less  than
                            6-month
                            commitment period and agree to the relevant terms and conditions.


                        </td>
                    </tr>
                </table>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <div class="blank-area">- BLANK AREA -</div>
                <table class="form-table mt-0">
                    <tr>
                        <td class="text-center orange-yellow-bg fw-bold">付款方法 Payment Methods

                        </td>

                    </tr>
                    <tr>
                        <td>

                            客戶可以用以下途徑繳付款項 Client can settle the payment by following methods <br><br>
                            (I)親身付款 Pay in person<br>
                            (II)存入現金或轉帳至匯豐銀行(戶口號碼: 747-122000-838)<br>
                            Direct deposit into HSBC (Account No.: 747-122000-838)<br>
                            (III)劃線支票抬頭「CountAudit」至以下地址: 九龍荔枝角永康街18號永康中心11樓C室<br>
                            Crossed cheque payable to “CountAudit” to following address: Flat C, 11/F., Wing
                            Hong Centre, 18
                            Wing Hong Street, Lai Chi Kok, Kowloon<br>
                            (IV)轉數快 (轉數快識別號碼: 0818617) FPS Identifier: 0818617<br>
                            (V)網上連結支付Online Payment: https://app.cardup.hk/collect/pay/countaudit
                            (網上付款系統或設相關手續費)<br>
                            #付款後請提供入數紙/截圖作紀錄



                        </td>
                    </tr>
                </table>

                <table class="form-table mt-0">
                    <tr>
                        <td class="text-center orange-yellow-bg fw-bold">聲明 Declaration


                        </td>

                    </tr>
                    <tr>
                        <td>




                            本人茲證實上述資料確實無誤，並已知悉及同意以上所有條款。 <br> <br>

                            I have read and agreed with all the terms and conditions above. <br><br>




                            <table class="border-0 mt-5">
                                <tr>
                                    <td class="fit border-0">
                                        <div class="sign-line"></div>
                                        <div>
                                            客戶簽名 Applicant ‘s Signature</div>
                                    </td>
                                    <td class="fit border-0">
                                        <div class="sign-line"></div>

                                        <div>
                                            日期 Date</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="fit border-0 pt-4">
                                        <div class="sign-line"></div>

                                        <div>
                                            客戶姓名 Applicant’s Name
                                        </div>
                                    </td>
                                    <td class="fit border-0"></td>
                                </tr>
                            </table>





                        </td>
                    </tr>
                </table>

            </div>
        </div>
        <?php
    }
    ?>



    </div>


</div>

<script type="text/javascript">
$(function() {


    $('.print-btn').click(function() {

        window.print();
    })
})
</script>

<?php get_footer(); ?>
</body>

</html>