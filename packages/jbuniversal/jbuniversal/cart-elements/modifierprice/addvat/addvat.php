<?php
/**
 * JBZoo App is universal Joomla CCK, application for YooTheme Zoo component
 * @package     jbzoo
 * @version     2.x Pro
 * @author      JBZoo App http://jbzoo.com
 * @copyright   Copyright (C) JBZoo.com,  All rights reserved.
 * @license     http://jbzoo.com/license-pro.php JBZoo Licence
 * @coder       Denis Smetannikov <denis@jbzoo.com>
 */

// no direct access
defined('_JEXEC') or die('Restricted access');

/**
 * Class JBCartElementModifierPriceAddVAT
 */
class JBCartElementModifierPriceAddVAT extends JBCartElementModifierPrice
{
    /**
     * @param JBCartValue $summa
     * @return JBCartValue
     */
    public function modify(JBCartValue $summa)
    {
        $testVal = $summa->getClone();
        $rate    = $this->getRate();
        $testVal->add($rate);

        if ($testVal->isPositive()) {
            $summa->add($this->getRate());
        } else {
            $summa->setEmpty();
        }

        return $summa;
    }

    /**
     * @return JBCartValue
     */
    public function getRate()
    {
        return $this->_order->val($this->config->get('percent'));
    }

}
