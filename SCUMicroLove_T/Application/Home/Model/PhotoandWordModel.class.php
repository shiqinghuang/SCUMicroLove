<?php
/**
 * Created by PhpStorm.
 * User: delll
 * Date: 2015/9/20
 * Time: 10:26
 */
namespace Home\Model;
use Think\Model;

class PhotoandWordModel extends Model
{
    /**
     * @return object
     */
    public function get_obj()
    {
        $obj = new Model("photoandword");
        return $obj;
    }

}
?>