<?php
// city
$city1 = array(
    'name' => 'city1',
    'value' => set_value('city1',''),
    'maxlength' => '100',
    'class' => 'input_text input_text_city select'
);
$birth_city = array(
    'name' => 'birth_city',
    'value' => set_value('birth_city',''),
    'maxlength' => '100',
    'class' => 'input_text input_text_city select'
);
$nationality = array(
    'name' => 'nationality',
    'value' => set_value('nationality',''),
    'maxlength' => '100',
    'class' => 'input_text input_text_city select'
);



?>
<?php include dirname(__DIR__) . '/header.php';?>
<body>
<?php include dirname(__DIR__) . '/header_bar.php';?>
<div class="container">
    <div class="nav" ><span>男注册 > 步骤</span></div>
    <!-- 步骤列表 -->
    <div class="register_step">
        <ol>
            <li class="first"><span>第一步</span></li>
            <li><span>第二步</span></li>
            <li><span>第三步</span></li>
            <li class="cur"><span>第四步</span></li>
            <li><span>第五步</span></li>
            <li><span>第六步</span></li>
        </ol>
    </div>

    <!-- 正文 -->
    <div class="register_step_content step3">
        <div class="register_title">基本信息创建</div>
        <div class="errorTip"><?php echo validation_errors(); ?></div>
        <?php echo form_open('register/save_member_extends_step4');?>
        <?php echo form_hidden('step',4);?>
        <?php echo form_hidden('member_id',$member_id);?>
            <table>
                <tr><td class="table_label step4"><span>*</span> 您吸烟吗？:</td><td>
                        <input type="radio" name="smoke" value="1" <?php echo set_radio('smoke', '1'); ?>/>吸烟
                        <input type="radio" name="smoke" value="2" <?php echo set_radio('smoke', '2'); ?>/>不吸烟
                        <div class="errorTip2" id="smoke_errorTip"></div>
                    </td></tr>
                <tr><td><span>*</span> 您喝酒吗？:</td><td>
                        <input type="radio" name="drink" value="1" <?php echo set_radio('drink', '1'); ?>/>喝酒
                        <input type="radio" name="drink" value="2" <?php echo set_radio('drink', '2'); ?>/>不喝酒
                        <div class="errorTip2" id="drink_errorTip"></div>
                    </td></tr>
                <tr><td class="table_label"><span>*</span> 您的出生地:</td><td class="table_label2">
                    <?php 
                    echo form_dropdown('country',$country,'','id="contry" class="input_text input_text_city select"'); 
                    echo form_dropdown('birth_city',array(),'','id="birth_city" class="input_text input_text_city select"'); 
                    //echo form_dropdown('city',array(),'','id="city" class="input_text input_text_city select"'); 
                    ?></td></tr>
                
                
                <tr><td><span>*</span> 你的国籍:</td><td>
                        <?php 
                    echo form_dropdown('nationality',$country,'','id="nationality" class="input_text input_text_city select"'); 
                    //echo form_dropdown('state',array(),'','id="state" class="input_text input_text_city select"'); 
                    //echo form_dropdown('city',array(),'','id="city" class="input_text input_text_city select"'); 
                    ?>
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
<?php include dirname(__DIR__) . '/body_end.php';?> </body>
<script>
city_select('contry','birth_city','','<?php echo base_url(); ?>index.php/ajax/getCity/',function(){});
city_select('nationality','','','<?php echo base_url(); ?>index.php/ajax/getCity/',function(){});
</script>
</html>