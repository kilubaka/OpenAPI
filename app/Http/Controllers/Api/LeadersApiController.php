<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Leader;
use Illuminate\Http\Request;

class LeadersApiController extends Controller
{
    /**
     * @OA\Get(
     *      path="/leaders",
     *      operationId="getLeadersList",
     *      tags={"Leaders"},
     *      summary="Get list of leaders",
     *      description="Returns list of leaders",
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
        return Leader::all();
    }

    /**
     * @OA\Post(
     *      path="/leaders",
     *      operationId="storeLeader",
     *      tags={"Leaders"},
     *      summary="Store new leader",
     *      description="Returns created leader data",
     *      @OA\RequestBody(
     *          required=true,
     *          @OA\JsonContent(ref="#/components/schemas/StoreLeaderRequest")
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
            'name' => 'required',
            'date_of_birth' => 'required|date',
            'email' => 'required|email'
        ]);

        return Leader::create($request->all());
    }

    /**
     * @OA\Get(
     *      path="/leaders/{id}",
     *      operationId="getLeaderById",
     *      tags={"Leaders"},
     *      summary="Get leader information",
     *      description="Returns category data",
     *      @OA\Parameter(
     *          name="id",
     *          description="Leader id",
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
        return Leader::findOrFail($id);
    }

    /**
     * @OA\Put(
     *      path="/leaders/{id}",
     *      operationId="updateLeader",
     *      tags={"Leaders"},
     *      summary="Update existing leader",
     *      description="Returns updated leader data",
     *      @OA\Parameter(
     *          name="id",
     *          description="Leader id",
     *          required=true,
     *          in="path",
     *          @OA\Schema(
     *              type="integer"
     *          )
     *      ),
     *      @OA\RequestBody(
     *          required=true,
     *          @OA\JsonContent(ref="#/components/schemas/UpdateLeaderRequest")
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
        $leader = Leader::findOrFail($id);

        $this->validate($request, [
            'name' => 'required',
            'date_of_birth' => 'required|date',
            'email' => 'required|email'
        ]);

        $leader->fill($request->all())->save();

        return $leader;
    }

    /**
     * @OA\Delete(
     *      path="/leaders/{id}",
     *      operationId="deleteLeader",
     *      tags={"Leaders"},
     *      summary="Delete existing leader",
     *      description="Deletes a record and returns no content",
     *      @OA\Parameter(
     *          name="id",
     *          description="Leader id",
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
        $leader = Leader::findOrFail($id);
        $leader->delete();
        return $leader;
    }
}
