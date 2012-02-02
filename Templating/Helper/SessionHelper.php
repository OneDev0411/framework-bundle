<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Bundle\FrameworkBundle\Templating\Helper;

use Symfony\Component\Templating\Helper\Helper;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\FlashBagInterface;

/**
 * SessionHelper provides read-only access to the session attributes.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class SessionHelper extends Helper
{
    protected $session;

    /**
     * Constructor.
     *
     * @param Request $request A Request instance
     */
    public function __construct(Request $request)
    {
        $this->session = $request->getSession();
    }

    /**
     * Returns an attribute
     *
     * @param string $name    The attribute name
     * @param mixed  $default The default value
     *
     * @return mixed
     */
    public function get($name, $default = null)
    {
        return $this->session->get($name, $default);
    }

    public function getFlash($type)
    {
        return $this->session->getFlashes()->get($type);
    }

    public function getFlashes()
    {
        return $this->session->getFlashes()->all();
    }

    public function hasFlash($type)
    {
        return $this->session->getFlashes()->has($type);
    }

    /**
     * Returns the canonical name of this helper.
     *
     * @return string The canonical name
     */
    public function getName()
    {
        return 'session';
    }
}
