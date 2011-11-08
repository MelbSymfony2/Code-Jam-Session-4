<?php

namespace MelbSymfony2\CodeJam4Bundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use JMS\SecurityExtraBundle\Annotation\Secure;

/**
 * @Route("/secure")
 */
class SecureController extends Controller
{
    /**
     * @Route("/secure_one", name="secure_one")
     * @Template()
     * @Secure(roles="ROLE_USER")
     */
    public function secureOneAction()
    {
        return array();
    }

	/**
     * @Route("/secure_two", name="secure_two")
     * @Template()
     * @Secure(roles="ROLE_ADMIN")
     */
    public function secureTwoAction()
    {
        return array();
    }
}
