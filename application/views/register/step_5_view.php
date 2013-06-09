<?php
// city
$income_begin = array(
    'name' => 'income_begin',
    'value' => set_value('income_begin',''),
    'maxlength' => '100',
    'class' => 'input_text input_text_age select'
);
$income_end = array(
    'name' => 'income_begin',
    'value' => set_value('income_begin',''),
    'maxlength' => '100',
    'class' => 'input_text input_text_age select'
);
$profession = array('0'=>'请选择','1'=>'it','2'=>'物流');
$industry = array('0'=>'请选择','1'=>'it','2'=>'物流');
$constellation = array('0'=>'请选择','1' => '白羊座(Aries)','2' => '金牛座(Taurus)','3' => '双子座(Gemini)','4' => '巨蟹座(Cancer)','5' => '狮子座(Leo)','6' => '室女座(Virgo)','7' => '天秤座(Libra)','8' => '天蝎座(Scorpius)','9' => '人马座(Sagittarius)','10' => '摩羯座(Capricornus)','11' => '宝瓶座(Aquarius)','12' => '双鱼座(Pisces)');



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
            <li><span>第四步</span></li>
            <li class="cur"><span>第五步</span></li>
            <li><span>第六步</span></li>
        </ol>
    </div>

    <!-- 正文 -->
    <div class="register_step_content step5">
        <div class="register_title">选填信息</div>
        <div class="errorTip"><?php echo validation_errors(); ?></div>
        <?php echo form_open('register/save_member_extends_step5');?>
        <?php echo form_hidden('step',5);?>
        <?php echo form_hidden('member_id',$member_id);?>
            <table>
                <tr><td class="table_label step5">你的职业:</td><td><?php 
                echo form_dropdown('profession',$profession,'','id="profession" class="input_text input_text_city select"');
                ?></td></tr>
                <tr><td>你所在的行业:</td><td><?php 
                echo form_dropdown('industry',$industry,'','id="industry" class="input_text input_text_city select"'); 
                
                ?></td></tr>
                <tr><td>你对婚前协议的态度:</td><td>
                        <input type="radio" name="treaty" value="1" <?php echo set_radio('treaty', '1'); ?>/>愿意签
                        <input type="radio" name="treaty" value="2" <?php echo set_radio('treaty', '2'); ?>/>不愿意签
                        <input type="radio" name="treaty" value="3" <?php echo set_radio('treaty', '3'); ?>/>无所谓
                    </td></tr>
                <tr><td>宗教:</td><td>
                        <input type="radio" name="religion" value="1" <?php echo set_radio('religion', '1'); ?>/>基督教
                        <input type="radio" name="religion" value="2" <?php echo set_radio('religion', '2'); ?>/>佛教
                        <input type="radio" name="religion" value="3" <?php echo set_radio('religion', '3'); ?>/>伊斯兰教
                        <input type="radio" name="religion" value="4" <?php echo set_radio('religion', '4'); ?>/>天主教
                        <input type="radio" name="religion" value="5" <?php echo set_radio('religion', '5'); ?>/>其他
                        <input type="radio" name="religion" value="6" <?php echo set_radio('religion', '6'); ?>/>隐私
                    </td></tr>
                <tr><td>性格:</td><td>
                        <input type="radio" name="disposition" value="1" <?php echo set_radio('disposition', '1'); ?>/>含蓄内向
                        <input type="radio" name="disposition" value="2" <?php echo set_radio('disposition', '2'); ?>/>开朗外向
                    </td></tr>
                <tr><td>宠物:</td><td>
                        <input type="radio" name="pet" value="1" <?php echo set_radio('pet', '1'); ?>/>很喜欢
                        <input type="radio" name="pet" value="2" <?php echo set_radio('pet', '2'); ?>/>不喜欢
                        <input type="radio" name="pet" value="3" <?php echo set_radio('pet', '3'); ?>/>一般
                    </td></tr>
                <tr><td>兄妹:</td><td>
                        <input type="radio" name="brother" value="1" <?php echo set_radio('brother', '1'); ?>/>独生子女
                        <input type="radio" name="brother" value="2" <?php echo set_radio('brother', '2'); ?>/>非独生四女
                    </td></tr>
                <tr><td>你想有小孩吗?</td><td>
                        <input type="radio" name="child" value="1" <?php echo set_radio('child', '1'); ?>/>想有
                        <input type="radio" name="child" value="2" <?php echo set_radio('child', '2'); ?>/>不想有
                        <input type="radio" name="child" value="3" <?php echo set_radio('child', '3'); ?>/>都可以
                    </td></tr>
                <tr><td>AA制:</td><td>
                        <input type="radio" name="aa" value="1" <?php echo set_radio('aa', '1'); ?>/>反对
                        <input type="radio" name="aa" value="2" <?php echo set_radio('aa', '2'); ?>/>赞成
                        <input type="radio" name="aa" value="3" <?php echo set_radio('aa', '3'); ?>/>无所谓
                    </td></tr>
                <tr><td>星座:</td><td><?php
                echo form_dropdown('constellation',$constellation,'','id="constellation" class="input_text input_text_city select"'); 
                ?></td></tr>

                <tr><td>婚后是否愿意妻子工作:</td><td>
                        <input type="radio" name="wife_work" value="1" <?php echo set_radio('wife_work', '1'); ?>/>全职妈妈
                        <input type="radio" name="wife_work" value="2" <?php echo set_radio('wife_work', '2'); ?>/>全职工作
                        <input type="radio" name="wife_work" value="3" <?php echo set_radio('wife_work', '3'); ?>/>兼职工作
                        <input type="radio" name="wife_work" value="4" <?php echo set_radio('wife_work', '4'); ?>/>小孩上学后工作
                        <input type="radio" name="wife_work" value="5" <?php echo set_radio('wife_work', '5'); ?>/>根据具体情况决定
                    </td></tr>
                
            </table>
            <?php echo form_submit('pass', '跳过','class="passBtn"');?>
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
$('#industry').dropDown();
$('#profession').dropDown();
$('#constellation').dropDown({
    'class':'constellation'
});
</script>
</body>
</html>