<?php
/**
 * This file is part of the Zimbra API in PHP library.
 *
 * © Nguyen Van Nguyen <nguyennv1981@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Zimbra\API\Mail\Request;

use Zimbra\Soap\Request;

/**
 * DestroyWaitSet request class
 *
 * @package   Zimbra
 * @category  API
 * @author    Nguyen Van Nguyen - nguyennv1981@gmail.com
 * @copyright Copyright © 2013 by Nguyen Van Nguyen.
 */
class DestroyWaitSet extends Request
{
    /**
     * Waitset ID
     * @var string
     */
    private $_waitSet;

    /**
     * Constructor method for DestroyWaitSet
     * @param  string $waitSet
     * @return self
     */
    public function __construct($waitSet)
    {
        parent::__construct();
        $this->_waitSet = trim($waitSet);
    }

    /**
     * Get or set waitSet
     *
     * @param  string $waitSet
     * @return string|self
     */
    public function waitSet($waitSet = null)
    {
        if(null === $waitSet)
        {
            return $this->_waitSet;
        }
        $this->_waitSet = trim($waitSet);
        return $this;
    }

    /**
     * Returns the array representation of this class 
     *
     * @return array
     */
    public function toArray()
    {
        $this->array = array(
            'waitSet' => $this->_waitSet,
        );
        return parent::toArray();
    }

    /**
     * Method returning the xml representation of this class
     *
     * @return SimpleXML
     */
    public function toXml()
    {
        $this->xml->addAttribute('waitSet', $this->_waitSet);
        return parent::toXml();
    }
}