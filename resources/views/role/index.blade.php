@extends('layouts.admin')

@section('content')


<roles-index :roles="{{ json_encode($roles) }}" :permissions="{{ json_encode($permissions) }}" inline-template>

<div>

    <modal v-show="showModal">
        <p class="subtitle is-5" slot="header"> New Role</p>
            <div slot="body"> 
                <form action="POST" @submit.prevent="submit">
                    <div class="field">
                        <input type="text" class="input" v-model="name" placeholder="Role name">
                    </div>
                    <br/>
                    <p class="subtitle is-6">Assign Permissions</p>

                    <div class="field">
                        @foreach ($permissions as $permission)
                        <label class="checkbox">
                            <input type="checkbox" value="{{ $permission->id }}" v-model="permissions_list">
                                {{ $permission->name }}
                        </label>                            
                        @endforeach 
                    </div>    

                    <div class="columns is-mobile">
                        <div class="column">
                            <button class="button is-link" type="submit">SAVE</button>                        
                        </div>
                        <div class="column">
                            <a class="button is-danger" @click="close">CANCEL</a>                        
                        </div>                    
                    </div>                    
                </form>
            </div>
      </modal>

    <section class="section">
        <div class="columns">
            <div class="column is-10 is-offset-1">
                <p class="title is-3">Manage Roles</p>

        <nav class="level">
            <div class="level-left">
                <div class="level-item">
                    @can('add_roles')
                        <button class="button is-dark" @click="showModal = true">NEW ROLE</button>
                    @endcan               
                </div>
            </div>
        </nav> 
        
        <tabs>
            @foreach($roles as $role)
                <tab name="{{ $role->name }}" :selected="true">
                    <p class="subtitle is-5"> Permissions</p>    
                    <h1> Check permission to add to role</h1>
                    <br/>

                    <div class="columns">
                        @foreach($permissions->chunk(3) as $set)
                            <div class="column">
                                @foreach($permissions as $perm)                    
                                    <?php
                                        $per_found = null;
                                        if( isset($role) ) {
                                            $per_found = $role->hasPermissionTo($perm->name);
                                        }
                                        if( isset($user)) {
                                            $per_found = $user->hasDirectPermission($perm->name);
                                        }
                                    ?>

                                    <div class="field">
                                        <div class="checkbox">
                                            <label class="{{ str_contains($perm->name, 'delete') ? 'text-danger' : '' }}">
                                                {!! Form::checkbox("permissions[]", $perm->name, $per_found, isset($options) ? $options : []) !!} {{ $perm->name }}
                                            </label>
                                        </div>                           
                                    </div>               
                                @endforeach                         
                            </div>
                        @endforeach
                    </div>       
                </tab>
            @endforeach
        </tabs>          

    </section>
</div>

</roles-index>

@endsection