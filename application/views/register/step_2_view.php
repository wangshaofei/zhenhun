<?php
// 年龄
$age = array( '0'=>'请选择','19' => '小于20', '20' => '20', '21' => '21', '22' => '22', '23' => '23', '24' => '24', '25' => '25', '26' => '26', '27' => '27', '28' => '28', '29' => '29', '30' => '30', '31' => '31', '32' => '32', '33' => '33', '34' => '34', '35' => '35', '36' => '36', '37' => '37', '38' => '38', '39' => '39', '40' => '40', '41' => '41', '42' => '42', '43' => '43', '44' => '44', '45' => '45', '46' => '46', '47' => '47', '48' => '48', '49' => '49', '50' => '50', '51' => '51', '52' => '52', '53' => '53', '54' => '54', '55' => '55', '56' => '56', '57' => '57', '58' => '58', '59' => '59', '60' => '60', '61' => '61', '62' => '62', '63' => '63', '64' => '64', '65' => '65', '66' => '66', '67' => '67', '68' => '68', '69' => '69', '70' => '大于70');
// 身高
$height = array(  '0'=>'请选择','145' => '小与150','150' => '150','151' => '151','152' => '152','153' => '153','154' => '154','155' => '155','156' => '156','157' => '157','158' => '158','159' => '159','160' => '160','161' => '161','162' => '162','163' => '163','164' => '164','165' => '165','166' => '166','167' => '167','168' => '168','169' => '169','170' => '170','171' => '171','172' => '172','173' => '173','174' => '174','175' => '175','176' => '176','177' => '177','178' => '178','179' => '179','180' => '180','181' => '181','182' => '182','183' => '183','184' => '184','185' => '185','186' => '186','187' => '187','188' => '188','189' => '189','200' => '大于190');
// 收入
$income = array( '0'=>'请选择','1' => '小于3','3' => '3','4' => '4','5' => '5','6' => '6','7' => '7','8' => '8','9' => '9','10' => '10','12' => '12','15' => '15','20' => '20','25' => '25','30' => '大于25');

