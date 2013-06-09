<?php
// 邮箱
$email = array(
    'name' => 'email',
    'value' => set_value('email', ''),
    'maxlength' => '100',
    'class' => 'input_text',
    'id'  => 'email'
);
// 昵称
$user_name = array(
    'name' => 'user_name',
    'value' => set_value('user_name',''),
    'maxlength' => '100',
    'class' => 'input_text',
    'id' => 'user_name'
);
// 昵称
$mobile_phone = array(
    'name' => 'mobile_phone',
    'value' => set_value('mobile_phone',''),
    'maxlength' => '100',
    'id' => 'mobile_phone',
    'class' => 'input_text'
);
// 密码
$password = array(
    'name' => 'password',
    'value' => set_value('password',''),
    'maxlength' => '100',
    'id' => 'password',
    'class' => 'input_text'
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
            <li class="cur first"><span>第一步</span></li>
            <li><span>第二步</span></li>
            <li><span>第三步</span></li>
            <li><span>第四步</span></li>
            <li><span>第五步</span></li>
            <li><span>第六步</span></li>
        </ol>
    </div>

    <!-- 正文 -->
    <div class="register_step_content">
        <div class="register_title"><?php echo lang('create_your_account'); ?></div>
        <?php echo form_open('register/save_member');?>
        <?php echo form_hidden('step',1);?>
            <table>
                <tr><td class="table_label"><span>*</span> <?php echo lang('email'); ?>:</td><td class="table_label2"><?php echo form_input($email); ?><?php echo form_error('email','<p class="errorTip2" style="left:200px;">','</p>'); ?></td></tr>
                <tr><td><span>*</span> 用户名:</td><td><?php echo form_input($user_name); ?><?php echo form_error('user_name','<p class="errorTip2" style="left:200px;">','</p>'); ?></td></tr>
                <tr><td><span>*</span> 密码:</td><td><?php echo form_password($password); ?></td></tr>
                <tr><td><span>&nbsp;</span>手机号码:</td><td><?php echo form_input($mobile_phone); ?></td></tr>
                <tr><td><span>*</span> 性别:</td><td><input type="radio" name="gender" value="1" <?php echo set_radio('gender', '1'); ?>/>男
                    <input type="radio" name="gender" value="2" <?php echo set_radio('gender', '2'); ?>/>女<div class="errorTip2 gender_errorTip" id="gender_errorTip"></div></td></tr>
                
                <tr>
                    <td></td>
                    <td class="agreeFile"><input type='checkbox' name='agree' value='1' <?php echo set_checkbox('agree', '1',TRUE); ?> >
                        <p>已经阅读和同意征婚网站的服务条款和隐私条款,并同意上述注册信息由征婚网站提供线上/线下服务使用</p>
                        <p class="errorTip2" id="agree_errorTip"></p>
                    </td>
                </tr>
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