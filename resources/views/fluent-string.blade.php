<div>
    <!-- Simplicity is an acquired taste. - Katharine Gerould -->
</div>
@php
    use Illuminate\Support\Str;


    //fluent strings
$str= Str::of('hlo world')->ucfirst()->trim()->lower()->upper()->replace('HLO','hi');

@endphp
{{ $str }}




<?php
// previous method
$info="hi, lets learn fluent string ";
$info=Str::ucfirst($info); // first letter capital
$info = trim($info);     //remove spaces staring or ending
$info = strtolower($info); //lower string
echo $info;


?>