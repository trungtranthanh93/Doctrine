<?php
namespace Album\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Album{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    public  $id;
    
    /**
     * @ORM\Column(type="string", nullable=false)
     */
    public  $artist;
    
    /**
     * @ORM\Column(type="string", nullable=false)
     */
    public  $title;
    /**
     * @return the $id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return the $artist
     */
    public function getArtist()
    {
        return $this->artist;
    }

    /**
     * @return the $title
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param field_type $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @param field_type $artist
     */
    public function setArtist($artist)
    {
        $this->artist = $artist;
    }

    /**
     * @param field_type $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    
    
}