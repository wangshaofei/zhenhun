<?php include 'header.php'; ?>
<body>
    <?php include 'common.php'; ?>
    <?php include 'header_bar.php'; ?>
    <div class="container">
        <!-- 搜索条件 -->
        <div class="main_left">
            <p class="title">会员搜索</p>
            <div class="item">
                <p>会员类别:</p>
                <div class="opt">
                    <label><input type="radio" name="gender" checked />征婚男</label>
                    <label><input type="radio" name="gender" />征婚女</label>
                </div>
            </div>
            
            <div class="item">
                <p>国家地区:</p>
                <div class="opt col3">
                    <label><input type="text" class="inputtext" /></label>
                    <label><input type="text" class="inputtext"  /></label>
                    <label><input type="text" class="inputtext"  /></label>
                </div>
            </div>
            
            <div class="item">
                <p>签证种类:</p>
                <div class="opt">
                    <label><input type="checkbox" name="certificate" checked />定居签证</label>
                    <label><input type="checkbox" name="certificate" />学习签证</label>
                    <label><input type="checkbox" name="certificate" />过境签证</label>
                    <label><input type="checkbox" name="certificate" />职业签证</label>
                    <label><input type="checkbox" name="certificate" />旅游签证</label>
                </div>
            </div>
                        
            <div class="item">
                <p>会员年龄:</p>
                <div class="opt">
                    <label><input type="text" class="inputtext select" />至</label>
                    <label><input type="text" class="inputtext select"  />岁</label>
                </div>
            </div>
                        
            <div class="item">
                <p>会员身高:</p>
                <div class="opt">
                    <label><input type="text" class="inputtext select" />至</label>
                    <label><input type="text" class="inputtext select"  />cm</label>
                </div>
            </div>
                        
            <div class="item">
                <p>会员相貌:</p>
                <div class="opt">
                    <label><input type="text" class="inputtext select" />至</label>
                    <label><input type="text" class="inputtext select"  />分</label>
                </div>
            </div>
                        
            <div class="item">
                <p>会员身材:</p>
                <div class="opt">
                    <label><input type="text" class="inputtext select" />至</label>
                    <label><input type="text" class="inputtext select"  />分</label>
                </div>
            </div>
            
            
            <div class="item">
                <p>婚姻状况:</p>
                <div class="opt">
                    <label><input type="checkbox" name="certificate" checked />单身</label>
                    <label><input type="checkbox" name="certificate" />离婚</label>
                    <label><input type="checkbox" name="certificate" />准备离婚</label>
                    <label><input type="checkbox" name="certificate" />正在离婚</label>
                    <label><input type="checkbox" name="certificate" />丧偶</label>
                </div>
            </div>
            
            <div class="item">
                <p>小孩:</p>
                <div class="opt">
                    <label><input type="radio" name="gender" checked />有</label>
                    <label><input type="radio" name="gender" />没有</label>
                </div>
            </div>
            
            <div class="item">
                <p>工作状态:</p>
                <div class="opt">
                    <label><input type="checkbox" name="certificate" checked />雇员</label>
                    <label><input type="checkbox" name="certificate" />学生</label>
                    <label><input type="checkbox" name="certificate" />自雇佣</label>
                    <label><input type="checkbox" name="certificate" />失业主</label>
                    <label><input type="checkbox" name="certificate" />失业</label>
                    <label><input type="checkbox" name="certificate" />不工作</label>
                </div>
            </div>
            
            <div class="item">
                <p>最低年收入:</p>
                <div class="opt">
                    <label><input type="radio" name="gender" checked />人民币</label>
                    <label><input type="radio" name="gender" />美元</label>
                    <label><input type="radio" name="gender" />加拿大元</label>
                    <label><input type="radio" name="gender" />澳元</label>
                    <label><input type="radio" name="gender" />新西兰元</label>
                    <label><input type="radio" name="gender" />欧元</label>
                    <label><input type="radio" name="gender" />英镑</label>
                    <label><input type="radio" name="gender" />日元</label>
                    <label><input type="radio" name="gender" />新加坡元</label>
                    <label><input type="radio" name="gender" />新台币</label>
                    <label><input type="radio" name="gender" />港币</label>
                    <label class="col1"><input type="radio" name="gender" />其他货币折算美元为</label>
                    <label class="col1"><input type="radio" name="gender" />其他货币折算人民币为</label>
                    <label class="col1"><input type="radio" name="gender" />其他货币折算欧元为</label>
                    <p class="topborder"></p>
                    <label class="col1">最低年收入:<input type="text" class="inputtext" />万</label>
                </div>
            </div>
            
            <div class="item">
                <p>最低学历:</p>
                <div class="opt">
                    <label><input type="checkbox" name="certificate" checked />本科</label>
                    <label><input type="checkbox" name="certificate" />硕士</label>
                    <label><input type="checkbox" name="certificate" />博士</label>
                    <label><input type="checkbox" name="certificate" />本科以下</label>
                </div>
            </div>
            
            <div class="item">
                <p>英语水平:</p>
                <div class="opt">
                    
                    <label class="col1"><input type="radio" name="gender" />英语国家在校生或毕业生</label>
                    <label class="col1"><input type="radio" name="gender" />正在准备或已经参加过托福、GRE、雅思等考试</label>
                    <label class="col1"><input type="radio" name="gender" />高校大学英语四级以上</label>
                    <label class="col1"><input type="radio" name="gender" />中学水平</label>
                    
                </div>
            </div>
            
                       
            <div class="item">
                <p>综合评分:</p>
                <div class="opt">
                    <label><input type="text" class="inputtext select" />至</label>
                    <label><input type="text" class="inputtext select"  />分</label>
                </div>
            </div>
            
            <div class="item">
                <p>住房状况:</p>
                <div class="opt">
                    <label><input type="checkbox" name="certificate" checked />租房</label>
                    <label><input type="checkbox" name="certificate" />自由</label>
                </div>
            </div>
            
            
            <div class="item">
                <p>是否吸烟:</p>
                <div class="opt">
                    <label><input type="checkbox" name="certificate" checked />是</label>
                    <label><input type="checkbox" name="certificate" />否</label>
                </div>
            </div>
            
            
            <div class="item">
                <p>是否喝酒:</p>
                <div class="opt">
                    <label><input type="checkbox" name="certificate" checked />是</label>
                    <label><input type="checkbox" name="certificate" />否</label>
                </div>
            </div>
            
            <div class="item">
                <p>出生地:</p>
                <div class="opt">
                    <label><input type="text" class="inputtext select" /></label>
                    <label><input type="text" class="inputtext select"  /></label>
                </div>
            </div>
            
            <div class="item">
                <p>会员国籍:</p>
                <div class="opt">
                    <label><input type="checkbox" name="certificate" checked />美国</label>
                    <label><input type="checkbox" name="certificate" />加拿大</label>
                    <label><input type="checkbox" name="certificate" />澳大利亚</label>
                    <label><input type="checkbox" name="certificate" />新西兰</label>
                    <label><input type="checkbox" name="certificate" />新加坡</label>
                    <label><input type="checkbox" name="certificate" />中国香港</label>
                    <label><input type="checkbox" name="certificate" />中国大陆</label>
                </div>
            </div>
            
            
        </div>
        
        <!--搜索结果-->
        <div class="main_center">
            <div class="sort">
                <label>排序方式:</label>
                <a href="#">年龄</a>
                <a href="#">身高</a>
                <a href="#">年收入</a>
                <a href="#" class="comp">比较选中会员</a>
            </div>
            <div class="members">
                <ul>
                    <?php if(count($member_list) > 0){ ?>
                    <?php foreach($member_list as $k => $v){ ?>
                   <li>
                        <div class="pic"><img class="ajaxOverDetail" detail_id ="<?php echo $v->user_id; ?>" src="<?php echo base_url();?>/uploads/<?php echo $v->user_id; ?>/big/<?php echo $v->portrait; ?>" /></div>
                        <div class="info">
                            <table>
                                <tr><td class="w40">会员:</td><td><?php echo $v->user_name; ?></td></tr>
                                <tr><td>年龄:</td><td><?php echo $v->age; ?></td></tr>
                                <tr><td>学历:</td><td><?php echo get_education($v->education); ?></td></tr>
                                <tr><td>简介:</td><td><?php echo character_limiter($v->intro,10); ?></td></tr>
                            </table>
                        </div>
                        <div class="dib"><input type="checkbox" /></div>
                    </li>
                    <?php } ?>
                    <?php } else { ?>
                    <?php } ?>
                    <li class="hide">
                        <div class="pic"><img src="<?php echo base_url();?>pic/list_member.png" /></div>
                        <div class="info">
                            <table>
                                <tr><td class="w40">会员:</td><td>小草重重</td></tr>
                                <tr><td>年龄:</td><td>26</td></tr>
                                <tr><td>学历:</td><td>硕士</td></tr>
                                <tr><td>简介:</td><td>我曾经有段不幸的婚姻我曾经有段曾经有段不幸的婚姻我曾经有...</td></tr>
                            </table>
                        </div>
                        <div class="dib"><input type="checkbox" /></div>
                    </li>
                    
                </ul>
            </div>
        </div>
        <!-- 推荐会员 -->
        <div class="main_right">
            <p>推荐会员</p>
            <ul>
                <li><img src="<?php echo base_url();?>pic/right_pic.png"/></li>
                <li><img src="<?php echo base_url();?>pic/right_pic.png"/></li>
                <li><img src="<?php echo base_url();?>pic/right_pic.png"/></li>
                <li><img src="<?php echo base_url();?>pic/right_pic.png"/></li>
            </ul>
        </div>
        <div class="clear"></div>
        <script src='<?php echo base_url();?>js/jquery-1.7.2.js' ></script>
        <script src='<?php echo base_url();?>js/jquery_extend.js' ></script>
        <script src='<?php echo base_url();?>js/document.ready.js' ></script>
        <?php include 'footer.php'; ?>
    </div>
<?php include 'body_end.php';?> </body>
</html>