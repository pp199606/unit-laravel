<?php
/**
 * Created by PhpStorm
 * User: xiaozhu
 * Date: 2019/11/14
 * Time: 10:44
 */

namespace Smallzhu\UnitLaravel\Http\Controllers;


use Illuminate\Routing\Controller;

class TestController extends Controller
{
    public function index()
    {
        echo "这是unit中一个测试方法";
    }
}