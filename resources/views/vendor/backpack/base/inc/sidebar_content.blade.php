{{-- This file is used to store sidebar items, inside the Backpack admin panel --}}
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="la la-home nav-icon"></i>
        {{ trans('backpack::base.dashboard') }}</a></li>

<li class="nav-item"><a class="nav-link" href="{{ backpack_url('project') }}"><i class="nav-icon la la-youtube"></i>
        Projects</a></li>

<li class="nav-item"><a class="nav-link" href="{{ backpack_url('category') }}"><i class="nav-icon la la-tags"></i>
        Catégories</a></li>

<li class="nav-item"><a class="nav-link" href="{{ backpack_url('user') }}"><i class="nav-icon la la-users-cog"></i>
        Utilisateurs</a></li>

<li class="nav-item"><a class="nav-link" href="{{ backpack_url('skill') }}"><i
            class="nav-icon la la-hand-point-right "></i>Compétences</a></li>
