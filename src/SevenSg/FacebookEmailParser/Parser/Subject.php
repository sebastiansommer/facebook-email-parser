<?php
namespace SevenSg\FacebookEmailParser\Parser;

use SevenSg\FacebookEmailParser\Parser;

class Subject extends Parser
{
    /**
     * @var string
     */
    protected $subject;

    public function __construct(string $subject)
    {
        $this->subject = $subject;
    }

    /**
     * @return string
     */
    public function getId()
    {
        $regex = '/[0-9]+\d{5,}/m';

        preg_match_all($regex, $this->subject, $matches, PREG_SET_ORDER, 0);

        if (isset($matches[0])) {
            return $matches[0][0];
        }
    }
}
