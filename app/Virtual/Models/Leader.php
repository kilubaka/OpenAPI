<?php

namespace App\Virtual\Models;

/**
 * @OA\Schema(
 *     title="Leader",
 *     description="Leader model",
 *     @OA\Xml(
 *         name="Leader"
 *     )
 * )
 */
class Leader
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
     *     description="Name of the Leader",
     *     format="string",
     *     example="John Doe"
     * )
     *
     * @var string
     */
    public $name;

    /**
     * @OA\Property(
     *     title="Date of Birth",
     *     description="Date of Birth of the Leader",
     *     format="date",
     *     example="2002-01-03"
     * )
     *
     * @var \Date
     */
    public $date_of_birth;

    /**
     * @OA\Property(
     *     title="Email",
     *     description="Email of the Leader",
     *     format="string",
     *     example="carmelo.kreiger@okon.com"
     * )
     *
     * @var string
     */
    public $email;

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
