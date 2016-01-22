<?php

namespace YiiJsonRPCClient;

use Yii;
use JsonRPC\Client as JsonRPCClient;
/**
 * Description of Client
 *
 * @author wds
 */
class Client {
    
    public $login;
    
    public $password;
    
    public $url;
    
    public $debug;
    
    protected $ClientRPC;


    public function __construct() 
    {
        if(empty($this->url)){
            throw new \Exception('JsonRPCClient. Bad Url');
        }
        
        try{
            $this->ClientRPC = new JsonRPCClient($this->url);
        } catch (Exception $ex) {
            throw new \Exception($ex->getMessage());
        }
        return $this->ClientRPC;
    }
}
