<?php

namespace App\Virtual\Requests\Api;

/**
 * @OA\Schema(
 *      title="Store Schedule request",
 *      description="Store Schedule request body data",
 *      type="object",
 *      required={
 *          "from",
 *          "to",
 *          "program_id",
 *          "leader_id"
 *      }
 * )
 */
class StoreScheduleRequest
{
    /**
     * @OA\Property(
     *     title="From",
     *     description="Datetime from",
     *     example="2017-07-21 17:32:28",
     *     format="date-time",
     *     type="string"
     * )
     *
     * @var string
     */
    public $from;

    /**
     * @OA\Property(
     *     title="To",
     *     description="Datetime to",
     *     example="2017-07-21 17:32:28",
     *     format="date-time",
     *     type="string"
     * )
     *
     * @var string
     */
    public $to;

    /**
     * @OA\Property(
     *     title="Program ID",
     *     description="Program ID",
     *     format="int64",
     *     example=1
     * )
     *
     * @var integer
     */
    public $program_id;

    /**
     * @OA\Property(
     *     title="Leader ID",
     *     description="Leader ID",
     *     format="int64",
     *     example=1
     * )
     *
     * @var integer
     */
    public $leader_id;
}
