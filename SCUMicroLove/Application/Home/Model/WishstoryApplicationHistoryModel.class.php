<?php
/**
 * Created by PhpStorm.
 * User: delll
 * Date: 2015/9/12
 * Time: 21:51
 */
namespace Home\Model;
use Think\Model;

class WishstoryApplicationHistoryModel extends Model
{
    /**
     * @return object
     */
    public function get_obj()
    {
        $obj = new Model("wishstoryapplicationhistory");
        return $obj;
    }

}