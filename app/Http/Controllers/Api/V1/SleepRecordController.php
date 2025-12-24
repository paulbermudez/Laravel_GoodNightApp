<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\SleepRecord;
use App\Http\Requests\StoreSleepRecordRequest;
use App\Http\Requests\UpdateSleepRecordRequest;
use App\Http\Controllers\Controller;

class SleepRecordController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return SleepRecord::all();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSleepRecordRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(SleepRecord $sleepRecord)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SleepRecord $sleepRecord)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSleepRecordRequest $request, SleepRecord $sleepRecord)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SleepRecord $sleepRecord)
    {
        //
    }
}
