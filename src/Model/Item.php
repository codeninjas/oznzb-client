<?php

namespace Codeninjas\API\NZB\Oznzb\Model;

class Item
{
    /** @var string */
    protected $title;

    /** @var string */
    protected $guid;

    /** @var string */
    protected $link;

    /** @var string */
    protected $comments;

    /** @var string */
    protected $pubDate;

    /** @var array */
    protected $categories;

    /** @var string */
    protected $description;

    /** @var array */
    protected $newznabAttr;

    /** @var array */
    protected $oznzbAttr;
}
