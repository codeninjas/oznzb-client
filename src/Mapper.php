<?php

namespace Codeninjas\API\NZB\Oznzb;

class Mapper
{
    use LoggerTrait;

    /**
     * @param \DateTime|null $dateTime
     * @return string
     */
    public function formatDateTime(\DateTime $dateTime = null) : string
    {
        if ($dateTime === null) {
            return null;
        }

        return $dateTime->format(\DateTime::ATOM);
    }
}
