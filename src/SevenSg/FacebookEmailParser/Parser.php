<?php
namespace SevenSg\FacebookEmailParser;

class Parser
{
    /**
     * @param string $name
     * @return string
     */
    protected function extractOption(string $name)
    {
        $regex = '/' . $name . ': (.*)[\n|\r\n|\r]/';

        preg_match_all($regex, $this->content, $matches, PREG_SET_ORDER, 0);

        if (isset($matches[0])) {
            return trim($matches[0][1]);
        }
    }
}
