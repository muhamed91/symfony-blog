<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ArticleRepository")
 */
class Article
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="text", length=100)
     */

    private $title;

    /**
     * @ORM\Column(type="text")
     */

    private $body;

    /**
     * @ORM\Column(type="string");
     */

     private $image;


     /**
    * @ORM\Column(type="datetime")
    */
   private $regData;

    //Getter & Settters
    public function getId() {
        return $this->id;
    }

    public function getTitle() {
        return $this->title;
    }

    public function setTitle($title) {
        $this->title = $title;
    }

    public function getBody() {
        return $this->body;
    }

    public function setBody($body) {
        return $this->body = $body;
    }

    public function getImage() {
       return $this->image;
    }

    public function setDate($regData) {
        $this->regData = $regData;
        return $this;
    }

    public function getDate() {
        return $this->regData;
     }
 
     public function setImage($image) {
         $this->image = $image;
         return $this;
     }
 





}
