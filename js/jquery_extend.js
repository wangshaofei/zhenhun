/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */


jQuery.fn.extend({
    'inputTip': function(config) {
        var input_tip = $('<div>');
        input_tip.text(config.title).attr('class', 'input_tip');
        this.on({
            'blur': function() {
                $('body .input_tip').remove();
            },
            'focus': function() {
                $(this).after(input_tip);
                input_tip.css({
                    'top': this.offsetTop - 20 + 'px',
                    'left': this.offsetLeft + 'px'
                });
            }
        });
    },
    'checkForm': function() {

        if (!this.attr('action') || !this.attr('method')) {
            return false;
        }

        var inputs = this.find('select,input[type=text], input[type=password],input[type=radio],input[type=checkbox], textarea,');

        this.submit(function() {
            
            for (var i = 0; i < inputs.length; i++) {
                var name = inputs[i].name;
                var type = inputs[i].type;
                
                if (name === '')
                    continue;
                var v = Config['vali'][name];
                if (!v)
                    continue;

                if (type === 'checkbox') {
                    if (v['select']) {
                        var checked = false;
                        var checkBoxs = $('input[type=checkbox][name=' + name + ']');
                        if(checkBoxs.length <= 0){
                            $('input[type=checkbox]').each(function(){
                                if(this.name === name){
                                    checkBoxs.push($(this));
                                }
                            });
                        }
                        for (var j = 0; j < checkBoxs.length; j++) {
                            var e = checkBoxs[j];
                            if (e.checked) {
                                checked = true;
                                break;
                            }
                        }
                        if (!checked) {
                            errorTip_checkBox(name, v.label + '为必选！');
                            return false;
                        }
                    }
                }
                if (type === 'radio') {
                    if (v['select']) {
                        var checked = false;
                        
                        var checkBoxs = $('input[type=radio][name=' + name + ']');
                        if(checkBoxs.length <= 0){
                            
                            $('input[type=radio]').each(function(){
                                if(this.name === name){
                                    checkBoxs.push(this);
                                }
                            });
                        }
                        
                        
                        for (var j = 0; j < checkBoxs.length; j++) {
                            var e = checkBoxs[j];
                            if (e.checked) {
                                checked = true;
                                break;
                            }
                        }
                        if (!checked) {
                            errorTip_checkBox(name, v.label + '为必选！');
                            return false;
                        }
                    }
                }
                
                var value = inputs[i].value;

                if (v['notNull'] && (value === '' || value == '0')) {
                    $(inputs[i]).errorTip(v.label + '不能为空！');
                    return false;
                }

                if (v['leng'] && (value.length > v['leng'][1] || value.length < v['leng'][0])) {
                    $(inputs[i]).errorTip(v.label + '长度为' + v['leng'][0] + '至' + v['leng'][1] + '位！');
                    return false;
                }
                if (v['exp'] && !v['exp'].test(value)) {
                    //debugger;
                    $(inputs[i]).errorTip(v.label + '格式不正确！');
                    return false;
                }

            }
        });

        function errorTip_checkBox(name, text) {
            $('.errorTip2').each(function() {
                if (!($(this).attr('id'))) {
                    $(this).remove();
                } else {
                    $(this).html('').hide();
                }
            });
            
            name = name.replace(/[\[\]]/g,'');
            
            var error = $('#' + name + '_errorTip');
            
            error.text(text).css({
                'display':'inline-block'
            });
            
            
        }
    },
    'errorTip': function(str) {
        $('.errorTip2').each(function() {
            if (!($(this).attr('id'))) {
                $(this).remove();
            } else {
                $(this).html('').hide();
            }
        });
        
        var allWidth = 0;
        this.parent().children().each(function(){
            allWidth += $(this).width();
           
        });
        var div = $('<div>').attr('class', 'errorTip2').text(str);
        div.css({
            'left': allWidth + 10 + 'px',
            'display':'inline-block'
        });
        this.parent().append(div);
    },
    'dropDown': function(config) {
        var src = $(this);
        src.hide();
        var d = $('<div>');
        d.attr('id','dropDown_'+src.attr('id'));
        d.text(src.find('option[value=' + src.val() + ']').text() !== '' 
        ? src.find('option[value=' + src.val() + ']').text()
        : '请选择');
        d.addClass(src.attr('class'));
        d.css({
            'display': 'inline-block',
            'cursor': 'pointer',
            'line-height': src.height() + 'px',
            'text-align': 'center',
            'width': 'auto',
            'padding': '0 30px 0 20px'
        });
        
        d.click(function(e) {
            var e = e || window.event;
            e.stopPropagation ? e.stopPropagation() : e.cancelBubble = true;
            hideAll();
            os = $('#'+src.attr('id')).find('option');
            if(os.length <= 0) return false;
            var div = $('<div/>');
            div.addClass('div_model');
            
            if(config && config.class){
                div.addClass(config.class);
            }
            var div2 = $('<div/>');
            div2.addClass('clearfix');
            var ul = $('<ul/>');
            for (var i = 1; i < os.length; i++) {
                var li = $('<li/>');
                li.text($(os[i]).text());
                li.attr('value', $(os[i]).val());
                li.click(function(e) {
                    var e = e || window.event;
                    e.stopPropagation ? e.stopPropagation() : e.cancelBubble = true;
                    d.text($(this).text());
                    d.removeCss('width');
                    src.val($(this).attr('value'));
                    hideAll();
                    if(config && config.callback){
                        config.callback.call(src);
                    }
                });

                ul.append(li);
            }
            ul.appendTo(div2);

            div.css({
                'top': e.pageY,
                'left': e.pageX
            });
            div2.appendTo(div);
            div.appendTo($('body'));
        });
        
        src.after(d);
        $('body').click(function() {
            $('.div_model').remove();
        });

        function hideAll() {
            $('.div_model').remove();
        }
    },
    'removeCss' : function(){

    },
    'ajaxShowDetail':function(){
        $(this).on({
            'mouseover':function(e){
                var that = this;
                var ajaxShowDetailDiv_history =  $(this).parent().find('.ajaxShowDetailDiv');
                if(ajaxShowDetailDiv_history.length > 0){
                    ajaxShowDetailDiv_history.show();
                    return false;
                }
                var detail_id = $(this).attr('detail_id');
                $.ajax({
                    url : base_url + 'index.php/ajax/getUserDetail/' + detail_id,
                    dataType : 'json',
                    success : function(d){
                        if(d) createDetailTable(d);
                    }
                });
                function createDetailTable(d){
                    if(d['fullMsg'].length <= 0)  return false;
                    var detail = d['fullMsg'][0];
                    var divOut = $('<div class="ajaxShowDetailDiv">');
                    var divIn = $('<div>');
                    var table = $('<table>');
                    divOut.append(divIn.append(table));
                    for(var i in detail){
                        if(i === 'id') continue;
                        var tr = $('<tr>');
                        var td = $('<td>');
                        td.clone().text(Config['userDetail'][i]).appendTo(tr);
                        td.clone().text(detail[i]).appendTo(tr);
                        tr.appendTo(table);
                    }
                    divOut.on({
                        'mouseover':function(){
                            $(this).show();
                        },
                        'mouseout':function(){
                            $(this).hide();
                        }
                    });
                    divOut.css({
                        'top' : that.offsetTop+that.offsetHeight-20,
                        'left' : that.offsetLeft+that.offsetWidth-20
                    });
                    $(that).after(divOut);
                    //$('body').append(divOut);
                }
            },
            'mouseout' : function(){
                $('.ajaxShowDetailDiv').hide();
            }
        })
        
        
    },
    'easy_submit' : function(){
        $(this).click(function(){
            var items = $('input[submitfor='+$(this).attr('id')+']');
            var data = {};
            if(items.length>0){
                for(var i=0; i<items.length; i++){
                    data[items[i]['id']] = items[i].value; 
                }
            }
            $.ajax({
                url:base_url+'index.php/ajax/addMetadata',
                dataType:'json',
                type : 'POST',
                data:data,
                success:function(d){
                    if(d['r']){
                        location.reload();
                    }
                }
            });
        });
    },
    'onlyForNumber':function(){
        $(this).attr('style',"ime-mode:disabled");
        $(this).on('keydown',function(e){
            var e = e || window.event;
            var code = e.keyCode;
            if((code >= 48 && code <= 57) 
                    || (code >= 96 && code <= 105)
            || code === 8 || code === 9 || code === 37 || code === 39 || code === 46
        ){
                return true;
            }else{
                return false;
            }
            
        });
    },
    'autoFill' : function(config){
        var d  = config.obj;
        var tmp = config.tmp;
        var html = '';
         if(typeof d === 'array' || typeof d === 'object'){
             for(var i=0; i<d.length; i++){
                 html += tmp.replace(/\{([^\{\}]*)\}/g,function(){
                    return d[i][arguments[1]];
                 });
             }
         }
         return html ;
    }
});

