<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH.'third_party/apidoc/Autoloader.php';

/**
 * Twig模版引擎
 *
 */
class Apidoc
{
    public $twig;

    public $config;

    private $data = array();

    /**
     * 读取配置文件twig.php并初始化设置
     *
     */
    public function __construct()
    {
        Apidoc_Autoloader::register();
    }

    public function  run($path_dir='', $output_dir=''){
        $autos = glob($path_dir.'/*.php');
        $classes = array();
        if(!empty($autos) && is_array($autos)) {
            foreach($autos as $path) {
                include_once $path;
            }
        }
        if(!$output_dir){
            $output_dir  = $path_dir.'/apidocs';
        }
        $output_file = 'api.html'; // defaults to index.html

        try {
            $builder = new Crada\Apidoc\Builder($classes, $output_dir, 'Api Title', $output_file);
            $builder->generate();
        } catch (Exception $e) {
            echo 'There was an error generating the documentation: ', $e->getMessage();
        }
        echo 'OK';
    }
}