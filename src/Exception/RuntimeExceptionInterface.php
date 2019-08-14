<?php
/**
 * This file is part of phplrt package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
declare(strict_types=1);

namespace Phplrt\Contracts\Parser\Exception;

use Phplrt\Contracts\Lexer\TokenInterface;
use Phplrt\Contracts\Exception\SourceExceptionInterface;

/**
 * Throws when the error of the parsing of the source code happens.
 */
interface RuntimeExceptionInterface extends SourceExceptionInterface, ParserExceptionInterface
{
    /**
     * Returns a token object during which processing errors occurred.
     *
     * @return TokenInterface
     */
    public function getToken(): TokenInterface;
}
