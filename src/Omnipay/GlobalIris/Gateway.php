<?php

namespace Omnipay\GlobalIris;

use Omnipay\Common\AbstractGateway;

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * GlobalIris Gateway
 *
 * 
 */
class Gateway extends AbstractGateway {

    public function getDefaultParameters() {
        
    }

    public function getName() {
        
    }

    public function purchase(array $parameters = array()) {

        return $this->createRequest('\Omnipay\GlobalIris\Message\Request', $parameters);
    }

}

?>
