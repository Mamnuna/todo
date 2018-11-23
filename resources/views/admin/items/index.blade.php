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
        <li><a href="{{ route('items.index') }}">View All Activities</a></li>
    </ul>
</nav>

<h1>All the Activities</h1>

<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <td>Check</td>
            <td>ID</td>
            <td>Name</td>
            <td>Delete</td>
            
        </tr>
    </thead>
    <tbody>
    @foreach($items as $item)
        <tr>
        <input type="hidden" name="checked" value="0">
            <td>
            <div class="checkbox">
     <label><input type="checkbox" data-id="{{ $item->id }}" name="checked" class="checker"  @if ($item->checked == true) checked @endif></label>
</div>
            </td>
            <td>{{ $item->id }}</td>
            <td>{{ $item->name }}</td>
            <td>
            <form action="{{ route('items.destroy', $item->id) }}" method="POST">
    {!! method_field('delete') !!}
    {!! csrf_field() !!}
    <button class="btn btn-default">
            Delete
            </button>
</form>
            </td>        


            
        </tr>
    @endforeach
    </tbody>
</table>

<br><br>

<div>
<h1>Add an Activity</h1>
<br><br>
{!! Form::open(['route' => 'items.store', 'class' => 'form', 'id' => 'form-validation' ]) !!}

    <div class="form-group has-label">
      <label>Activity name</lable>
        {{ Form::text('name')}}
    </div>
    <button>Add</button>

{{ Form::close() }}

</div>

</div>
<script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
</body>
</html>