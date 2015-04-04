<?php

namespace Phones\PhoneBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * MappingRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class MappingRepository extends EntityRepository
{
    /**
     * @param Mapping $mapping
     */
    public function save(Mapping $mapping)
    {
        $em = $this->getEntityManager();

        $entityRez = $this->find($mapping->getUniqId());
        if (!$entityRez) {
            $em->persist($mapping);
            $em->flush($mapping);
        }
    }

    /**
     * @param string $providerId
     *
     * @return array
     */
    public function dumpForMapping($providerId)
    {
        $mappings = $this->findBy(['providerId' => $providerId]);

        $dumped = [];
        /** @var Mapping $mapping */
        foreach ($mappings as $mapping) {
            $dumped[$mapping->getOriginalProviderPhoneName()] = $mapping->getPhoneId();
        }

        return $dumped;
    }
}
