/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
$(document).ready(function() {
    $('input[name=email]').inputTip({
        'title': '请填写正确的邮箱格式。'
    });
    $('input[name=user_name]').inputTip({
        'title': '请填写正确的用户名。'
    });
    $('form').checkForm();
    
    $('.ajaxOverDetail').ajaxShowDetail()
    $('.ajaxOverDetail').on({
        'mouseover':function(){
            $(this).ajaxShowDetail();
        },
        'click':function(){
            
        }
    });
});

function city_select(contry_id, state_id, city_id, ajaCityUrl,city_call_back) {
    $('#' + contry_id).dropDown({
        'callback' : function() {
            downLevelList.call(this,state_id);
            var that = this;
            $.ajax({
                url: base_url + 'index.php/ajax/getCerByContry/'+$(that).val(),
                async: 'flase',
                dataType: 'json',
                success: function(d) {
                    if(d.length <= 0) return false;
                    var p = null,name='';
                    if(that.attr('id') === 'contry'){
                        p = $('#certificate_contry');
                        name = 'certificate';
                    }else{
                        p = $('#certificate_contry_match');
                        name = 'match[1][certificate]';
                    }
                    p.empty();
                    for(var i=0; i<d.length;i++){
                        var input = $('<input>');
                        input.attr({
                            'type':'radio',
                            'name':name,
                            'value':d[i]['id']
                        });
                        p.append(input).append(d[i]['name']);
                    }
                }
            });
        }
    });
    $('#' + state_id).dropDown({
        'callback' : function() {
            downLevelList.call(this,city_id);
        }
    });
    $('#' + city_id).dropDown({
        'callback' : function(){
            city_call_back.call(this);
        }
    });

    function downLevelList(id){
        if (this.val()) {
            $.ajax({
                url: ajaCityUrl + this.val(),
                async: 'flase',
                dataType: 'json',
                success: function(d) {
                    o = $('#' + id);
                    o.empty();
                    $('#dropDown_' + id).text('请选择');
                    if(id === state_id){
                        $('#dropDown_' + city_id).text('请选择');
                        $('#' + city_id).empty();
                    }
                    if (!d.length)
                        return false;
                    for (var i in d)
                        for (var j in d[i])
                            o.append($('<option>').attr('value', j).text(d[i][j]));

                }
            });
        }
    }

}


