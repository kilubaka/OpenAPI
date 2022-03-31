<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Schedule;
use Illuminate\Http\Request;

class SchedulesApiController extends Controller
{
    /**
     * @OA\Get(
     *      path="/schedules",
     *      operationId="getSchedulesList",
     *      tags={"Schedules"},
     *      summary="Get list of schedules",
     *      description="Returns list of schedules",
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *          @OA\JsonContent()
     *       ),
     *      @OA\Response(
     *          response=404,
     *          description="Resource Not Found"
     *      )
     *     )
     */
    public function index()
    {
        return Schedule::all();
    }

    /**
     * @OA\Post(
     *      path="/schedules",
     *      operationId="storeSchedule",
     *      tags={"Schedules"},
     *      summary="Store new schedule",
     *      description="Returns created schedule data",
     *      @OA\RequestBody(
     *          required=true,
     *          @OA\JsonContent(ref="#/components/schemas/StoreScheduleRequest")
     *      ),
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation"
     *      ),
     *      @OA\Response(
     *          response=404,
     *          description="Resource Not Found"
     *      )
     * )
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'from' => 'required|string',
            'to' => 'required|string',
            'program_id' => 'required',
            'leader_id' => 'required'
        ]);

        return Schedule::create($request->all());
    }

    /**
     * @OA\Get(
     *      path="/schedules/{id}",
     *      operationId="getScheduleById",
     *      tags={"Schedules"},
     *      summary="Get schedule information",
     *      description="Returns schedule data",
     *      @OA\Parameter(
     *          name="id",
     *          description="Schedule id",
     *          required=true,
     *          in="path",
     *          @OA\Schema(
     *              type="integer"
     *          )
     *      ),
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation"
     *       ),
     *      @OA\Response(
     *          response=404,
     *          description="Resource Not Found"
     *      )
     * )
     */
    public function show($id)
    {
        return Schedule::findOrFail($id);
    }

    /**
     * @OA\Put(
     *      path="/schedules/{id}",
     *      operationId="updateSchedule",
     *      tags={"Schedules"},
     *      summary="Update existing schedule",
     *      description="Returns updated schedule data",
     *      @OA\Parameter(
     *          name="id",
     *          description="Schedule id",
     *          required=true,
     *          in="path",
     *          @OA\Schema(
     *              type="integer"
     *          )
     *      ),
     *      @OA\RequestBody(
     *          required=true,
     *          @OA\JsonContent(ref="#/components/schemas/UpdateScheduleRequest")
     *      ),
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation"
     *      ),
     *      @OA\Response(
     *          response=404,
     *          description="Resource Not Found"
     *      )
     * )
     */
    public function update($id, Request $request)
    {
        $schedule = Schedule::findOrFail($id);

        $this->validate($request, [
            'from' => 'required|string',
            'to' => 'required|string',
            'program_id' => 'required',
            'leader_id' => 'required'
        ]);

        $schedule->fill($request->all())->save();

        return $schedule;
    }

    /**
     * @OA\Delete(
     *      path="/schedules/{id}",
     *      operationId="deleteSchedule",
     *      tags={"Schedules"},
     *      summary="Delete existing schedule",
     *      description="Deletes a record and returns no content",
     *      @OA\Parameter(
     *          name="id",
     *          description="Schedule id",
     *          required=true,
     *          in="path",
     *          @OA\Schema(
     *              type="integer"
     *          )
     *      ),
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation"
     *       ),
     *      @OA\Response(
     *          response=404,
     *          description="Resource Not Found"
     *      )
     * )
     */
    public function destroy($id)
    {
        $schedule = Schedule::findOrFail($id);
        $schedule->delete();
        return $schedule;
    }
}
