<?php

namespace AppBundle\Entity\Translations;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Translatable\Entity\MappedSuperclass\AbstractPersonalTranslation;

/**
 * Translation class
 *
 * @category Translation
 * @package  AppBundle\Entity\Translations
 * @author   David Romaní <david@flux.cat>
 *
 * @ORM\Entity
 * @ORM\Table(name="blog_post_translations",
 *   uniqueConstraints={@ORM\UniqueConstraint(name="lookup_blog_post_unique_idx", columns={
 *     "locale", "object_id", "field"
 *   })}
 * )
 */
class BlogPostTranslation extends AbstractPersonalTranslation
{
    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\BlogPost", inversedBy="translations")
     * @ORM\JoinColumn(name="object_id", referencedColumnName="id", onDelete="CASCADE")
     */
    protected $object;
}
