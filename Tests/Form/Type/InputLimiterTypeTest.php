<?php
namespace Thrace\FormBundle\Tests\Form\Type;

use Symfony\Component\Form\Tests\Extension\Core\Type\TypeTestCase;

use Thrace\FormBundle\Tests\Form\Extension\TypeExtensionTest;

use Thrace\FormBundle\Form\Type\InputLimiterType;

class InputLimiterTypeTest extends TypeTestCase
{

    public function testDefaultConfigs()
    {
        $form = $this->factory->create('thrace_input_limiter');
        $view = $form->createView();
        $configs = $view->vars['configs'];
        $this->assertSame(array(
            'limit' => 255,
            'type' => 'textarea'
        ), $configs);
    }

    protected function getExtensions()
    {
    	return array(
			new TypeExtensionTest(
				array(new InputLimiterType())
			)
    	);
    }
}