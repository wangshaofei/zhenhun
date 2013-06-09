/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */


Config = {
    'vali': {
        'user_name': {'label': '用户名', 'notNull': true, 'leng': [4, 100]},
        'email': {'label': '邮箱', 'notNull': true, 'exp': /^.+@.+$/},
        'mobile_phone': {'label': '电话号码', 'exp': /^(\d{8,15})?$/},
        'password': {'notNull': true, 'label': '密码', 'leng': [6, 100]},
        'agree': {'label': '同意协议', 'select': true},
        'gender': {'label': '性别', 'select': true},
        
        'country': {'label': '国家', 'notNull': true},
        'state': {'label': '省/州', 'notNull': true},
        'city': {'label': '市', 'notNull': true},
        'match[0][country]': {'label': '(他/她)的国家', 'notNull': true},
        'match[0][state]': {'label': '(他/她)的省/州', 'notNull': true},
        'match[0][city]': {'label': '(他/她)的市', 'notNull': true},
        'match[0][weight]' : {'label': '权重', 'select': true},
        'certificate' : {'label': '签证种类', 'select': true},
        'match[1][certificate]' : {'label': '(他/她)的签证种类', 'select': true},
        'match[1][weight]' : {'label': '权重', 'select': true},
        'age' : {'label': '年龄', 'notNull': true},
        'match[2][age_begin]' : {'label': '(他/她)的最小年龄','notNull': true},
        'match[2][age_end]' : {'label': '(他/她)的最大年龄','notNull': true},
        'match[2][weight_more]' : {'label': '权重', 'select': true},
        'match[2][weight_less]' : {'label': '权重', 'select': true},
        'height' : {'label': '身高', 'notNull': true},
        'match[3][height_begin]' : {'label': '(他/她)的最小身高','notNull': true},
        'match[3][height_end]' : {'label': '(他/她)的最大身高','notNull': true},
        'match[3][weight_more]' : {'label': '权重', 'select': true},
        'match[3][weight_less]' : {'label': '权重', 'select': true},
        
        'marital_status' : {'label': '婚姻状况', 'select': true},
        'match[4][marital_status]' : {'label': '(他/她)的婚姻状况', 'select': true},
        'match[4][weight]' : {'label': '权重', 'select': true},
        
        
        'has_child' : {'label': '有无子女', 'select': true},
        'match[5][has_child]' : {'label': '(他/她)的子女状况', 'select': true},
        'match[5][weight]' : {'label': '权重', 'select': true},
        'income_type' : {'label': '币种', 'select': true},
        'match[6][income_type]' : {'label': '(他/她)的币种', 'select': true},
        'match[6][weight]' : {'label': '权重', 'select': true},
        'income_begin' : {'label': '最小收入', 'notNull': true},
        'match[6][income_begin]' : {'label': '(他/她)的最小收入','notNull': true},
        'income_end' : {'label': '最大收入', 'notNull': true},
        'match[6][income_end]' : {'label': '(他/她)的最大收入','notNull': true},
        
        'education' : {'label': '最低学历', 'select': true},
        'match[7][education]' : {'label': '(他/她)的最低学历', 'select': true},
        'match[7][weight]' : {'label': '权重', 'select': true},
        
        'work_status' : {'label': '工作状态', 'select': true},
        'english' : {'label': '英语水平', 'select': true},
        'house' : {'label': '住房清空', 'select': true},
        'intro' : {'label': '自我介绍', 'notNull': true},
        
        'smoke' : {'label': '是否吸烟', 'select': true},
        'drink' : {'label': '是否喝酒', 'select': true},
        'birth_city' : {'label': '出生地',  'notNull': true},
        'nationality' : {'label': '国籍', 'notNull': true}
        
        
    },
    'userDetail' : {
        'Im_aliww': '阿里旺旺',
        'Im_msn': 'MSN',
        'Im_qq': 'QQ',
        'Im_skype': 'SKYPE',
        'Im_yahoo': '雅虎账号',
        'Logins': '登录次数',
        'aa': 'AA制',
        'activation': '激活状态',
        'age': '年龄',
        'birth_city': '出生城市',
        'birthday': '生日',
        'brother': '兄妹几人',
        'certificate': '签证种类',
        'child': '是否想要小孩',
        'city': '城市',
        'constellation': '星座',
        'country': '国家',
        'disposition': '性格',
        'drink': '是否喝酒',
        'education': '学历',
        'email': '邮箱',
        'english': '英语水平',
        'gender': '性别',
        'has_child': '是否有小孩',
        'height': '身高',
        'house': '住房情况',
        'income': '收入',
        'industry': '所在行业',
        'intro': '自我介绍',
        'last_ip': '上次登录IP',
        'last_login': '最近登录时间',
        'marital_status': '婚姻状况',
        'member_extends_id': '用户拓展ID',
        'member_id': '用户ID',
        'member_match_id': '用户匹配ID',
        'mobile_phone': '手机号码',
        'nationality': '国籍',
        'password': '密码',
        'pet': '宠物',
        'phone': '电话号码',
        'portrait': '头像',
        'profession': '职业',
        'real_name': '真实姓名',
        'registered_on': '注册日期',
        'religion': '宗教',
        'smoke': '是否吸烟',
        'state': '州/省',
        'treaty': '婚前协议的态度',
        'user_id': '用户ID',
        'user_level': '用户级别',
        'user_name': '用户名',
        'wife_work': '是否原因妻子婚后工作',
        'work_status': '工作状态'
    }
};