<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Subscriber as Subscription;
use Illuminate\Http\Request;

class SubscriptionController extends Controller
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
        $this->authorize('list subscriptions', Subscription::class);
        $search = $request->get('search', '');

        $subscriptions = Subscription::search($search)
            ->latest()
            ->paginate();
            
        return view('admin.subscription.index', compact('subscriptions', 'search'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.subscription.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->authorize('create subscriptions', Subscription::class);
        $credentials = $request->validated();
        Subscription::create($credentials);

        return redirect()
            ->route('admin.subscription.index')
            ->with('success', __('crud.admin.subscriptions.name')." ".__('crud.general.created'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Subscription $subscription)
    {
        return $subscription;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Subscription $subscription)
    {
        $this->authorize('view subscriptions', $subscription);
        return view('admin.subscription.edit', compact('subscription'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Subscription $subscription)
    {
        $credentials = $request->validated();
        $subscription->update($credentials);
        
        return redirect()
            ->route('admin.subscription.index')
            ->with('success', __('crud.admin.subscriptions.name')." ".__('crud.general.updated'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Subscription $subscription)
    {
        $this->authorize('delete subscriptions', $subscription);
        try {
            $subscription->delete();
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
