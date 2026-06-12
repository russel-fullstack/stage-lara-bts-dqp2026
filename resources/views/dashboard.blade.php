@extends('layouts.app')

@section('title', 'Tableau de bord')

@section('content')

    <x-page-header title="Tableau de bord" subtitle="Bienvenue sur votre tableau de bord" />

  {{-- Stats globales --}}
    <div class="grid grid-cols-3 gap-4 mb-8">
        <x-stat-card label="Années académiques" value="3" color="gray">
           
        </x-stat-card>

        <x-stat-card label="Filières actives" value="3" color="gray">
           
        </x-stat-card>

        <x-stat-card label="Unités d'Enseignement" value="52" color="red">
          
        </x-stat-card>
    </div>
   <form>
    <x-form.input name="search" label="Rechercher une UE" placeholder="Entrez le nom de l'UE...
    " />
   </form>
@endsection


