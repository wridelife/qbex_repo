<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StorePlanRequest;
use App\Http\Requests\Admin\UpdatePlanRequest;
use App\Models\Plan;
use Illuminate\Http\Request;

class PlanController extends Controller
{
    public function __construct()
    {
        $this->middleware('demo')->only(['update', 'destroy']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $this->authorize('list plans', Plan::class);
        $search = $request->get('search', '');

        $plans = Plan::search($search)
            ->latest()
            ->paginate();
            
        return view('admin.plan.index', compact('plans', 'search'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.plan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePlanRequest $request)
    {
        $this->authorize('create plans', Plan::class);
        $credentials = $request->validated();
        Plan::create($credentials);

        return redirect()
            ->route('admin.plan.index')
            ->with('success', __('crud.admin.plans.name')." ".__('crud.general.created'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Plan $plan)
    {
        return $plan;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Plan $plan)
    {
        $this->authorize('view plans', $plan);
        return view('admin.plan.edit', compact('plan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePlanRequest $request, Plan $plan)
    {
        $credentials = $request->validated();
        $plan->update($credentials);
        
        return redirect()
            ->route('admin.plan.index')
            ->with('success', __('crud.admin.plans.name')." ".__('crud.general.updated'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Plan $plan)
    {
        $this->authorize('delete plans', $plan);
        try {
            $plan->delete();
        } catch (\Illuminate\Database\QueryException $e) {
            if($e->getCode() == 23000)
            {
                return redirect()
                    ->back()
                    ->withErrors(__('crud.general.integrity_violation'));
            }
            return redirect()
                ->back()
                ->withErrors(__('crud.general.not_done'));
        }

        return redirect()
            ->back()
            ->withSuccess(__('crud.general.deleted'));
    }
}
