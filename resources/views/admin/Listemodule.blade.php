@extends('layouts.dashboard')


@section('dashboard-content')


<div>
        <table class="table table-bordered table-striped">
            <thead>
            <th>Module</th>
            <th>Horaire</th>
            <th>Date</th>
            <th>Salle</th>
            <th>Niveau</th>
            <th>Formateur</th>
            </thead>
            <tbody>
            @foreach($modulesrep as $modules)
                <tr>
                    <td class="bg-primary">{{$modules->module}}</td>
                    <td class="bg-warning">{{$modules->horaire->horaire}}</td> 
                    <td class="bg-danger">{{$modules->date->date}}</td>
                    <td class="bg-info">{{$modules->salle->salle}}</td>
                    <td class="bg-success">{{$modules->niveau->niveau}}</td>
                    <td class="bg-secondary">{{$modules->formateur->formateur}}</td>
                    
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
   

    @endsection