?>
<?php include dirname(__DIR__) . '/header.php';
include dirname(__DIR__) . '/common.php';
?>
<body>
<?php include dirname(__DIR__) . '/header_bar.php';?>
<div class="container">
    <div class="nav" ><span>男注册 > 步骤</span></div>
    <!-- 步骤列表 -->
    <div class="register_step">
        <ol>
            <li class="first"><span>第一步</span></li>
            <li class="cur"><span>第二步</span></li>
            <li><span>第三步</span></li>
            <li><span>第四步</span></li>
            <li><span>第五步</span></li>
            <li><span>第六步</span></li>
        </ol>
    </div>

    <!-- 正文 -->
    <div class="register_step_content step2">
        <div class="register_title">基本信息创建</div>
        <div class="errorTip"><?php echo validation_errors(); ?></div>
        <?php echo form_open('register/save_member_match');?>
        <?php echo form_hidden('step',2);?>
        <?php echo form_hidden('member_id',$member_id);?>
        
            <table>
                <tr><td class="table_label"><span>*</span> 国家地区:</td><td class="table_label2">
                    <?php 
                    echo form_dropdown('country',$country,'','id="contry" class="input_text input_text_city select"'); 
                    echo form_dropdown('state',array(),'','id="state" class="input_text input_text_city select"'); 
                    echo form_dropdown('city',array(),'','id="city" class="input_text input_text_city select"'); 
                    ?></td></tr>
                <tr class="hide" id="hide_match_city"><td class="table_label"><span>*</span> 您希望(他/她)的国家地区:</td><td>
                    <?php 
                    echo form_dropdown('match[0][country]',$country,'','id="match_contry" class="input_text input_text_city select"'); 
                    echo form_dropdown('match[0][state]',array(),'','id="match_state" class="input_text input_text_city select"'); 
                    echo form_dropdown('match[0][city]',array(),'','id="match_city" class="input_text input_text_city select"'); 
                    ?></td></tr>
                <tr class="hide"  id="hide_match_city_weight"><td class="table_label"><span>*</span> 如果(他/她)的国家地区不符合您的要求:</td><td>
                    <input type="radio" name="match[0][weight]" value="1" <?php echo set_radio('match[0][weight]', '1'); ?>/>绝对不行
                    <input type="radio" name="match[0][weight]" value="2" <?php echo set_radio('match[0][weight]', '2'); ?>/>有影响
                    <input type="radio" name="match[0][weight]" value="3" <?php echo set_radio('match[0][weight]', '3'); ?>/>影响不大
                    <div class="errorTip2" id="match0weight_errorTip"></div>
                    
                </td></tr>
                
                <tr><td><span>*</span> 签证种类:</td><td id="certificate_contry">
                        <input type="radio" name="certificate" value="1" <?php echo set_radio('certificate', '1'); ?>/>定居签证
                        <input type="radio" name="certificate" value="2" <?php echo set_radio('certificate', '2'); ?>/>学习签证
                        <input type="radio" name="certificate" value="3" <?php echo set_radio('certificate', '3'); ?>/>过境签证
                        <input type="radio" name="certificate" value="4" <?php echo set_radio('certificate', '4'); ?>/>职业签证
                        <input type="radio" name="certificate" value="5" <?php echo set_radio('certificate', '5'); ?>/>旅游签证
                        <div class="errorTip2" style="display:inline;" id="certificate_errorTip"></div>
                    </td></tr>
                
                <tr class='hide'  id="hide_match_certificate"><td><span>*</span> 您希望(他/她)的签证种类:</td><td id="certificate_contry_match">
                        <input type="radio" name="match[1][certificate]" value="1" <?php echo set_radio('match[1][certificate]', '1'); ?>/>定居签证
                        <input type="radio" name="match[1][certificate]" value="2" <?php echo set_radio('match[1][certificate]', '2'); ?>/>学习签证
                        <input type="radio" name="match[1][certificate]" value="3" <?php echo set_radio('match[1][certificate]', '3'); ?>/>过境签证
                        <input type="radio" name="match[1][certificate]" value="4" <?php echo set_radio('match[1][certificate]', '4'); ?>/>职业签证
                        <input type="radio" name="match[1][certificate]" value="5" <?php echo set_radio('match[1][certificate]', '5'); ?>/>旅游签证
                        <br/><div class="errorTip2" style="display:inline;" id="match1certificate_errorTip"></div>
                    </td></tr>
                <tr class="hide" id="hide_match_certificate_weight"><td class="table_label"><span>*</span> 如果(他/她)的签证种类不符合您的要求:</td><td>
                    <input type="radio" name="match[1][weight]" value="1" <?php echo set_radio('match[1][weight]', '1'); ?>/>绝对不行
                    <input type="radio" name="match[1][weight]" value="2" <?php echo set_radio('match[1][weight]', '2'); ?>/>有影响
                    <input type="radio" name="match[1][weight]" value="3" <?php echo set_radio('match[1][weight]', '3'); ?>/>影响不大
                    <div class="errorTip2" style="display:inline;" id="match1weight_errorTip"></div>
                </td></tr>
                
                <tr><td><span>*</span>年龄:</td><td><?php 
                echo form_dropdown('age',$age,'','id="age" class="input_text input_text_city select"');
                
                ?>岁</td></tr>
                
                <tr class="hide" ><td><span>*</span>您希望(他/她)的年龄:</td><td><?php 
                echo form_dropdown('match[2][age_begin]',$age,'','id="match_age_begin" class="input_text input_text_city select"');
                echo '-&nbsp;&nbsp;';
                echo form_dropdown('match[2][age_end]',$age,'','id="match_age_end" class="input_text input_text_city select"');
                ?>岁</td></tr>
                <tr class="hide"><td class="table_label"><span>*</span> 如果年龄大于您的要求:</td><td>
                    <input type="radio" name="match[2][weight_more]" value="1" <?php echo set_radio('match[2][weight]', '1'); ?>/>绝对不行
                    <input type="radio" name="match[2][weight_more]" value="2" <?php echo set_radio('match[2][weight]', '2'); ?>/>有影响
                    <input type="radio" name="match[2][weight_more]" value="3" <?php echo set_radio('match[2][weight]', '3'); ?>/>影响不大
                    <div class="errorTip2" id="match2weight_more_errorTip"></div>
                </td></tr>
                <tr class="hide"><td class="table_label"><span>*</span> 如果年龄小于您的要求:</td><td>
                    <input type="radio" name="match[2][weight_less]" value="1" <?php echo set_radio('match[2][weight]', '1'); ?>/>绝对不行
                    <input type="radio" name="match[2][weight_less]" value="2" <?php echo set_radio('match[2][weight]', '2'); ?>/>有影响
                    <input type="radio" name="match[2][weight_less]" value="3" <?php echo set_radio('match[2][weight]', '3'); ?>/>影响不大
                    <div class="errorTip2" id="match2weight_less_errorTip"></div>
                </td></tr>
                
                <tr><td><span>*</span>身高:</td><td><?php
                echo form_dropdown('height',$height,'','id="height" class="input_text input_text_city select"'); 
                ?>cm</td></tr>
                
                <tr class='hide'><td><span>*</span>您希望(他/她)的身高:</td><td><?php
                echo form_dropdown('match[3][height_begin]',$height,'','id="match_height_begin" class="input_text input_text_city select"'); 
                echo '-&nbsp;&nbsp;';
                echo form_dropdown('match[3][height_end]',$height,'','id="match_height_end" class="input_text input_text_city select"'); 
                ?>cm</td></tr>
                <tr class="hide" id="hide_match_certificate_weight"><td class="table_label"><span>*</span> 如果(他/她)的身高大于您的要求:</td><td>
                    <input type="radio" name="match[3][weight_more]" value="1" <?php echo set_radio('match[3][weight]', '1'); ?>/>绝对不行
                    <input type="radio" name="match[3][weight_more]" value="2" <?php echo set_radio('match[3][weight]', '2'); ?>/>有影响
                    <input type="radio" name="match[3][weight_more]" value="3" <?php echo set_radio('match[3][weight]', '3'); ?>/>影响不大
                    <div class="errorTip2" id="match3weight_more_errorTip"></div>
                </td></tr>
                
                <tr class="hide" id="hide_match_certificate_weight"><td class="table_label"><span>*</span> 如果(他/她)的身高小于您的要求:</td><td>
                    <input type="radio" name="match[3][weight_less]" value="1" <?php echo set_radio('match[3][weight]', '1'); ?>/>绝对不行
                    <input type="radio" name="match[3][weight_less]" value="2" <?php echo set_radio('match[3][weight]', '2'); ?>/>有影响
                    <input type="radio" name="match[3][weight_less]" value="3" <?php echo set_radio('match[3][weight]', '3'); ?>/>影响不大
                    <div class="errorTip2" id="match3weight_less_errorTip"></div>
                </td></tr>
                
                
                <tr><td><span>*</span> 婚姻状况:</td><td>
                        <input type="radio" name="marital_status" value="1" <?php echo set_radio('marital_status', '1'); ?>/>未婚
                        <input type="radio" name="marital_status" value="2" <?php echo set_radio('marital_status', '2'); ?>/>已婚
                        <input type="radio" name="marital_status" value="3" <?php echo set_radio('marital_status', '3'); ?>/>准备离婚
                        <input type="radio" name="marital_status" value="4" <?php echo set_radio('marital_status', '4'); ?>/>正在离婚
                        <input type="radio" name="marital_status" value="5" <?php echo set_radio('marital_status', '5'); ?>/>丧偶
                        <div class="errorTip2" id="marital_status_errorTip"></div>
                    </td></tr>
                <tr class='hide'><td><span>*</span> 您希望(他/她)的婚姻状况:</td><td>
                        <input type="radio" name="match[4][marital_status]" value="1" <?php echo set_radio('match[4][marital_status]', '1'); ?>/>未婚
                        <input type="radio" name="match[4][marital_status]" value="2" <?php echo set_radio('match[4][marital_status]', '2'); ?>/>已婚
                        <input type="radio" name="match[4][marital_status]" value="3" <?php echo set_radio('match[4][marital_status]', '3'); ?>/>准备离婚
                        <input type="radio" name="match[4][marital_status]" value="4" <?php echo set_radio('match[4][marital_status]', '4'); ?>/>正在离婚
                        <input type="radio" name="match[4][marital_status]" value="5" <?php echo set_radio('match[4][marital_status]', '5'); ?>/>丧偶
                        <div class="errorTip2" id="match4marital_status_errorTip"></div>
                    </td></tr>
                <tr class="hide"><td class="table_label"><span>*</span> 如果(他/她)的婚姻状况不符合您的要求:</td><td>
                    <input type="radio" name="match[4][weight]" value="1" <?php echo set_radio('match[4][weight]', '1'); ?>/>绝对不行
                    <input type="radio" name="match[4][weight]" value="2" <?php echo set_radio('match[4][weight]', '2'); ?>/>有影响
                    <input type="radio" name="match[4][weight]" value="3" <?php echo set_radio('match[4][weight]', '3'); ?>/>影响不大
                    <div class="errorTip2" id="match4weight_errorTip"></div>
                </td></tr>
                
                <tr><td><span>*</span> 有无子女:</td><td>
                     <input type="radio" name="has_child" value="1" <?php echo set_radio('has_child', '1'); ?>/>有
                    <input type="radio" name="has_child" value="2" <?php echo set_radio('has_child', '2'); ?>/>没有
                    <div class="errorTip2" id="has_child_errorTip"></div></td>
                </tr>
                <tr class="hide"><td><span>*</span> 您希望(他/她)有无子女:</td><td>
                    <input type="radio" name="match[5][has_child]" value="1" <?php echo set_radio('match[5][has_child]', '1'); ?>/>有
                    <input type="radio" name="match[5][has_child]" value="2" <?php echo set_radio('match[5][has_child]', '2'); ?>/>没有
                    <div class="errorTip2" id="match5has_child_errorTip"></div></td>
                </tr>
                
                 <tr class="hide"><td class="table_label"><span>*</span> 如果(他/她)的子女情况不符合您的要求:</td><td>
                    <input type="radio" name="match[5][weight]" value="1" <?php echo set_radio('match[5][weight]', '1'); ?>/>绝对不行
                    <input type="radio" name="match[5][weight]" value="2" <?php echo set_radio('match[5][weight]', '2'); ?>/>有影响
                    <input type="radio" name="match[5][weight]" value="3" <?php echo set_radio('match[5][weight]', '3'); ?>/>影响不大
                    <div class="errorTip2" id="match5weight_errorTip"></div>
                </td></tr>
                 
                <tr><td><span>*</span> 最低年收入:</td><td>
                        <input type="radio" name="income_type" value="1" <?php echo set_radio('income_type', '1'); ?>/>美元
                        <input type="radio" name="income_type" value="2" <?php echo set_radio('income_type', '2'); ?>/>加拿大元
                        <input type="radio" name="income_type" value="3" <?php echo set_radio('income_type', '3'); ?>/>新西兰元
                        <input type="radio" name="income_type" value="4" <?php echo set_radio('income_type', '4'); ?>/>港币
                        <input type="radio" name="income_type" value="5" <?php echo set_radio('income_type', '5'); ?>/>人民币
                        <div class="errorTip2" id="income_type_errorTip"></div>
                    </td></tr>
                <tr><td></td><td><?php 
                echo form_dropdown('income_begin',$income,'','id="income_begin" class="input_text input_text_city select"');
                
                ?>万到<?php 
                echo form_dropdown('income_end',$income,'','id="income_end" class="input_text input_text_city select"');
                
                ?>万</td></tr>
                
                <tr class='hide'><td><span>*</span> 您希望(他/她)的最低年收入:</td><td>
                        <input type="radio" name="match[6][income_type]" value="1" <?php echo set_radio('match[6][income_type]', '1'); ?>/>美元
                        <input type="radio" name="match[6][income_type]" value="2" <?php echo set_radio('match[6][income_type]', '2'); ?>/>加拿大元
                        <input type="radio" name="match[6][income_type]" value="3" <?php echo set_radio('match[6][income_type]', '3'); ?>/>新西兰元
                        <input type="radio" name="match[6][income_type]" value="4" <?php echo set_radio('match[6][income_type]', '4'); ?>/>港币
                        <input type="radio" name="match[6][income_type]" value="5" <?php echo set_radio('match[6][income_type]', '5'); ?>/>人民币
                        <div class="errorTip2" id="match6income_type_errorTip"></div>
                    </td></tr>
                <tr class='hide'><td></td><td><?php 
                echo form_dropdown('match[6][income_begin]',$income,'','id="match_income_begin" class="input_text input_text_city select"');
                
                ?>万到<?php 
                echo form_dropdown('match[6][income_end]',$income,'','id="match_income_end" class="input_text input_text_city select"');
                
                ?>万</td></tr>
                
                
                <tr class="hide"><td class="table_label"><span>*</span> 如果(他/她)的最低年收入不符合您的要求:</td><td>
                    <input type="radio" name="match[6][weight]" value="1" <?php echo set_radio('match[6][weight]', '1'); ?>/>绝对不行
                    <input type="radio" name="match[6][weight]" value="2" <?php echo set_radio('match[6][weight]', '2'); ?>/>有影响
                    <input type="radio" name="match[6][weight]" value="3" <?php echo set_radio('match[6][weight]', '3'); ?>/>影响不大
                    <div class="errorTip2" id="match6weight_errorTip"></div>
                </td></tr>
                
                
                <tr><td><span>*</span>学历:</td><td>
                    <input type="radio" name="education" value="1" <?php echo set_radio('education', '1'); ?>/>本科
                    <input type="radio" name="education" value="2" <?php echo set_radio('education', '2'); ?>/>硕士
                    <input type="radio" name="education" value="3" <?php echo set_radio('education', '3'); ?>/>博士
                    <input type="radio" name="education" value="4" <?php echo set_radio('education', '4'); ?>/>本科以下
                    <div class="errorTip2" id="education_errorTip"></div>
                </td></tr>
                
                <tr class="hide"><td><span>*</span>您希望(他/她)的学历:</td><td>
                    <input type="radio" name="match[7][education]" value="1" <?php echo set_radio('match[7][education]', '1'); ?>/>本科
                    <input type="radio" name="match[7][education]" value="2" <?php echo set_radio('match[7][education]', '2'); ?>/>硕士
                    <input type="radio" name="match[7][education]" value="3" <?php echo set_radio('match[7][education]', '3'); ?>/>博士
                    <input type="radio" name="match[7][education]" value="4" <?php echo set_radio('match[7][education]', '4'); ?>/>本科以下
                    <div class="errorTip2" id="match7education_errorTip"></div>
                </td></tr>
                <tr class="hide"><td class="table_label"><span>*</span> 如果(他/她)的学历不符合您的要求:</td><td>
                    <input type="radio" name="match[7][weight]" value="1" <?php echo set_radio('match[7][weight]', '1'); ?>/>绝对不行
                    <input type="radio" name="match[7][weight]" value="2" <?php echo set_radio('match[7][weight]', '2'); ?>/>有影响
                    <input type="radio" name="match[7][weight]" value="3" <?php echo set_radio('match[7][weight]', '3'); ?>/>影响不大
                    <div class="errorTip2" id="match7weight_errorTip"></div>
                </td></tr>
                <tr><td><span>*</span> 住房情况:</td><td>
                        <input type="radio" name="house" value="1" <?php echo set_radio('house', '1'); ?>/>租房
                        <input type="radio" name="house" value="2" <?php echo set_radio('house', '2'); ?>/>买房
                        <input type="radio" name="house" value="3" <?php echo set_radio('house', '3'); ?>/>服务同住或公司提供
                        <div class="errorTip2" id="house_errorTip"></div>
                </td></tr>
                <tr class="hide"><td><span>*</span> 您希望(他/她)的住房情况:</td><td>
                        <input type="radio" name="match[8][house]" value="1" <?php echo set_radio('match[8][house]', '1'); ?>/>租房
                        <input type="radio" name="match[8][house]" value="2" <?php echo set_radio('match[8][house]', '2'); ?>/>买房
                        <input type="radio" name="match[8][house]" value="3" <?php echo set_radio('match[8][house]', '3'); ?>/>服务同住或公司提供
                        <div class="errorTip2" id="house_errorTip"></div>
                </td></tr>
                <tr class="hide"><td class="table_label"><span>*</span> 如果(他/她)的住房情况不符合您的要求:</td><td>
                    <input type="radio" name="match[8][weight]" value="1" <?php echo set_radio('match[8][weight]', '1'); ?>/>绝对不行
                    <input type="radio" name="match[8][weight]" value="2" <?php echo set_radio('match[8][weight]', '2'); ?>/>有影响
                    <input type="radio" name="match[8][weight]" value="3" <?php echo set_radio('match[8][weight]', '3'); ?>/>影响不大
                    <div class="errorTip2" id="match7weight_errorTip"></div>
                </td></tr>
            </table>
            <?php echo form_submit('mysubmit', '下一步','class="button"');?>
        <?php echo form_close();?>
    </div>
    <?php include dirname(__DIR__) . '/footer.php';?>
