<?php

namespace Origammi\Bundle\BlocksBundle\Form\Block;

use Origammi\Bundle\BlocksBundle\Form\BlockType;
use Symfony\Component\Form\FormBuilderInterface;

use JMS\DiExtraBundle\Annotation as DI;

/**
 * Class QuoteType
 *
 * @package   Origammi\Bundle\BlocksBundle\Form\Block
 * @author    Matej Velikonja <mvelikonja@astina.ch>
 * @copyright 2015 Astina AG (http://astina.ch)
 */
class QuoteType extends BlockType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array                $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        parent::buildForm($builder, $options);

        $builder->add('text', 'textarea', [
            'required' => false,
            'label'    => false
        ]);
    }

    /**
     * @return string
     */
    public function getDataClass()
    {
        return 'Origammi\Bundle\BlocksBundle\Entity\Block\Quote';
    }

    /**
     * @return string
     */
    public function getBlockName()
    {
        return 'quote';
    }
}
