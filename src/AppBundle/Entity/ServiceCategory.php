<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * Class ServiceCategory
 *
 * @category Entity
 * @package  AppBundle\Entity
 * @author   David Romaní <david@flux.cat>
 *
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ServiceCategoryRepository")
 * @Gedmo\SoftDeleteable(fieldName="removedAt")
 */
class ServiceCategory extends ServiceBase
{
}
