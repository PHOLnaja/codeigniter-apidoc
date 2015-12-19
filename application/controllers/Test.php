<?php

class Test extends CI_Controller {
    /**
     * @ApiDescription(section="Test", description="Get information about test")
     * @ApiMethod(type="get")
     * @ApiRoute(name="/test/message")
     * @ApiReturnHeaders(sample="HTTP 200 OK")
     * @ApiReturn(type="object", sample="{'user_id':'int','external_id':'int','extra':{'type':'integer'}}")
     */
    public function message($to = 'World')
    {

    }

}