</div>
    
    <script src='<?php echo base_url();?>js/config.js' ></script>
    <script src='<?php echo base_url();?>js/jquery-1.7.2.js' ></script>
    <script src='<?php echo base_url();?>js/jquery_extend.js' ></script>
    <script src='<?php echo base_url();?>js/document.ready.js' ></script>
<?php include dirname(__DIR__) . '/body_end.php';?> 
    <script>
        $(document).ready(function(){
            city_select('contry','state','city','<?php echo base_url(); ?>index.php/ajax/getCity/',function(){
                $('#hide_match_city').show();
            });
            city_select('match_contry','match_state','match_city','<?php echo base_url(); ?>index.php/ajax/getCity/',function(){
                $('#hide_match_city_weight').show();
            });
            $('#age').dropDown({
                'class':'age',
                'callback' : function(){
                    $(this).parents('tr').next().show();
                }
            });
            
            $('#match_age_begin').dropDown({
                'class':'age'
            });
            
            $('#match_age_end').dropDown({
                'class':'age',
                'callback' : function(){
                    $(this).parents('tr').next().show().next().show();
                }
            });
            
            $('#height').dropDown({
                'class':'age height',
                'callback' : function(){
                    $(this).parents('tr').next().show();
                }
            });
            
            $('#match_height_begin').dropDown({
                'class':'age height'
            });
            $('#match_height_end').dropDown({
                'class':'age height',
                'callback' : function(){
                    $(this).parents('tr').next().show().next().show();
                }
            });
            
            $('#income_begin').dropDown({
                'class':'age income'
            });
            $('#income_end').dropDown({
                'class':'age income',
                'callback' : function(){
                    $(this).parents('tr').next().show().next().show();
                }
            });
            $('#match_income_begin').dropDown({
                'class':'age income'
            });
            $('#match_income_end').dropDown({
                'class':'age income',
                'callback' : function(){
                    $(this).parents('tr').next().show();
                }
            });
            
            $('input[name=certificate]').live('click',function(){
                $('#hide_match_certificate').show();
            });
            $('#hide_match_certificate input').live('click',function(){
                $('#hide_match_certificate_weight').show();
            });
            
            $('input[name=marital_status]').click(function(){
                $(this).parents('tr').next().show().find('input').click(function(){
                    $(this).parents('tr').next().show();
                });
            });
            
            
            $('input[name=has_child]').click(function(){
                $(this).parents('tr').next().show().find('input').click(function(){
                    $(this).parents('tr').next().show();
                });
            });
            
            $('input[name=education]').click(function(){
                $(this).parents('tr').next().show().find('input').click(function(){
                    $(this).parents('tr').next().show();
                });
            });
            
            $('input[name=house]').click(function(){
                $(this).parents('tr').next().show().find('input').click(function(){
                    $(this).parents('tr').next().show();
                });
            });
            
        });
        
    </script>
</body>
</html>