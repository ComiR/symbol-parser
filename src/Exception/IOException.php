<?php

declare(strict_types=1);

namespace ComposerUnused\SymbolParser\Exception;

use RuntimeException;

class IOException extends RuntimeException
{
    public static function unableToOpenHandle(string $path): self
    {
        return new self('Unable to open resource ' . $path);
    }
}
