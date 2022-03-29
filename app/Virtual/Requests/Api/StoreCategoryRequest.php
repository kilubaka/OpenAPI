<?php

namespace App\Virtual\Requests\Api;

/**
 * @OA\Schema(
 *      title="Store Category request",
 *      description="Store Category request body data",
 *      type="object",
 *      required={"name"}
 * )
 */
class StoreCategoryRequest
{
    /**
     * @OA\Property(
     *      title="name",
     *      description="Name of the new category",
     *      example="A nice category"
     * )
     *
     * @var string
     */
    public $name;
}
