<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ClubRepository")
 */
class Club
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=128)
     */
    private $name;

    /**
     * @ORM\Column(type="json_array", nullable=true)
     */
    private $geolocation;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $address;

    /**
     * @ORM\Column(type="string", length=56, nullable=true)
     */
    private $postalCode;

    /**
     * @ORM\Column(type="string", length=128)
     */
    private $city;

    /**
     * @ORM\Column(type="string", length=128)
     */
    private $country;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $description;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $logo;

    private $logoFile;

//    /**
//     * @ORM\OneToMany(targetEntity="App\Image")
//     * @ORM\JoinColumn(name="="image_id", referencedColumnName="id")
//     */
//    private $images;

    /**
     * @ORM\Column(type="json_array", nullable=true)
     */
    private $timetable;

//    /**
//     * @ORM\OneToMany(targetEntity="Event", mappedBy="club")
//     */
//    private $events;
    
//    /**
//     * @ORM\OneToMany(targetEntity="App\Entity\Booking", mappedBy="club")
//     */
//    private $bookings;

    public function __construct()
    {
        $this->bookings = new ArrayCollection();
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
    public function setId($id): void
    {
        $this->id = $id;
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
    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getGeolocation()
    {
        return $this->geolocation;
    }

    /**
     * @param mixed $geolocation
     */
    public function setGeolocation($geolocation): void
    {
        $this->geolocation = $geolocation;
    }

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param mixed $address
     */
    public function setAddress($address): void
    {
        $this->address = $address;
    }

    /**
     * @return mixed
     */
    public function getPostalCode()
    {
        return $this->postalCode;
    }

    /**
     * @param mixed $postalCode
     */
    public function setPostalCode($postalCode): void
    {
        $this->postalCode = $postalCode;
    }

    /**
     * @return mixed
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param mixed $city
     */
    public function setCity($city): void
    {
        $this->city = $city;
    }

    /**
     * @return mixed
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param mixed $country
     */
    public function setCountry($country)
    {
        $this->country = $country;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description): void
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getLogo()
    {
        return $this->logo;
    }

    /**
     * @param mixed $logo
     */
    public function setLogo($logo): void
    {
        $this->logo = $logo;
    }

    /**
     * @return mixed
     */
    public function getLogoFile()
    {
        return $this->logoFile;
    }

    /**
     * @param mixed $logoFile
     */
    public function setLogoFile($logoFile): void
    {
        $this->logoFile = $logoFile;
    }

//    /**
//     * @return mixed
//     */
//    public function getImages()
//    {
//        return $this->images;
//    }
//
//    /**
//     * @param mixed $images
//     */
//    public function setImages($images): void
//    {
//        $this->images = $images;
//    }

    /**
     * @return mixed
     */
    public function getTimetable()
    {
        return $this->timetable;
    }

    /**
     * @param mixed $timetable
     */
    public function setTimetable($timetable): void
    {
        $this->timetable = $timetable;
    }

//    /**
//     * @return mixed
//     */
//    public function getEvents()
//    {
//        return $this->events;
//    }
//
//    /**
//     * @param mixed $events
//     */
//    public function setEvents($events): void
//    {
//        $this->events = $events;
//    }
//
//    /**
//     * @return mixed
//     */
//    public function getBookings()
//    {
//        return $this->bookings;
//    }
//
//    /**
//     * @param mixed $bookings
//     */
//    public function setBookings($bookings): void
//    {
//        $this->bookings = $bookings;
//    }



}
