<?php
namespace OtkurBiz\jdy\JdyScm;

use OtkurBiz\jdy\Kernel\BaseClient;
use Psr\Http\Message\RequestInterface;

class JdyScmClient extends BaseClient {

    protected function dbIdMiddleware()
    {
        return function (callable $handler) {
            return function (RequestInterface $request, array $options) use ($handler) {
                if ($this->accessToken) {
                    $request = $this->applyToRequest($request, $options);
                }
                return $handler($request, $options);
            };
        };
    }

    private function applyToRequest(RequestInterface $request, array $requestOptions = []): RequestInterface
    {
        parse_str($request->getUri()->getQuery(), $query);
        $query = http_build_query(array_merge($this->getQuery(), $query));
        return $request->withUri($request->getUri()->withQuery($query));
    }


    private function getQuery(): array
    {
        return ['dbId' => $this->app['config']['dbId']];
    }


    public function request(string $url, string $method = 'GET', array $options = [], $returnRaw = false)
    {
        $this->registerHttpMiddlewares();
        $this->pushMiddleware($this->dbIdMiddleware(), 'dbId');
        return parent::request($url, $method, $options, $returnRaw);

    }

}
