@extends('layouts.master')

        @section('data')
        	<img src="{{asset('/upload/' .$data->certificate)}}">
        @endsection