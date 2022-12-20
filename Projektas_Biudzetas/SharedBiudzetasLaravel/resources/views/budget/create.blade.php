<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">   
    <title>Creating new budget for user : {{$user->name}}</title>
</head>
<?php 
//dd($user)
?>
<h6><a href="{{route('user.show',[$user])}}">Back</a></h6>
<form method="POST" action="{{route('budget.store',$user)}}">
   Name: <input type="text" name="budget_name">
   <input type="hidden" name="user_id" value="$user">
   @csrf
   <button type="submit">ADD</button>
</form>