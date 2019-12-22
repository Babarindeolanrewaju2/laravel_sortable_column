<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

<div class="container">
    <h3 class="text-center">Sort the columns with pagination</h3>
    <table class="table table-bordered">
        <tr>
            <th width="80px">@sortablelink('id')</th>
            <th>@sortablelink('name')</th>
            <th>@sortablelink('description')</th>
            <th>@sortablelink('created_at')</th>
        </tr>
        @if($products->count())
            @foreach($products as $key => $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->description }}</td>
                    <td>{{ $product->created_at->format('d-m-Y') }}</td>
                </tr>
            @endforeach
        @endif
    </table>
    {!! $products->appends(\Request::except('page'))->render() !!}
</div>

</body>
</html>
