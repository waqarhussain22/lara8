<?php

namespace App\Http\Controllers;

use App\Models\Story;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;
use App\Http\Requests\StoryRequest;

class StoriesController extends Controller
{
    public function __construct()
    {
        $this->authorizeResource(Story::class, 'story');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $stories = Story::where('user_id', auth()->user()->id)
            ->orderBy('id', 'DESC')
            ->paginate(3);

        return view('stories.index',[
            'stories' => $stories
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $story = new Story();
        return view('stories.create',[
            'story' => $story
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoryRequest $request)
    {
        //

//        $data = $request->validate([
//            'title' =>'required',
//            'body' =>'required',
//            'type' =>'required',
//            'status' =>'required',
//            ]);
        // this will add user id itself based on the relationship defined in user moder from id-> to stories model user_id
//        auth()->user()->stories()->create([
//           'title'  => $request->title,
//            'body'  => $request->body,
//            'type'  => $request->type,
//            'status'=> $request->status,
//        ]);
//        auth()->user()->stories()->create($data);

        auth()->user()->stories()->create( $request->all() );
        return redirect()->route('stories.index')->with('status', 'Story Added successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Story  $story
     * @return \Illuminate\Http\Response
     */
    public function show(Story $story)
    {
        //
        return view('stories.show', [
            'story' => $story
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Story  $story
     * @return \Illuminate\Http\Response
     */
    public function edit(Story $story)
    {
        //
//        Gate::Authorize('edit-story', $story);
//        $this->Authorize('update', $story);
        return view('stories.edit', [
            'story' => $story
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Story  $story
     * @return \Illuminate\Http\Response
     */
    public function update(StoryRequest $request, Story $story)
    {
        //
//        $data = $request->validate([
//            'title' =>'required',
//            'body' =>'required',
//            'type' =>'required',
//            'status' =>'required',
//        ]);

//        $story->update($data);
        $story->update( $request->all());
        return redirect()->route('stories.index')->with('status', 'Story Updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Story  $story
     * @return \Illuminate\Http\Response
     */
    public function destroy(Story $story)
    {
        //
        $story->delete();
        return redirect()->route('stories.index')->with('status', 'Story Deleted successfully!');
    }
}
