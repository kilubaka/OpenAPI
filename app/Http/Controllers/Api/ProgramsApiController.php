<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Program;
use Illuminate\Http\Request;

class ProgramsApiController extends Controller
{
    /**
     * @OA\Get(
     *      path="/programs",
     *      operationId="getProgramsList",
     *      tags={"Programs"},
     *      summary="Get list of programs",
     *      description="Returns list of programs",
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
        return Program::all();
    }

    /**
     * @OA\Post(
     *      path="/programs",
     *      operationId="storeProgram",
     *      tags={"Programs"},
     *      summary="Store new program",
     *      description="Returns created program data",
     *      @OA\RequestBody(
     *          required=true,
     *          @OA\JsonContent(ref="#/components/schemas/StoreProgramRequest")
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
            'description' => 'required',
            'category_id' => 'required',
            'age_restriction' => 'required',
            'cost' => 'required'
        ]);

        return Program::create($request->all());
    }

    /**
     * @OA\Get(
     *      path="/programs/{id}",
     *      operationId="getProgramById",
     *      tags={"Programs"},
     *      summary="Get program information",
     *      description="Returns program data",
     *      @OA\Parameter(
     *          name="id",
     *          description="Program id",
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
        return Program::findOrFail($id);
    }

    /**
     * @OA\Put(
     *      path="/programs/{id}",
     *      operationId="updateProgram",
     *      tags={"Programs"},
     *      summary="Update existing program",
     *      description="Returns updated program data",
     *      @OA\Parameter(
     *          name="id",
     *          description="Program id",
     *          required=true,
     *          in="path",
     *          @OA\Schema(
     *              type="integer"
     *          )
     *      ),
     *      @OA\RequestBody(
     *          required=true,
     *          @OA\JsonContent(ref="#/components/schemas/UpdateProgramRequest")
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
        $program = Program::findOrFail($id);

        $this->validate($request, [
            'name' => 'required',
            'description' => 'required',
            'category_id' => 'required',
            'age_restriction' => 'required',
            'cost' => 'required'
        ]);

        $program->fill($request->all())->save();

        return $program;
    }

    /**
     * @OA\Delete(
     *      path="/programs/{id}",
     *      operationId="deleteProgram",
     *      tags={"Programs"},
     *      summary="Delete existing program",
     *      description="Deletes a record and returns no content",
     *      @OA\Parameter(
     *          name="id",
     *          description="Program id",
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
        return Program::findOrFail($id)->delete();
    }
}
