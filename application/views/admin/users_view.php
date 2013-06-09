<?php
//var_dump($list);
?>
<?php include dirname(__DIR__) . '/header.php';
include dirname(__DIR__) . '/common.php';
?>
<body>
<?php include dirname(__DIR__) . '/header_bar.php';?>
<div class="admin container">
    <div>
        <ul>
            <li><a href="">user</a></li>
        </ul>
    </div>
    
    <div>
        <form action="<?php echo base_url();?>index.php/admin/handle_user" method="post">
            <table id="list">
                <tr>
                    <th>user name</th>
                    <th>handle</th>
                </tr>
            <?php foreach ($list as $key => $value) {
            ?>
                <tr>
                    <td><?php echo $value->user_name; ?></td>
                    <td><input type="checkbox" name="user_id[]" value="<?php echo $value->user_id; ?>" /></td>
                </tr>
            <?php
            } ?>

           </table>
            <ul>
                <li><input type="radio" name="handle" value="delete" />delete</li>
                <li><input type="radio" name="handle" value="update" />update</li>
                <li><input type="submit" value="submit" /></li>
            </ul>
       </form>
    </div>
    <?php include dirname(__DIR__) . '/footer.php';?>
</div>
    <script src='<?php echo base_url();?>js/config.js' ></script>
    <script src='<?php echo base_url();?>js/jquery-1.7.2.js' ></script>
    <script src='<?php echo base_url();?>js/jquery_extend.js' ></script>
    <script src='<?php echo base_url();?>js/document.ready.js' ></script>
    <script src='<?php echo base_url();?>js/admin.js' ></script>
<?php include dirname(__DIR__) . '/body_end.php';?> 
    <script>
        
        $(document).ready(function(){
            
        });
    </script>

</body>
</html>
