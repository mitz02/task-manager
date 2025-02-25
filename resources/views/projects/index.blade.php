<x-layout>
    <x-slot:heading>
        <i class="fa-solid fa-folder-plus"></i> Create a New Project
    </x-slot:heading>

    <div class="container">
        <h2><i class="fa-solid fa-folder"></i> CREATE PROJECT</h2>

        <!-- Project Creation Form -->
        <form action="{{ route('projects.store') }}" method="POST">
            @csrf
            <input type="text" name="name" placeholder="Project Name" required>
            <button type="submit">
                <i class="fa-solid fa-plus"></i> Add Project
            </button>
        </form>

        <!-- Project List -->
        <ul class="project-list">
            @foreach ($projects as $project)
                <li>
                    {{ $project->name }}
                </li>
            @endforeach
        </ul>
    </div>

  
</x-layout>
