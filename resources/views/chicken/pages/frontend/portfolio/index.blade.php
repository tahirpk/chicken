@extends(Config::get('config.template').'.layouts.frontend.app')
@section('content')
<section id="breadcrumbRow" class="row">
        
        <div class="row pageTitle m0">
            <div class="container">
                <h4 class="fleft">{{$portal->title}}</h4>
                <ul class="breadcrumb fright">
                    <li><a href="{{URL::to('/')}}">home</a></li>
                    <li class="active">{{$portal->title}}</li>
                </ul>
            </div>
        </div>
    </section>
<section id="whatWeDid" class="row contentRowPad">
        <div class="container">
            <div class="row">
               {!!$portal->description!!}                   
            </div>
        </div>
    </section>
<?php
$i=0;
                $categories=Portalbranch::get();
                
?>
<section id="newProducts" class="row contentRowPad">
<div class="container">
<div class="row m0 tabRow">
                <ul class="nav nav-tabs" role="tablist" id="shortcodeTab">
                    <?php
                    if(count($categories)>0){
                        $j=0;
                    foreach($categories as $category){
                        $projcategories = Projectcategory::where('category_id',$category->id)->get();
                        if(count($projcategories)>0){
                            $j++;
                    ?>
                    <li role="presentation" class=" @if($j==1){{'active'}}@endif"><a href="#projects{{$j}}" aria-controls="description" role="tab" data-toggle="tab">
                        <i class="fa fa-align-left"></i> {{$category->name}}
                    </a></li>
                    <?php
                        }
                    }
                    }
                    ?>
                    
                </ul>
                <div class="tab-content shortcodeTabContent">
                     <?php
                    if(count($categories)>0){
                        $k=0;
                    foreach($categories as $category){
                        $projcategories = Projectcategory::where('category_id',$category->id)->get();
                        if(count($projcategories)>0){
                            $k++;
                            $l=0;
                    ?>
                    <div role="tabpanel" class="tab-pane row m0 @if($k==1){{'active'}}@endif" id="projects{{$k}}">
                        <div class="row">
                            @foreach($projcategories as $pcategory)
                            <?php
                            $project = Project::where('id', $pcategory->project_id)->first();
                            if(count($project)>0){
                                $pimage=Portalimage::where('ismain',1)->where('portaldetail_id',$project->id)->first();
                            $l++;
                            ?>
                <div class="col-sm-3 product{{$pcategory->id.'-'.$l}}">
                    <div class="row m0 thumbnail">
                        <div class="row m0 imgHov">
                            <a href="{{URL::to('project/'.$project->slug)}}"><img src="{{asset('uploads/project/'.$pimage->image)}}" alt="{{$project->title}}" height="150"></a>
                            
                        </div>
                        <div class="row m0 productIntro">
                            <h5 class="heading"><a href="{{URL::to('project/'.$project->slug)}}">{{$project->title}}</a> </h5>
                           
                           
                        </div>
                    </div>
                </div> <!--Product 2-->
                <?php
                        }
                ?>
                @endforeach
                
            </div>
                    </div>
                    <?php
                        }
                    }
                    }
                    ?>
                   
                </div>
            </div> <!--Tabs Row-->
            
</div>
</section>
@endsection