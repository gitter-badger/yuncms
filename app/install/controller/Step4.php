<?php
// +----------------------------------------------------------------------
// | YunCMS
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://www.yunalading.com All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: jabber <2898117012@qq.com>
// +----------------------------------------------------------------------


namespace app\install\controller;

/**
 * Class Complete
 * @package app\install\controller
 */
class Step4 extends InstallWizard {
    /**
     * @return \think\response\View
     */
    public function index() {
        return view();
    }

    /**
     * 执行安装
     * @return string
     */
    public function setup() {

        return json_encode([]);
    }
}
