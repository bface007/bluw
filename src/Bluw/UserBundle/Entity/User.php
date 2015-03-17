<?php
/**
 * Created by PhpStorm.
 * User: bface
 * Date: 17/03/15
 * Time: 01:30
 */

namespace Bluw\UserBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class User
 * @package Bluw\UserBundle\Entity
 *
 * @ORM\Entity
 * @ORM\Table(name="bluw_user")
 */
class User extends BaseUser{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    public function __construct(){
        parent::__construct();
    }
} 