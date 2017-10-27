<?php

// src/AppBundle/Entity/Log.php

namespace TMSolution\SessionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity()
 * @ORM\Table(name="sessions")
 */
class Session {

    

    
    /**
     * @ORM\Id @ORM\Column(name="sess_id", type="string", length=128, nullable=false)
     */
    protected $sessId;

    /**
     * @ORM\Column(name="sess_data", type="string", length=4000, nullable=false)
     */
    protected $sessData;
    
    /**
     * @ORM\Column(name="sess_time", type="integer", length=10, nullable=false)
     */
    protected $sessTime;
    
    /**
     * @ORM\Column(name="sess_lifetime", type="integer", length=9, nullable=false)
     */
    protected $sessLifeTime;

    
    public function __toString() {
        return $this->getId();
    }


    /**
     * Set sessId
     *
     * @param string $sessId
     *
     * @return Session
     */
    public function setSessId($sessId)
    {
        $this->sessId = $sessId;

        return $this;
    }

    /**
     * Get sessId
     *
     * @return string
     */
    public function getSessId()
    {
        return $this->sessId;
    }

    /**
     * Set sessData
     *
     * @param string $sessData
     *
     * @return Session
     */
    public function setSessData($sessData)
    {
        $this->sessData = $sessData;

        return $this;
    }

    /**
     * Get sessData
     *
     * @return string
     */
    public function getSessData()
    {
        return $this->sessData;
    }

    /**
     * Set sessTime
     *
     * @param integer $sessTime
     *
     * @return Session
     */
    public function setSessTime($sessTime)
    {
        $this->sessTime = $sessTime;

        return $this;
    }

    /**
     * Get sessTime
     *
     * @return integer
     */
    public function getSessTime()
    {
        return $this->sessTime;
    }

    /**
     * Set sessLifeTime
     *
     * @param integer $sessLifeTime
     *
     * @return Session
     */
    public function setSessLifeTime($sessLifeTime)
    {
        $this->sessLifeTime = $sessLifeTime;

        return $this;
    }

    /**
     * Get sessLifeTime
     *
     * @return integer
     */
    public function getSessLifeTime()
    {
        return $this->sessLifeTime;
    }
}
