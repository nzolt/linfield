<?php

/**
 * Created by Zoltan Nagy.
 * User: jetro
 * Date: 2016.03.14.
 * Time: 22:24
 */
class EchoMage_Linfield_Test_Helper_Data extends EcomDev_PHPUnit_Test_Case
{
    /**
     * @var int
     */
    protected $_helper;

    /**
     * Testsuite setup
     */
    public function setUp()
    {
        $this->_helper = Mage::helper('linfield');
    }

    /**
     *
     * @see EchoMage_Linfield_Helper
     */
    public function testCanShowWasNowReturnsFalseForWrongInstanceType()
    {
        $mandatory = $this->_helper->isMandatory();

        $this->assertNotNull($mandatory);
    }
}