<?php

namespace App\Virtual\Models;

/**
 * @OA\Schema(
 *     title="Program",
 *     description="Program model",
 *     @OA\Xml(
 *         name="Program"
 *     )
 * )
 */
class Program
{
    /**
     * @OA\Property(
     *     title="ID",
     *     description="ID",
     *     format="int64",
     *     example=1
     * )
     *
     * @var integer
     */
    private $id;

    /**
     * @OA\Property(
     *     title="Name",
     *     description="Name of the Program",
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

    /**
     * @OA\Property(
     *     title="Created at",
     *     description="Created at",
     *     example="2020-01-27 17:50:45",
     *     format="datetime",
     *     type="string"
     * )
     *
     * @var \DateTime
     */
    private $created_at;

    /**
     * @OA\Property(
     *     title="Updated at",
     *     description="Updated at",
     *     example="2020-01-27 17:50:45",
     *     format="datetime",
     *     type="string"
     * )
     *
     * @var \DateTime
     */
    private $updated_at;
}
