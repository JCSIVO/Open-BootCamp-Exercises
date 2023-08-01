<?php 

namespace App\Form\DataTransformer;

use App\Entity\Issue;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Form\DataTransformerInterface;
use Symfony\Component\Form\Exception\TransformationFailedException;

class IssueToNumberTransformer implements DataTransformerInterface
{
    public function __construct(EntityManagerInterface $entityManager){
        $this->entityManager = $entityManager;
    }

    public function transform($issue){
        if(null == $issue){
            return '';
        }
        return $issue->getId();
    }

    public function reverseTransform($issueNumber){
        if(!$issueNumber){
            return;
        }

        $issue = $this->entityManager->getRepository(Issue::class)->findOneBy(['id' => $issueNumber]);

        if(null === $issue){
            throw new TransformationFailedException(sprintf('Un issue con número "%s" no existe', $issueNumber));
        }

        return $issue;

    }
}