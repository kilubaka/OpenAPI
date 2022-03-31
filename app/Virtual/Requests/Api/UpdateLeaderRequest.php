<?php

namespace App\Virtual\Requests\Api;

/**
 * @OA\Schema(
 *      title="Update Leader request",
 *      description="Update Leader request body data",
 *      type="object",
 *      required={
 *          "name",
 *          "date_of_birth",
 *          "email"
 *      }
 * )
 */
class UpdateLeaderRequest
{
    /**
     * @OA\Property(
     *     title="name",
     *     description="Name of the updated leader",
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
     *     example="carmelo.kreigerna@okon.com"
     * )
     *
     * @var string
     */
    public $email;
}
