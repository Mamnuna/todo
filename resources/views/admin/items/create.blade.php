<!DOCTYPE html>
<html>
<head>
    <title>Items</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

<nav class="navbar navbar-inverse">

    <ul class="nav navbar-nav">
        <li><a href="{{ route('items.index') }}">View All Items</a></li>
        <li><a href="{{ route('items.create') }}">Create an item</a></li>
    </ul>
</nav>
<h1>Add an Activity</h1>
<br><br>
{!! Form::open(['route' => 'items.store', 'class' => 'form', 'id' => 'form-validation' ]) !!}

    <div class="form-group has-label">
      <label>Item name</lable>
        {{ Form::text('name')}}
    </div>
    <button>Add</button>

{{ Form::close() }}