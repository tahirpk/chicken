@if(count($fieldslist)>0)
@foreach($fieldslist as $flist)
<?php
$valuefield = $flist->field_value;
$exist=DB::table('extrafieldvalues')->where('custumfileldid',$flist->id)->where('for_module',$modulefor)->where('for_object',$objectfor)->where('module_id',$moduleid)->where('object_id',$objectid)->first();
if(count($exist)>0)
    $valuefield = $exist->field_value;
?>
<div class="form-group">
    <label for="focusedinput" class="col-sm-2 control-label">{{$flist->display_name}}</label>
    <div class="col-sm-8">
        <input class="form-control" value="{{$valuefield}}" id="{{$flist->name}}" name="{{$flist->name}}" placeholder="{{$flist->display_name}}" type="text">
    </div>
    <div class="col-sm-2">
            <!--<p class="help-block">Your help text!</p>-->
    </div>
</div>
@endforeach
@endif