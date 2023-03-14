<?php

namespace Wotu;
use ErrorException;

class Config{
    private $serviceDomain = [
//        'auth' => 'http://localhost:36006',
        'form' => 'http://47.99.92.21:36031',
        'auth' => 'http://47.99.92.21:36006',
        'finance' => 'http://47.99.92.21.2:36015',
        'admin' => 'http://47.99.92.21:36021',
        'id' => 'http://47.99.92.21:39001',
        'common-data' => 'http://47.99.92.21:36026',
        'sign-in' => 'http://47.99.92.21:36081',
        'question' => 'http://47.99.92.21:36076',
        'gateway' => 'https://api-pre.cloud.wozp.cn'
    ];

    private $domainUrl;

    /**
     * @throws ErrorException
     */
    public function __construct($domain){
        if(empty($this->serviceDomain[$domain])){
            throw new ErrorException('服务不存在');
        }
        $this->domainUrl = $this->serviceDomain[$domain];
    }

    public function getServiceDomain(){
        return $this->domainUrl;
    }


}