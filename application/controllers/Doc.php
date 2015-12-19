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

        $this->apidoc->run(APPPATH.'/controllers/v1', FCPATH.'/apidocs/v1');
    }

}
