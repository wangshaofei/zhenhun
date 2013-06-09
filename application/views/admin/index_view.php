<?php

?>
<?php include dirname(__DIR__) . '/header.php';
include dirname(__DIR__) . '/common.php';
?>
<body>
<?php include dirname(__DIR__) . '/header_bar.php';?>
<div class="admin container">
    <div>
        <ul>
            <li><a href="<?php base_url();?>admin/users">user</a></li>
        </ul>
    </div>
    <div>
        <ul id="metadata_item">
            <?php foreach($items as $k => $v){ ?>
            <li><a href="#" item_name="<?php echo $v['item_name'];?>"><?php echo $v['item_name']; echo '('.$v['count'].')'?></a></li>
            
            <?php } ?>
        </ul>
    </div>
    <div><table id="list">
            <tr>
                <th>item_name</th>
                <th>name</th>
                <th>value</th>
                <th>handle</th>
            </tr>
        <?php foreach ($list as $key => $value) {
        ?>
            <tr>
                <td><?php echo $value['item_name'] ?></td>
                <td><?php echo $value['name'] ?></td>
                <td><?php echo $value['value'] ?></td>
                <td id="<?php echo $value['id']; ?>"><a href="#" name="delete" >delete</a>|<a href="#" name="update">update</a></td>
            </tr>
        <?php
        } ?>
            
            <tr>
                <td><input submitfor="submit_metadata" id="item_name" /></td>
                <td><input submitfor="submit_metadata" id="name" /></td>
                <td><input submitfor="submit_metadata" id="value" /></td>
                <td><a id="submit_metadata" href="#">submit</a></td>
            </tr>
       </table></div>
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
            $('#submit_metadata').easy_submit();
            $('#value').onlyForNumber();
            $('#list').find('a[name=delete]').live('click',function(){
                var id = $(this).parent().attr('id');
                $.ajax({
                    url:base_url + 'index.php/ajax/deleteMetadata',
                    dataType : 'json',
                    type:'post',
                    data:{'id':id},
                    success : function(d){
                        if(d['r']){
                            location.reload();
                        }else{
                            
                        }
                    }
                    
                });
            });
            $('#metadata_item a').click(function(){
                $.ajax({
                    url : base_url + 'index.php/ajax/getMetadataByItem/'+ $(this).attr('item_name'),
                    dataType : 'json',
                    type : 'get',
                    success : function(d){
                        if(d.length > 0){
                            $('#list tr:not(:first-child):not(:last-child)').remove();
                            var html = $('#list tr:first-child').autoFill({
                                'obj' : d,
                                'tmp': '<tr><td>{item_name}</td><td>{name}</td><td>{value}</td><td id="{id}"><a href="#" name="delete">delete</a>|<a href="#" name="update">update</a></td></tr>'
                            });
                            
                            $('#list tr:first-child').after(html);
                        }
                    }
                });
            });
            
        });
    </script>

</body>
</html>
