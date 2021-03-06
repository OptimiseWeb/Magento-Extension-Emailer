<?php

/**
 * Optimiseweb Emailer Data Helper
 *
 * @package     Optimiseweb_Emailer
 * @author      Kathir Vel (vkathirvel@gmail.com)
 * @copyright   Copyright (c) 2015 Kathir Vel
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
class Optimiseweb_Emailer_Helper_Data extends Optimiseweb_Emailer_Helper_Deprecated
{

    /**
     * Send transactional email
     * 
     * @param type $emailData
     * @return type
     */
    public function sendmail($emailData)
    {
        if (is_array($emailData)) {
            // If the data is an array
            $this->sendmailDataArray($emailData);
        } elseif (is_object($emailData)) {
            // If the data is an object
            $this->sendmailDataObject($emailData);
        }
        return;
    }

}
