<?php defined('SYSPATH') or die('No direct access allowed.');

class Twitter_Core
{
    public $format = 'xml';

    public $resource;

    public $params;

    public $version = 1;

    public $url = 'http://api.twitter.com/';

    public static $instance = null;

    public $config = array();

    /**
     * Singleton
     * @author  Andreas Diepenbrock
     * @static
     * @return
     */
    public static function instance(array $config = null){
        if(!self::$instance){
            self::$instance = new self($config);
        }
        return self::$instance;
    }

    public function __construct(array $config = null){
        $this->config = $config;
    }

    /**
     * Sets the Resource for the Request
     *
     * @author  Andreas Diepenbrock
     * @example statuses/public_timeline    ;   users/show
     * @param   $resource        The resource which should be get
     * @return  Twitter_Core
     */
    public function setResource($resource){
        $this->resource = $resource;

        return $this;
    }

    /**
     * Sets the Format for the request
     *
     * @author  Andreas Diepenbrock
     * @param   $format          The request should be done in this format
     * @return  Twitter_Core
     */
    public function setFormat($format){
        $this->format = $format;

        return $this;
    }

    /**
     * Array for the Parameters for the Request
     *
     * @author  Andreas Diepenbrock
     * @example setParams(array('screen_name' => 'somorok'))
     * @param   $params          Array with parameters to get e.g. screen_name
     * @return  Twitter_Core
     */
    public function setParams(array $params){
        if(!empty($params)){
            foreach($params as $key => $value){
                $this->params .= "$key=$value&";
            }
        }
        if(substr($this->params, -1) === '&'){
            $this->params = substr($this->params, 0, -1);
        }
        return $this;
    }

    public function setUrl($url){
        $this->url = $url;

        return $this;
    }

    /**
     * Executes the Request
     *
     * @author  Andreas Diepenbrock
     * @return  string
     */
    public function execute(){
        if(!empty($this->config['version']) || $this->config['version'] === false){
            $url = $this->url.$this->resource.'.'.$this->format.'?'.$this->params;
        } else {
            $url = $this->url.$this->version.'/'.$this->resource.'.'.$this->format;
            if(isset($this->params)){
                $url .= $this->params;
            }
        }
        return file_get_contents($url);
    }
}
?>