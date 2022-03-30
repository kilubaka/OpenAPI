<?php

namespace App\Virtual\Requests\Api;

/**
 * @OA\Schema(
 *      title="Update Program request",
 *      description="Update Program request body data",
 *      type="object",
 *      required={
 *          "name",
 *          "description",
 *          "category_id",
 *          "age_restriction",
 *          "cost"
 *      }
 * )
 */
class UpdateProgramRequest
{
    /**
     * @OA\Property(
     *     title="name",
     *     description="Name of the update program",
     *     format="string",
     *     example="Nostrum voluptas."
     * )
     *
     * @var string
     */
    public $name;

    /**
     * @OA\Property(
     *     title="Description",
     *     description="Description of the Program",
     *     format="string",
     *     example="Officiis odit ratione quos aspernatur."
     * )
     *
     * @var string
     */
    public $description;

    /**
     * @OA\Property(
     *     title="Category ID",
     *     description="Category ID",
     *     format="int64",
     *     example=123
     * )
     *
     * @var integer
     */
    public $category_id;

    /**
     * @OA\Property(
     *     title="Age Restriction",
     *     description="Age Restriction",
     *     format="int64",
     *     example=18
     * )
     *
     * @var integer
     */
    public $age_restriction;

    /**
     * @OA\Property(
     *     title="Cost",
     *     description="Cost",
     *     format="float",
     *     example=1200.5
     * )
     *
     * @var float
     */
    public $cost;
}
