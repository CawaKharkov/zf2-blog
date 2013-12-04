<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Zf2BlogMigration
 *
 * @ORM\Table(name="zf2_blog_migration")
 * @ORM\Entity
 */
class Zf2BlogMigration
{
    /**
     * @var string
     *
     * @ORM\Column(name="version", type="string", length=255, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $version;



    /**
     * Get version
     *
     * @return string 
     */
    public function getVersion()
    {
        return $this->version;
    }
}
