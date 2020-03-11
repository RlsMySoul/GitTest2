<?php
namespace app\validate;
use think\Validate;

class User extends Validate
{
    /**
     * 定义验证规则
     * 格式：'字段名'	=>	['规则1','规则2'...]
     *
     * @var array
     */	
	protected $rule = [
//	    'name'              =>      'require|max:10|checkName:李炎恢',
//        'price'             =>      'number|between:1,100',
//        'email'             =>      'email'
        'id'      =>      'number|between:1,10'
    ];

//    protected $rule = [
//        'name'      =>      [
//            'require',
//            'max'   =>  10
//        ],
//        'price'     =>      [
//            'number',
//            'between'   =>  '1,100'
//        ],
//        'email'     =>      'email'
//    ];

    /**
     * 定义错误信息
     * 格式：'字段名.规则名'	=>	'错误信息'
     *
     * @var array
     */	
    protected $message = [
//        'name.require'      =>      '用户名不得为空',
//        'name.max'          =>      '姓名不得大于10 位',
//        'price.number'      =>      '价格必须是数字',
//        'price.between'     =>      '价格必须1-100 之间',
//        'email'             =>      '邮箱的格式错误'
    ];

    //场景验证设置
    protected $scene = [
        'insert'        =>      ['name', 'price', 'email'],
        'edit'          =>      ['name', 'price', 'id'],
    ];

    //公共方法的场景验证
//    public function sceneEdit()
//    {
//        $edit = $this->only(['name', 'price'])
//                     ->remove('name', 'max|checkName')
//                     ->append('name', 'number');
//        return $edit;
//    }

    //自定义规则
//    protected function checkName($value, $rule, $data, $field, $title)
//    {
//        //echo $value;
//        //echo $rule;
//        //dump($data);
//        //dump($field);
//        //dump($title);
//        return $value != $rule ? true : '不可以使用李炎恢';
//    }
}
