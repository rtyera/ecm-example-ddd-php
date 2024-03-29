<?php

declare(strict_types=1);

namespace TyCode\ms\Seller\Controller\Review;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use TyCode\Shared\Domain\Bus\Command\CommandBus;
use TyCode\Seller\Review\Application\Create\CreateReviewCommand;

final class PostReviewCreate
{
    public function __invoke(Request $request, CommandBus $commandBus): JsonResponse
    {
        $parameters = json_decode($request->getContent(), true);

        $createReviewCommand = new CreateReviewCommand(
            $parameters['id'],
            $parameters['productId'],
            $parameters['author'],
            $parameters['message']
        );

        $commandBus->dispatch($createReviewCommand);

        return new JsonResponse(null, Response::HTTP_CREATED);
    }

}
