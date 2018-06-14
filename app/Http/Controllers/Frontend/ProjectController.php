<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Config;
use Portfolio;
use Projectcategory;
use Project;
use Portalbranch;
use Portalimage;
class ProjectController extends Controller
{
    public function portfolio(){
        $portfolio =Portfolio::where('id',1)->first();
        
        return view(Config::get('config.template') . '.pages.frontend.portfolio.index')->withPortal($portfolio);
    }
    public function projectdetail($slug){
        $project = Project::where('slug',$slug)->first();
        $projectimages = Portalimage::where('portaldetail_id',$project->id)->get();
        return view(Config::get('config.template') . '.pages.frontend.portfolio.project')->withProject($project)->withImages($projectimages);
    }
}
