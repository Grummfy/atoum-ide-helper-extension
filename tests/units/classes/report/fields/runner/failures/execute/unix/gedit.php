<?php

namespace atoum\ideHelper\tests\units\report\fields\runner\failures\execute\unix;

use mageekguy\atoum;

class gedit extends atoum\test
{
    public function testClass()
    {
        $this
            ->testedClass->isSubclassOf('mageekguy\atoum\report\fields\runner\failures\execute')
        ;
    }

    public function test_construct()
    {
        $this
            ->if($this->newTestedInstance)
            ->then
                ->string($this->testedInstance->getCommand())->isEqualTo('gedit %1$s +%2$d > /dev/null &')
        ;
    }
}
