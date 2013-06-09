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
            <li><span>第五步</span></li>
            <li class="cur"><span>第六步</span></li>
        </ol>
    </div>
    <!-- 正文 -->
    <div class="register_step_content step6">
        <div class="register_title">上传头像</div>
        <div class="errorTip"><?php echo validation_errors(); echo $error; ?></div>
        
        <?php echo form_hidden('step',6);?>
        <?php echo form_hidden('member_id',$member_id);?>
            <div class='left'>
                <p>请拖动黄框选中您的头部区域进行形象照裁切</p>
                <div class='uploadPicArea'>
                    <?php
                    if($upload_data){
                        echo '<img id="uploadPic" src="'.  base_url().'uploads/'.$member_id .'/'.$upload_data['file_name'].'"/>';
                    }
                    ?>
                </div>
                
                <ul class='handle'>
                    <li><a href='#'><span class='turn_left'></span>向左旋转</a></li>
                    <li class='upPic'>
                        上传照片
                    </li>
                    <li><a href='#'><span class='turn_right'></span>向右旋转</a></li>
                </ul>
                
            </div>
            <div  class='right'>
                <p>照片不好？ <a href='#' class='default'>重新选择</a></p>
                <p>以下是你的形象照预览，请注意是否清晰</p>
                <div class='bigPic'>
                    <?php
                    if($upload_data){
                        echo '<img src="'.  base_url().'uploads/' . $member_id .'/'.$upload_data['file_name'].'"/>';
                    }
                    ?>
                </div>
                <div class='smallPic'>
                    <?php
                    if($upload_data){
                        echo '<img src="'.  base_url().'uploads/'.$member_id .'/'.$upload_data['file_name'].'"/>';
                    }
                    ?>
                </div>
                <div class='clear'></div>
                <p>以下形象照将不会被审核通过</p>
                <ul class='noPassPic'>
                    <li><img src='<?php echo base_url(); ?>pic/noPassPic1.png'/><span>非本人照片</span></li>
                    <li><img src='<?php echo base_url(); ?>pic/noPassPic2.png'/><span>非头部位置</span></li>
                    <li><img src='<?php echo base_url(); ?>pic/noPassPic3.png'/><span>裸露不庄重</span></li>
                    <li><img src='<?php echo base_url(); ?>pic/noPassPic4.png'/><span>模糊不清晰</span></li>
                </ul>
            </div>
        <div class='clear'></div>
        <?php echo form_open('register/uploadPic'); ?>
            
            <input type="hidden" name="x1" value="" id="x1" />
            <input type="hidden" name="y1" value="" id="y1" />
            <input type="hidden" name="x2" value="" id="x2" />
            <input type="hidden" name="y2" value="" id="y2" />
            <input type="hidden" name="w" value="" id="w" />
            <input type="hidden" name="h" value="" id="h" />
            <input type="hidden" name="s_w" value="300" id="s_w" />
            <input type="hidden" name="s_h" value="" id="s_h" />
            <input type="hidden" name="image_width" value="<?php echo $upload_data['image_width'];?>"/>
            <input type="hidden" name="image_height" value="<?php echo $upload_data['image_height'];?>" />
            <input type="hidden" name="file_name" value="<?php echo $upload_data['file_name'];?>"/>
            <input type="hidden" name="file_ext" value="<?php echo $upload_data['file_ext'];?>"/>
            <input type="hidden" name="member_id" value="<?php echo $member_id;?>"/>
            <input type='submit' name="savePic" class='button' value='完成' />
        </form>
        
        
    </div>
    <?php include dirname(__DIR__) . '/footer.php';?>
    <script src='<?php echo base_url();?>js/jquery-1.7.2.js' ></script>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/imgareaselect-default.css" />
    <script type="text/javascript" src="<?php echo base_url();?>js/jquery.imgareaselect.pack.js"></script>
</div>
    <?php
    echo form_open_multipart('register/uploadPic', 'id="uploadPicForm" ');
    echo form_hidden('member_id',$member_id);
    echo form_upload('userfile', 'upload', 'id="inputPic" class="vhide2"');
    echo form_submit('upload', 'upload','class="vhide2"');
    echo form_close();
    ?>
<?php include dirname(__DIR__) . '/body_end.php';?> 
    <script>
    var srcImgWidth = 300;
    var srcImgheiht = 300;
    $('.upPic').click(function(){
        $('#inputPic').trigger('click').change(function(){
            $('#uploadPicForm').submit();
        });
    });
    
    function preview(img, selection){
        if (!selection.width || !selection.height)
        return;
    
        var bscaleX = 125 / selection.width;
        var bscaleY = 125 / selection.height;
        console.log(srcImgWidth+','+srcImgheiht);
        $('.bigPic img').css({
            width: Math.round(bscaleX * srcImgWidth) + 'px',
            height: Math.round(bscaleY * srcImgheiht) + 'px',
            marginLeft: -Math.round(bscaleX * selection.x1) + 'px',
            marginTop: -Math.round(bscaleY * selection.y1) + 'px'
        });
        
        var sscaleX = 80 / selection.width;
        var sscaleY = 80 / selection.height;

        $('.smallPic img').css({
            width: Math.round(sscaleX * srcImgWidth) + 'px',
            height: Math.round(sscaleY * srcImgheiht) + 'px',
            marginLeft: -Math.round(sscaleX * selection.x1) + 'px',
            marginTop: -Math.round(sscaleY * selection.y1) + 'px'
        });

        $('#x1').val(selection.x1);
        $('#y1').val(selection.y1);
        $('#x2').val(selection.x2);
        $('#y2').val(selection.y2);
        $('#w').val(selection.width);
        $('#h').val(selection.height);  
    }
    
    $(function () {
        $('.uploadPicArea img').imgAreaSelect({ aspectRatio: '1:1', handles: true,
            fadeSpeed: 200, onSelectChange: preview });
        $('#uploadPic').load(function(){
            $(this).css({
                marginTop:Math.round((300 - $(this).height()) / 2)+'px'
            });
            srcImgheiht = $(this).height();
            // 传到后台
            $('#s_h').val(srcImgheiht);
        });
    });
    </script>
</body>
</html>
<!--
array (size=14)
  'file_name' => string 'Sunset.jpg' (length=10)
  'file_type' => string 'image/jpeg' (length=10)
  'file_path' => string 'C:/xampp/htdocs/ci/uploads/' (length=27)
  'full_path' => string 'C:/xampp/htdocs/ci/uploads/Sunset.jpg' (length=37)
  'raw_name' => string 'Sunset' (length=6)
  'orig_name' => string 'Sunset.jpg' (length=10)
  'client_name' => string 'Sunset.jpg' (length=10)
  'file_ext' => string '.jpg' (length=4)
  'file_size' => float 69.52
  'is_image' => boolean true
  'image_width' => int 800
  'image_height' => int 600
  'image_type' => string 'jpeg' (length=4)
  'image_size_str' => string 'width="800" height="600"' (length=24)
-->