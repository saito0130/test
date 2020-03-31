{{$num}}
<table>
<form action="/calc/index" method="post">
    {{ csrf_field() }}
    <tr><th>値1: </th><td><input type="text" name="val1" value="{{isset($val1)?$val1:''}}"></td></tr>
    <tr><th>値2: </th><td><input type="text" name="val2" value="{{isset($val2)?$val2:''}}"></td></tr>
    <th><input name="calcFlg" type="radio" value="1">+</th>
    <th><input name="calcFlg" type="radio" value="2">-</th>
    <th><input name="calcFlg" type="radio" value="3">×</th>
    <th><input name="calcFlg" type="radio" value="4">÷</th>
    <th><input name="calcFlg" type="radio" value="5">%</th>
    <tr><th></th><td><input type="submit" value="calc"></td></tr>
</form>
</table>
