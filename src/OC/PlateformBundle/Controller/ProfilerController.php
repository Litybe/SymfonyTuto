<?php
/**
 * Created by PhpStorm.
 * User: Alexis
 * Date: 16/03/2016
 * Time: 16:11
 */

namespace OC\PlateformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Security\Core\User\User;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;

class ProfilerController extends Controller
{
    private $id;
    private $birthday;
    private $lastname;
    private $name;
    private $email;
    private $cellphone;
    private $isVisble = true;


/*    public function __construct()
    {
    }*/

    public function profileAction(){
    $user = new \OC\PlateformBundle\Entity\User();
// 2.8    $formBuilder = $this->$this->get('form.factory')->creatBuilder('form',$user);
        $form = $this->createFormBuilder($user)
            ->add('lastname', TextType::class)
            ->add('birthday', DateType::class)
            ->add('save', SubmitType::class, array('label' => 'Create User'))
            ->getForm();
        return $this->render('OCPlateformBundle:Advert:profile.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    /**
     * @return boolean
     */
    public function isIsVisble()
    {
        return $this->isVisble;
    }

    /**
     * @param boolean $isVisble
     */
    public function setIsVisble($isVisble)
    {
        $this->isVisble = $isVisble;
    }

    /**
     * @return mixed
     */
    public function getCellphone()
    {
        return $this->cellphone;
    }

    /**
     * @param mixed $cellphone
     */
    public function setCellphone($cellphone)
    {
        $this->cellphone = $cellphone;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getBirthday()
    {
        return $this->birthday;
    }

    /**
     * @param mixed $birthday
     */
    public function setBirthday($birthday)
    {
        $this->birthday = $birthday;
    }

    /**
     * @return mixed
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * @param mixed $lastname
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }
}
