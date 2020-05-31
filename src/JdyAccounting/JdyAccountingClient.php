<?php
namespace OtkurBiz\jdy\JdyAccounting;

use OtkurBiz\jdy\Kernel\BaseClient;
use Psr\Http\Message\RequestInterface;

class JdyAccountingClient extends BaseClient {

    protected function dbIdMiddleware()
    {
        return function (callable $handler) {
            return function (RequestInterface $request, array $options) use ($handler) {
                if ($this->accessToken) {
                    $request = $this->applyToRequest($request, $options, 'dbId');
                }
                return $handler($request, $options);
            };
        };
    }

    protected function sIdMiddleware()
    {
        return function (callable $handler) {
            return function (RequestInterface $request, array $options) use ($handler) {
                if ($this->accessToken) {
                    $request = $this->applyToRequest($request, $options, 'sId');
                }
                return $handler($request, $options);
            };
        };
    }


    private function applyToRequest(RequestInterface $request, array $requestOptions = [], string $type = 'dbId'): RequestInterface
    {
        parse_str($request->getUri()->getQuery(), $query);
        $query = http_build_query(array_merge($this->getQuery($type), $query));
        return $request->withUri($request->getUri()->withQuery($query));
    }


    private function getQuery(string $type = 'dbId'): array
    {
        return ['dbId' => $this->app['config'][$type]];
    }

    public function request(string $url, string $method = 'GET', array $options = [], $returnRaw = false)
    {
        $this->registerHttpMiddlewares();
        $this->pushMiddleware($this->sIdMiddleware(), 'sId');
        $this->pushMiddleware($this->dbIdMiddleware(), 'dbId');
        return parent::request($url, $method, $options, $returnRaw);

    }

}
