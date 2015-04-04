<?php

namespace Phones\PhoneBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * CostRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class CostRepository extends EntityRepository
{
    /**
     * @param Cost $cost
     */
    public function save(Cost $cost)
    {
        $em = $this->getEntityManager();

        $provider = $em->getRepository('PhonesPhoneBundle:Provider')->find($cost->getProviderId());
        $phone    = $em->getRepository('PhonesPhoneBundle:Phone')->find($cost->getPhoneId());

        if ($provider && $phone) {
            $cost->setProvider($provider);
            $cost->setPhone($phone);

            $criteria = [
                'phone_id'            => $cost->getPhoneId(),
                'provider_id'         => $cost->getProviderId(),
                'original_phone_name' => $cost->getOriginalPhoneName(),
            ];

            $entityRez = $this->findBy($criteria);
            if ($entityRez) {
                /** @var Cost $element */
                foreach ($entityRez as $element) {
                    $this->removeCost($element);
                }
                $em->persist($cost);
                $em->flush($cost);
            } else {
                $em->persist($cost);
                $em->flush($cost);
            }
        }
    }

    /**
     * @param $cost
     */
    public function removeCost($cost)
    {
        $em = $this->getEntityManager();

        $em->remove($cost);
        $em->flush();
    }

}
