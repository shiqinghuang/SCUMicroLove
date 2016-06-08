<?php
/**
 * Created by PhpStorm.
 * User: dell
 * Date: 2015/9/7
 * Time: 23:44
 */
namespace Home\Model;
use Think\Model;

class ClaimantModel extends Model
{
    /**
     * @return object
     */
    public function get_obj()
    {
        $obj = new Model("claimant");
        return $obj;
    }

}
?>