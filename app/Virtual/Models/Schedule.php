<?php

namespace App\Virtual\Models;

/**
 * @OA\Schema(
 *     title="Schedule",
 *     description="Schedule model",
 *     @OA\Xml(
 *         name="Schedule"
 *     )
 * )
 */
class Schedule
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
