@extends('layout')

@section('content')


<style>
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 120px;
    text-align: left;    
}
</style>

<table>
<tbody>
<tr>
<td colspan="2"><img class="card-img-right flex-auto d-none d-lg-block p-3" style="max-height:200px" 
                src="{{asset("images/CP_LOGO.png")}}" alt="Card image cap"></td>
</tr>
<tr>
<td><font size="120">SHIP TO:</font></td>
<td><font size="100">{{$user->first_name . ' ' . $user->last_name}}</font> <br/>

<font size="100">{{$user->address}}</font>

</td>
</tr>
<tr>
<td><font size="120">POSTAL CODE:</font></td>
<td><font size="100">{{$user->postalcode}}</font></td>
</tr>
<tr>
<td colspan="2"><img class="card-img-right flex-auto d-none d-lg-block p-3" style="max-height:300px" 
                src="{{asset("images/barcode.jpg")}}" alt="Card image cap"></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
</tbody>
</table>

@endsection