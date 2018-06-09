<?php
/**
 * Created by PhpStorm.
 * User: Shron
 * Date: 6/9/2018
 * Time: 1:55 PM
 */
?>
<html>
<head>
    <title></title>
</head>
<body>
{!! Form::open(array('rout' => 'queries.search', 'class'=>'form navbar-form navbar-right searchform')) !!}
{!! Form::text('search', null,
                       array('required',
                            'class'=>'form-control',
                            'placeholder'=>'Search for a tutorial...')) !!}
{!! Form::submit('Search',
                           array('class'=>'btn btn-default')) !!}
{!! Form::close() !!}
</body>
</html>
