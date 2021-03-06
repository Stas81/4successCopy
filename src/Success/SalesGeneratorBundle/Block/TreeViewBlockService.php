<?php

namespace Success\SalesGeneratorBundle\Block;

use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Validator\ErrorElement;
use Sonata\BlockBundle\Block\BaseBlockService;
use Sonata\BlockBundle\Block\BlockContextInterface;
use Sonata\BlockBundle\Model\BlockInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class TreeViewBlockService extends BaseBlockService
{
    /**
     * @var \Success\SalesGeneratorBundle\Service\SalesGeneratorManager
     */
    private $salesGeneratorManager;
    
    public function setSalesGeneratorManager(\Success\SalesGeneratorBundle\Service\SalesGeneratorManager $manager)
    {
        $this->salesGeneratorManager = $manager;
    }

    public function getName()
    {
        return 'Tree view';
    }
    
    public function validateBlock(ErrorElement $errorElement, BlockInterface $block)
    {
    }
    
    public function buildEditForm(FormMapper $formMapper, BlockInterface $block)
    {
    }
    
    public function setDefaultSettings(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults([
            'template' => 'SuccessSalesGeneratorBundle:Block:tree_view_block.html.twig',
            'title' => 'View sales generator as tree',
            'audiences' => $this->salesGeneratorManager->getAllAudiences()
        ]);
    }
    
    public function execute(BlockContextInterface $blockContext, Response $response = null)
    {
        return $this->renderResponse($blockContext->getTemplate(), [
            'block' => $blockContext->getBlock(),
            'settings' => $blockContext->getSettings()
        ], $response);
    }
}