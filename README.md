<p align="center">
    <a href="https://railt.org"><img src="https://avatars2.githubusercontent.com/u/49816277?s=128" width="128" alt="Phplrt" /></a>
</p>

## Parser Contracts

A set of interfaces for abstraction over lexers.

## Parser Interfaces

```php
namespace Phplrt\Contracts\Parser;

use Phplrt\Contracts\Ast\NodeInterface;

interface ParserInterface
{
    public function parse(ReadableInterface $input): NodeInterface;
}
```

## Parser Exceptions

```php
namespace Phplrt\Contracts\Parser\Exception;

use Phplrt\Contracts\Exception\SourceExceptionInterface;

interface ParserExceptionInterface extends \Throwable
{
}

interface RuntimeExceptionInterface extends SourceExceptionInterface, ParserExceptionInterface
{
}
```
