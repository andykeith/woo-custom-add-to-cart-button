<?php
namespace Barn2\WCB_Lib;

/**
 * An object which is loaded conditionally.
 *
 * @package   Barn2\barn2-lib
 * @author    Barn2 Plugins <support@barn2.co.uk>
 * @license   GPL-3.0
 * @copyright Barn2 Media Ltd
 */
interface Conditional {

    /**
     * Is this object required?
     *
     * @return boolean true if required, false otherwise.
     */
    public function is_required();

}