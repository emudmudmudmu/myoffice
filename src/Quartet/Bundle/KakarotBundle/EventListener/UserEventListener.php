<?php
namespace Quartet\Bundle\KakarotBundle\EventListener;

use Doctrine\ORM\Event\LifecycleEventArgs;
use Acme\StoreBundle\Entity\Product;

use Quartet\Bundle\KakarotBundle\Entity\User;
use Quartet\Bundle\KakarotBundle\Entity\DaySetting;

class UserEventListener
{
    public function prePersist(LifecycleEventArgs $args)
    {
        $entity = $args->getEntity();
        $entityManager = $args->getEntityManager();

        if ($entity instanceof User) {
            $days = $entityManager->getRepository('QuartetKakarotBundle:Day')->findAll();

            $types = array('clean', 'like', 'blog');
            foreach ($types as $type) {
                $index = 0;
                foreach ($days as $day) {
                    $ds = new DaySetting();
                    $ds->setType($type);
                    $ds->setUser($entity);
                    $ds->setDay($day);
                    $ds->setSelected(false);

                    $entity->addDaySetting($ds);

                    $index++;
                    if ($index >= 5) {
                        break;
                    }

                }
            }
        }
    }
}