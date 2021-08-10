<?php
function GetCategory($mang,$parent,$shift,$active)
{
    foreach($mang as $row)
    {
        if($row->parent==$parent)
        {
            if($row->id==$active)
            {
                echo "<option selected value='$row->id'>".$shift.$row->name."</option>";
            }
            else {
                echo "<option value='$row->id'>".$shift.$row->name."</option>";
            }
            
            GetCategory($mang,$row->id,$shift.'---|',$active);
            
        }
    }
}