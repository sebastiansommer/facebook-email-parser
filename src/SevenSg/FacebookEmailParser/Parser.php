<?php
namespace SevenSg\FacebookEmailParser;

class Parser
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
    public function getAccountId(): string
    {
        return $this->extractOption('Account Id');
    }

    /**
     * @param string $name
     * @return string
     */
    protected function extractOption(string $name): string
    {
        $regex = '/' . $name . ': (.*)[\n|\r\n|\r]{2}/';

        preg_match_all($regex, $this->content, $matches, PREG_SET_ORDER, 0);

        return trim($matches[0][1]);
    }
}
