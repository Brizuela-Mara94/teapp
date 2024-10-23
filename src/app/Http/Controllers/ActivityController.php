<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Traits\DebugHelper;
use App\Http\Requests\StoreActivityRequest;
use App\Http\Requests\UpdateActivityRequest;

class ActivityController extends Controller
{
    use DebugHelper;

    public function index()
    {
        $activities = Activity::latest()->paginate(5);
        return view('activities.index', compact('activities'));
    }

    public function create()
    {
        return view('activities.create');
    }

    public function store(StoreActivityRequest $request)
    {
        $file = $request->file('image');
        $contents = file_get_contents($file);
        $base64Image = base64_encode($contents);
        $validated = $request->validated();
        $validated['image'] = $base64Image;
        Activity::create($validated);
        return redirect()->route('activities.index');
    }

    public function show(Activity $activity)
    {
        return view('activities.show', compact('activity'));
    }

    public function edit(Activity $activity)
    {
        return view('activities.edit', compact('activity'));
    }

    public function update(UpdateActivityRequest $request, Activity $activity)
    {
        $file = $request->file('image');
        if (!$file) {
            return back()->withErrors(['error' => 'No file uploaded.']);
        }
        $contents = file_get_contents($file->getRealPath());
        $base64Image = base64_encode($contents);
        $validated = $request->validated();
        $validated['image'] = $base64Image;
        $activity->update($validated);
        return redirect()->route('activities.index');
    }

    public function destroy(Activity $activity)
    {
        $activity->delete();
        return redirect()->route('activities.index');
    }
}
