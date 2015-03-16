<?php

namespace Phones\PhoneBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AudioOutput
 */
class AudioOutput
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $phone_id;

    /**
     * @var string
     */
    private $provider_id;

    /**
     * @var string
     */
    private $original_phone_name;

    /**
     * @var float
     */
    private $headphones_power_volts;

    /**
     * @var float
     */
    private $loudspeaker_dB;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set phone_id
     *
     * @param string $phoneId
     * @return AudioOutput
     */
    public function setPhoneId($phoneId)
    {
        $this->phone_id = $phoneId;

        return $this;
    }

    /**
     * Get phone_id
     *
     * @return string 
     */
    public function getPhoneId()
    {
        return $this->phone_id;
    }

    /**
     * Set provider_id
     *
     * @param string $providerId
     * @return AudioOutput
     */
    public function setProviderId($providerId)
    {
        $this->provider_id = $providerId;

        return $this;
    }

    /**
     * Get provider_id
     *
     * @return string 
     */
    public function getProviderId()
    {
        return $this->provider_id;
    }

    /**
     * Set original_phone_name
     *
     * @param string $originalPhoneName
     * @return AudioOutput
     */
    public function setOriginalPhoneName($originalPhoneName)
    {
        $this->original_phone_name = $originalPhoneName;

        return $this;
    }

    /**
     * Get original_phone_name
     *
     * @return string 
     */
    public function getOriginalPhoneName()
    {
        return $this->original_phone_name;
    }

    /**
     * Set headphones_power_volts
     *
     * @param float $headphonesPowerVolts
     * @return AudioOutput
     */
    public function setHeadphonesPowerVolts($headphonesPowerVolts)
    {
        $this->headphones_power_volts = $headphonesPowerVolts;

        return $this;
    }

    /**
     * Get headphones_power_volts
     *
     * @return float 
     */
    public function getHeadphonesPowerVolts()
    {
        return $this->headphones_power_volts;
    }

    /**
     * Set loudspeaker_dB
     *
     * @param float $loudspeakerDB
     * @return AudioOutput
     */
    public function setLoudspeakerDB($loudspeakerDB)
    {
        $this->loudspeaker_dB = $loudspeakerDB;

        return $this;
    }

    /**
     * Get loudspeaker_dB
     *
     * @return float 
     */
    public function getLoudspeakerDB()
    {
        return $this->loudspeaker_dB;
    }
}