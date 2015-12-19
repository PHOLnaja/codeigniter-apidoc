# codeigniter-apidoc
##项目说明
* application是codeigniter项目所在目录
* 把[apidoc](https://github.com/calinrada/php-apidoc)放到codeigniter项目的third_party下
* 在codeigniter项目的libraries创建apidoc类
* 使用,直接调用$this->load->library('apidoc'),如本项目中controllers目录下的Doc.php
```javascript
<?php

class Doc extends CI_Controller {
    /**
     * @ApiDescription(section="User", description="Get information about user")
     * @ApiMethod(type="get")
     * @ApiRoute(name="/user/get/{id}")
     * @ApiReturnHeaders(sample="HTTP 200 OK")
     * @ApiReturn(type="object", sample="{'user_id':'int','external_id':'int','extra':{'type':'integer'}}")
     */
    public function run()
    {
        $this->load->library('apidoc');

        $this->apidoc->run(APPPATH.'/controllers', FCPATH.'/apidocs/v1');
    }

}
```


##apidoc语法

* @ApiDescription(section="...", description="...")
* @ApiMethod(type="(get|post|put|delete")
* @ApiRoute(name="...")
* @ApiParams(name="...", type="...", nullable=..., description="...", [sample=".."])
* @ApiHeaders(name="...", type="...", nullable=..., description="...")
* @ApiReturnHeaders(sample="...")
* @ApiReturn(type="...", sample="...")
* @ApiBody(sample="...")

详情请见：[https://github.com/calinrada/php-apidoc/blob/master/README.md](https://github.com/calinrada/php-apidoc/blob/master/README.md)
