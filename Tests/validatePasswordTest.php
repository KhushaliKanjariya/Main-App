<?php

use PHPUnit\Framework\TestCase;

class validatePasswordTest extends TestCase {
    public function testValidLength(){
        $valPass = new ValidatePassword();
        $this->assertFalse($valPass->validLength('1234'));
        
    }
}

?>
