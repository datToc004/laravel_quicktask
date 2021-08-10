<?php
function getCategory($array, $parent, $shift, $active)
{
    foreach($array as $row){
        if ($row->parent==$parent) {
            if ($row->id==$active) {
                echo "<option selected value='$row->id'>" . $shift . $row->name . "</option>";
            } else {
                echo "<option value='$row->id'>" . $shift . $row->name . "</option>";
            }
            
            getCategory($array, $row->id, $shift . '---|', $active);
            
        }
    }
}
