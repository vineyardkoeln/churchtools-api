<?php
declare(strict_types=1);

namespace ChurchTools\Tools;

use Http\Client\Common\Plugin;
use Http\Promise\Promise;
use Psr\Http\Message\RequestInterface;
/**
 * Set the authentication for the request
 *
 * @author Andre Schild  <andre@schild.ws>
 */
final class QueryAuthPlugin implements Plugin
{
    /**
     * @var Login token to add to the requests
     */
    private $loginToken = null;
    /**
     * @param string $loginToken Login token to add to the requests, use null for no-auth
     */
    public function __construct(?string $loginToken)
    {
        $this->loginToken= $loginToken;
    }
    /**
     * {@inheritdoc}
     */
    public function handleRequest(RequestInterface $request, callable $next, callable $first): Promise
    {
        $uri = $request->getUri();
        parse_str($uri->getQuery(), $query);
        if ($this->loginToken != null)
        {
            $query += ["login_token" => $this->loginToken];
        }
        $request = $request->withUri(
            $uri->withQuery(http_build_query($query))
        );
        return $next($request);
    }
}
