@extends(backpack_view('blank'))

@php
    $widgets['before_content'][] = [
        'type' => 'jumbotron',
        'heading' => trans('backpack::base.welcome'),
        'content' => 'Vous êtes dans le panneau d\'administration du portfolio',
        // 'button_link' => backpack_url('logout'),
        // 'button_text' => trans('backpack::base.logout'),
    ];
@endphp

@section('content')
    <p>Vous pouvez :</p>
    <ul>
        <li>Créer des catégories</li>
        <li>Voir des catégories</li>
        <li>Modifier des catégories</li>
        <li>Supprimer des catégories</li>
    </ul>
    <hr />
    <ul>
        <li>Créer des projets</li>
        <li>Voir des projets</li>
        <li>Modifier des projets</li>
        <li>Supprimer des projets</li>
    </ul>
@endsection
