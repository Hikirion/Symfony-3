<?php

namespace AppBundle\Repository;

use AppBundle\Entity\Article;

/**
 * ArticleRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ArticleRepository extends \Doctrine\ORM\EntityRepository
{
    public function getTitleByArticle( $string)
    {
        return $this->createQueryBuilder('art')
            ->where('art.title LIKE :string' )
            ->setParameter('string','%'.$string.'%')
            ->getQuery()
            ->getResult();
    }

}
