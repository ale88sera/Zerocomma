<?php

namespace Zerocomma\BackendBundle\Model;

/**
 * Administrator Interface
 *
 * @author Siamion Makarski <s.makarski.s@gmail.com>
 */
interface AdministratorInterface
{
    /**
     * Sets an email
     *
     * @param string $email
     */
    public function setEmail($email);

    /**
     * Gets an email
     *
     * @return string
     */
    public function getEmail();

    /**
     * Sets a plain password
     *
     * @param string $plainPassword
     */
    public function setPlainPassword($plainPassword);

    /**
     * Gets a plain password
     *
     * @return string
     */
    public function getPlainPassword();

    /**
     * Sets salt
     *
     * @param string $salt
     */
    public function setSalt($salt);
}
