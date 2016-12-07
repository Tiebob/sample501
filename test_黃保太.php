<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 2015/3/25
 * Time: 下午 03:40
 */

/**
 * 打招呼
 * 
 * @param string $name 人名
 * 
 */ 
function sayhello( $name = ''){
    if( $name=='') return false;

    print 'Hello, ' . $name;
}