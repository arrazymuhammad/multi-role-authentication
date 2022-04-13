<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3" style="
        display:flex;
        flex-wrap: wrap;
        justify-content: space-between;
        gap:10px;
    ">
        @foreach (auth()->user()->role as $role)
            <x-template.module-box color="{{ $role->module->color }}"
                                   url="{{ $role->module->url }}"
                                   title="{{ $role->module->title }}"
                                   subtitle="{{ $role->module->subtitle }}" />
        @endforeach
    </div>
</aside>

<style>
    a {
        flex-wrap: wrap;
        justify-content: space-between;
    }

</style>
