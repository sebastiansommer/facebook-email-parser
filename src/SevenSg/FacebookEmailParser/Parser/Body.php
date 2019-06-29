<?php
namespace SevenSg\FacebookEmailParser\Parser;

use SevenSg\FacebookEmailParser\Parser;

class Body extends Parser
{
    /**
     * @var string
     */
    protected $content;

    public function __construct(string $content)
    {
        $this->content = $content;
    }

    /**
     * @return string
     */
    public function getAccountId()
    {
        return $this->extractOption('Account Id');
    }
}
