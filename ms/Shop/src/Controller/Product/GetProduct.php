<?php

declare(strict_types=1);

namespace TyCode\ms\Shop\Controller\Product;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use TyCode\Shop\Product\Application\FindById\FindProductQuery;
use TyCode\Shop\Product\Application\ProductResponse;
use TyCode\Shared\Domain\Bus\Query\QueryBus;

final class GetProduct
{
    public function __invoke(Request $request, QueryBus $queryBus): JsonResponse
    {
        /** @var ProductResponse $response */
        $response = $queryBus->ask(new FindProductQuery($request->get('id')));

        return new JsonResponse([
                'data' => $response->product()->toPrimitives()
            ],
            Response::HTTP_OK
        );
    }
}
