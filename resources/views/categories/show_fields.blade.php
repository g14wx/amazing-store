<!-- Title Field -->
<div class="col-sm-12">
    {!! Form::label('title', 'Title:') !!}
    <p>{{ $category->title }}</p>
</div>

<!-- Description Field -->
<div class="col-sm-12">
    {!! Form::label('description', 'Description:') !!}
    <p>{{ $category->description }}</p>
</div>

<!-- Img Field -->
<div class="col-sm-12">
    {!! Form::label('img', 'Img:') !!}
    <p>{{ $category->img }}</p>
</div>

