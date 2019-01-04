<?php
/**
 * Created by PhpStorm.
 * User: lecocq
 * Date: 03/01/2019
 * Time: 20:25
 */

namespace App\Entity;

use Symfony\Component\Validator\Constraints as Assert;


class Contact
{
    /**
     * @var string|null
     * @Assert\NotBlank()
     * @Assert\Length(min="2", max="100")
     */
    private $firstname;

    /**
     * @var string|null
     * @Assert\NotBlank()
     * @Assert\Length(min="2", max="100")
     */
    private $lastname;


    /**
     * @var string|null
     * @Assert\NotBlank()
     * @Assert\Regex(
     * pattern="/^((\+)33|0|0033)[1-9](\d{2}){4}$/",
     * message="+33 0 12 34 56 78"
     * )
     */
    private $phone;

    /**
     * @var string|null
     * @Assert\NotBlank()
     * @Assert\Email()
     */
    private $email;

    /**
     * @var string|null
     * @Assert\NotBlank()
     * @Assert\Length(min="10")
     */
    private $message;

    /**
     * @var Property|null
     */
    private $property;

    /**
     * @return null|string
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * @param null|string $firstname
     * @return Contact
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * @param null|string $lastname
     * @return Contact
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param null|string $phone
     * @return Contact
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param null|string $email
     * @return Contact
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @param null|string $message
     * @return Contact
     */
    public function setMessage($message)
    {
        $this->message = $message;
        return $this;
    }

    /**
     * @return Property|null
     */
    public function getProperty()
    {
        return $this->property;
    }

    /**
     * @param Property|null $property
     * @return Contact
     */
    public function setProperty($property)
    {
        $this->property = $property;
        return $this;
    }


}