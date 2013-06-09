<?php
// city




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
            <li class="cur"><span>第三步</span></li>
            <li><span>第四步</span></li>
            <li><span>第五步</span></li>
            <li><span>第六步</span></li>
        </ol>
    </div>

    <!-- 正文 -->
    <div class="register_step_content step3">
        <div class="register_title">基本信息创建</div>
        <div class="errorTip"><?php echo validation_errors(); ?></div>
        <?php echo form_open('register/save_member_extends_step3');?>
        <?php echo form_hidden('step',3);?>
        <?php echo form_hidden('member_id',$member_id);?>
            <table>
                <tr><td class="table_label"><span>*</span> 工作状态:</td><td>
                        <input type="radio" name="work_status" value="1" <?php echo set_radio('work_status', '1'); ?>/>雇员
                        <input type="radio" name="work_status" value="2" <?php echo set_radio('work_status', '2'); ?>/>学生
                        <input type="radio" name="work_status" value="3" <?php echo set_radio('work_status', '3'); ?>/>自雇佣
                        <input type="radio" name="work_status" value="4" <?php echo set_radio('work_status', '4'); ?>/>企业主
                        <input type="radio" name="work_status" value="5" <?php echo set_radio('work_status', '5'); ?>/>失业
                        <input type="radio" name="work_status" value="6" <?php echo set_radio('work_status', '6'); ?>/>自己选择不工作
                        <div class="errorTip2" id="work_status_errorTip"></div>
                    </td></tr>
               
                <tr><td><span>*</span> 英语水平:</td><td>
                        <input type="radio" name="english" value="1" <?php echo set_radio('english', '1'); ?>/>熟练
                        <input type="radio" name="english" value="2" <?php echo set_radio('english', '2'); ?>/>一般
                        <input type="radio" name="english" value="3" <?php echo set_radio('english', '3'); ?>/>差
                        <div class="errorTip2" id="english_errorTip"></div>
                    </td></tr>
                
                <tr><td><span>*</span>请简单的介绍下自己:</td><td><textarea class="step4earea" name="intro" placeholder="请简单的介绍自己的爱好、优点，写的越详细具体，系统给你的综合评分越高。 提高匹配成功率。"></textarea></td></tr>

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
</body>
</html>