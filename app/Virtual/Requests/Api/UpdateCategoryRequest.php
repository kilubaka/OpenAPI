<?php

namespace App\Virtual\Requests\Api;

/**
 * @OA\Schema(
 *      title="Update Category request",
 *      description="Update Category request body data",
 *      type="object",
 *      required={"name"}
 * )
 */
class UpdateCategoryRequest
{
    /**
     * @OA\Property(
     *      title="name",
     *      description="Name of the updated category",
     *      example="A updated category"
     * )
     *
     * @var string
     */
    public $name;
}
