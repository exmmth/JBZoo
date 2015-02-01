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


$curList = $currencyHelper->getCurrencyList();

?>

<?php if (!empty($curList) || empty($curList)) : ?>
    <div class="jbzoo jsNoCurrencyToggle">

        <?php if (!empty($curList)) : ?>
            <table class="jbcurrency-list jbcurrency-reverse no-border">
                <?php foreach ($curList as $code => $currency) : ?>
                    <tr class="jbcurrency-<?php echo $code; ?>" title="<?php echo $currency['name']; ?>">
                        <td class="jbcurrency-from"><?php echo $currency['from']; ?></td>
                        <td class="jbcurrency-devider">. . .</td>
                        <td class="jbcurrency-to"><?php echo $currency['to']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </table>
        <?php endif; ?>

    </div>
<?php endif; ?>
