<?php
/*
 *
 *

 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace OtkurBiz\jdy\Kernel\Contracts;

use Psr\Http\Message\RequestInterface;

/**
 * Interface AuthorizerAccessToken.
 *
 * @author alim <alim@bulutbazar.com>
 */
interface AccessTokenInterface
{
    /**
     * @return array
     */
    public function getToken(): array;

    /**
     * @return \OtkurBiz\jdy\Kernel\Contracts\AccessTokenInterface
     */
    public function refresh(): self;

    /**
     * @param \Psr\Http\Message\RequestInterface $request
     * @param array                              $requestOptions
     *
     * @return \Psr\Http\Message\RequestInterface
     */
    public function applyToRequest(RequestInterface $request, array $requestOptions = []): RequestInterface;
}
