<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2015/7/29
 * Time: 23:23
 */
namespace Home\Model;
use Think\Model;

class WishstoryApplicationModel extends Model
{
    /**
     * @return object
     */
    public function get_obj()
    {
        $obj = new Model("wishstoryapplication");
        return $obj;
    }

}
?>