<?php

/**
 * This file is part of the GitWrapper package.
 *
 * (c) Matteo Giachino <matteog@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * Just for fun...
 */

namespace GitElephant\Objects;

use GitElephant\Objects\TreeishInterface;


/**
 * An object representing a git tag
 *
 * @author Matteo Giachino <matteog@gmail.com>
 */

class TreeTag implements TreeishInterface
{
    private $name;
    private $fullRef;
    private $sha;

    /**
     * Class constructor
     *
     * @param string $line a single tag line from the git binary
     */
    public function __construct($line)
    {
        $this->name    = trim($line);
        $this->fullRef = 'refs/tags/' . $this->name;
    }

    /**
     * name getter
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * fullRef getter
     *
     * @return string
     */
    public function getFullRef()
    {
        return $this->fullRef;
    }

    public function setSha($sha)
    {
        $this->sha = $sha;
    }

    public function getSha()
    {
        return $this->sha;
    }
}