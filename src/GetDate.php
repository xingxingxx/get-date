<?php
/**
 * Created by PhpStorm.
 * User: xiaoxingping
 * Date: 2017/10/16
 * Time: 15:40
 */

namespace xingxingxx;


class GetDate
{
    public function getDate()
    {
        $data = date('Y-m-d H:i:s', time());
        return 'Hello, This time is ' . $data;
    }
}