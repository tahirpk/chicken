<div class="panel-body no-padding">
    <div class="alert alert-info" style="display: none" id="{{$modulename}}_customfieldmessage">
           
            
        </div>
        
        <input type="hidden" id="{{$modulename}}_module_id" value="{{$moduleid}}" />
        <input type="hidden" id="{{$modulename}}_object_id" value="{{$objectid}}" />
    <table id="{{$modulename}}_example" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
            <tr>
                
                <th>Name</th>
                <th>Display Name</th>
                <th>Type</th>
                <th>Default Values</th>
                <th>Data Type</th>
                <th>Add/Remove</th>

            </tr>
        </thead>
        <tbody>
            <?php
            $i=1;
            ?>
            @if(count($fieldslist)>0)
            
            @foreach($fieldslist as $cfield)
            <tr class="odd gradeX" id="{{$modulename}}_1">
                
                <td><input type="text" id="custom_name_{{$modulename}}_{{$i}}" value="{{$cfield->name}}" /></td>
                <td><input type="text" id="custom_display_name_{{$modulename}}_{{$i}}" value="{{$cfield->display_name}}" /></td>
                <td>
                    <select id="custom_fieldtype_{{$modulename}}_{{$i}}" class="form-control">
                        <option @if($cfield->controll_type=='text'){{'selected'}}@endif value="text" >Textbox</option>
                        <option @if($cfield->controll_type=='file'){{'selected'}}@endif value="file" >Upload File</option>
                        <option @if($cfield->controll_type=='checkbox'){{'selected'}}@endif value="checkbox" >Checkbox</option>
                        <option @if($cfield->controll_type=='radio'){{'selected'}}@endif value="radio" >Radio</option>
                        <option @if($cfield->controll_type=='datepicker'){{'selected'}}@endif value="datepicker" >Date Picker</option>
                        <option @if($cfield->controll_type=='editor'){{'selected'}}@endif value="editor" >Editor</option>
                        <option @if($cfield->controll_type=='select'){{'selected'}}@endif value="select" >Select Dropdown</option>
                        <option @if($cfield->controll_type=='multiselect'){{'selected'}}@endif value="multiselect" >Multiselect</option>
                        <option @if($cfield->controll_type=='textarea'){{'selected'}}@endif value="textarea" >Textarea</option>
                        
                    </select>
                </td>
                <td class="center"><input type="text" id="custom_default_{{$modulename}}_{{$i}}"  value="{{$cfield->field_value}}" /></td>
                <td class="center">
                    <select id="custom_datatype_{{$modulename}}_{{$i}}" class="form-control">
                        <option @if($cfield->data_source=='Static'){{'selected'}}@endif value="Static" >Static</option>
                        <option @if($cfield->data_source=='Dynamic'){{'selected'}}@endif value="Dynamic" >Dynamic</option>
                        <option @if($cfield->data_source=='None'){{'selected'}}@endif value="None" >None</option>
                    </select>
                </td>
                <td>
                    
                </td>
            </tr>
            <?php
            $i++;
            ?>
            @endforeach
            <tr class="odd gradeX" id="{{$modulename}}_{{$i}}">
                
                <td><input type="text" id="custom_name_{{$modulename}}_{{$i}}" value="" /></td>
                <td><input type="text" id="custom_display_name_{{$modulename}}_{{$i}}" value="" /></td>
                <td>
                    <select id="custom_fieldtype_{{$modulename}}_{{$i}}" class="form-control">
                        <option value="text" >Textbox</option>
                        <option value="file" >Upload File</option>
                        <option value="checkbox" >Checkbox</option>
                        <option value="radio" >Radio</option>
                        <option value="datepicker" >Date Picker</option>
                        <option value="editor" >Editor</option>
                        <option value="select" >Select Dropdown</option>
                        <option value="multiselect" >Multiselect</option>
                        <option value="textarea" >Textarea</option>
                        
                    </select>
                </td>
                <td class="center"><input type="text" id="custom_default_{{$modulename}}_{{$i}}" value="" /></td>
                <td class="center">
                    <select id="custom_datatype_{{$modulename}}_{{$i}}" class="form-control">
                        <option value="Static" >Static</option>
                        <option value="Dynamic" >Dynamic</option>
                        <option value="None" >None</option>
                    </select>
                </td>
                <td>
                    <a href="javascript:;" onclick="addextra('custom_name_{{$modulename}}_{{$i}}','custom_display_name_{{$modulename}}_{{$i}}','custom_fieldtype_{{$modulename}}_{{$i}}','custom_default_{{$modulename}}_{{$i}}','custom_datatype_{{$modulename}}_{{$i}}')" >Add</a>
                </td>
            </tr>
            @else 
            <tr class="odd gradeX" id="{{$modulename}}_{{$i}}">
                
                <td><input type="text" id="custom_name_{{$modulename}}_{{$i}}" value="" /></td>
                <td><input type="text" id="custom_display_name_{{$modulename}}_{{$i}}" value="" /></td>
                <td>
                    <select id="custom_fieldtype_{{$modulename}}_{{$i}}" class="form-control">
                        <option value="text" >Textbox</option>
                        <option value="file" >Upload File</option>
                        <option value="checkbox" >Checkbox</option>
                        <option value="radio" >Radio</option>
                        <option value="datepicker" >Date Picker</option>
                        <option value="editor" >Editor</option>
                        <option value="select" >Select Dropdown</option>
                        <option value="multiselect" >Multiselect</option>
                        <option value="textarea" >Textarea</option>
                        
                    </select>
                </td>
                <td class="center"><input type="text" id="custom_default_{{$modulename}}_{{$i}}" value="" /></td>
                <td class="center">
                    <select id="custom_datatype_{{$modulename}}_{{$i}}" class="form-control">
                        <option value="Static" >Static</option>
                        <option value="Dynamic" >Dynamic</option>
                        <option value="None" >None</option>
                    </select>
                </td>
                <td>
                    <a href="javascript:;" onclick="addextra('custom_name_{{$modulename}}_{{$i}}','custom_display_name_{{$modulename}}_{{$i}}','custom_fieldtype_{{$modulename}}_{{$i}}','custom_default_{{$modulename}}_{{$i}}','custom_datatype_{{$modulename}}_{{$i}}')" >Add</a>
                </td>
            </tr>
            @endif
        </tbody>
    </table>
    
</div>