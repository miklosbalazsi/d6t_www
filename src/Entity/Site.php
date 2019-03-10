<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Site
 *
 * @ORM\Table(name="site")
 * @ORM\Entity
 */
class Site
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="uniqName", type="string", length=45, nullable=false)
     */
    private $uniqname;

    /**
     * @var string|null
     *
     * @ORM\Column(name="comment", type="string", length=1024, nullable=true)
     */
    private $comment;


    public function toArray(){
      $A = array();
      foreach(get_object_vars($this) as $key => $val ){
        $A[$key] = $val;
      }	
      return $A;    
    }
}
