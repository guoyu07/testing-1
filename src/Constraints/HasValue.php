<?php
/**
 * This file is part of Notadd.
 *
 * @author TwilRoad <heshudong@ibenchu.com>
 * @copyright (c) 2016, notadd.com
 * @datetime 2016-10-25 11:38
 */
namespace Notadd\Foundation\Testing\Constraints;

use Symfony\Component\DomCrawler\Crawler;

/**
 * Class HasValue.
 */
class HasValue extends FormFieldConstraint
{
    /**
     * Get the valid elements.
     *
     * @return string
     */
    protected function validElements()
    {
        return 'input,textarea';
    }

    /**
     * Check if the input contains the expected value.
     *
     * @param \Symfony\Component\DomCrawler\Crawler|string $crawler
     *
     * @return bool
     */
    public function matches($crawler)
    {
        $crawler = $this->crawler($crawler);

        return $this->getInputOrTextAreaValue($crawler) == $this->value;
    }

    /**
     * Get the value of an input or textarea.
     *
     * @param \Symfony\Component\DomCrawler\Crawler $crawler
     *
     * @throws \PHPUnit_Framework_ExpectationFailedException
     * @return string
     */
    public function getInputOrTextAreaValue(Crawler $crawler)
    {
        $field = $this->field($crawler);

        return $field->nodeName() == 'input' ? $field->attr('value') : $field->text();
    }

    /**
     * Return the description of the failure.
     *
     * @return string
     */
    protected function getFailureDescription()
    {
        return sprintf('the field [%s] contains the expected value [%s]', $this->selector, $this->value);
    }

    /**
     * Returns the reversed description of the failure.
     *
     * @return string
     */
    protected function getReverseFailureDescription()
    {
        return sprintf('the field [%s] does not contain the expected value [%s]', $this->selector, $this->value);
    }
}
