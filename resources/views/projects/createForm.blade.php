@extends('layouts.base')


@section('content')
    <form style="margin-top: 50px;" method="POST" action="{{ route('project.store') }}"  @submit.prevent="onSubmit"
        @keydown="errors.clear($event.target.name)">
        {{ csrf_field() }}

        <div class="control">
            <label for="name" class="label">Project Name:</label>

            <input name="name" id="name" class="input" v-model="form.name" @keydown="errors.clear('name')">

            <span class="help is-danger" v-if="errors.has('name')" v-text="errors.get('name')"></span>
        </div>

        <div class="control">
            <label for="name" class="label">Project Description:</label>

            <input name="description" id="description" class="input" v-model="form.description">

            <span class="help is-danger" v-if="errors.has('description')" v-text="errors.get('description')"></span>
        </div>

        <div class="control">

            <button type="sumbit" :disabled="errors.any()" class="button is-primary">Submit</button>

        </div>
    </form>
@stop


@section('scripts')
    <script src="{{ asset('js/projects/createForm.js') }}"></script>
@stop