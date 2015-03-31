<?php

namespace Phones\PhoneBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * PhoneRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class PhoneRepository extends EntityRepository
{
    /**
     * @param Phone $phone
     * @throws \Doctrine\DBAL\ConnectionException
     * @throws \Exception
     */
    public function save(Phone $phone)
    {
        $em = $this->getEntityManager();

        $entityRez = $this->find($phone->getPhoneId());
        if (!$entityRez) {
            $em->persist($phone);
            $em->flush($phone);
        }
//        try {
//        } catch (\Exception $e) {
//        catch (\Doctrine\DBAL\DBALException  $e) {
//        if (is_int(strpos($e->getPrevious()->getMessage(), 'Duplicate entry'))) {
//        }

    }

}
