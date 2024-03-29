<?php

declare(strict_types=1);

namespace TyCode\Shop\Product\Domain;

use TyCode\Shared\Domain\Criteria\Criteria;

interface ProductRepository
{
    public function save(Product $course): void;

    public function search(ProductId $id): ?Product;

    public function searchAll(): ?Products;

    public function matching(Criteria $criteria): ?Products;
}
