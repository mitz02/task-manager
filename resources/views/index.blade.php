<x-layout>
    <x-slot:heading>
      Task|Home
    </x-slot:heading>

    <div class="container">
        <h1>All Tasks</h1>

        <!-- Buttons -->
        <div class="button-group">
            <a href="/projects" class="btn btn-primary">
                <i class="fa-solid fa-folder-plus"></i> Create New Project
            </a>
            <a href="/tasks" class="btn btn-success">
                <i class="fa-solid fa-plus"></i> Create New Task
            </a>
        </div>

     
        <ul id="task-list">
            @forelse ($tasks as $task)
                <li data-id="{{ $task->id }}">
                    <i class="fa-solid fa-bars drag-handle"></i> 

                    <div class="task-info">
                        <span class="task-title">{{ $task->name }}</span><br>
                        <span class="project-name">{{ $task->project->name ?? 'Unassigned' }}</span>
                    </div>

                    <form action="{{ route('tasks.destroy', $task) }}" method="POST" style="display:inline;">
                        @csrf @method('DELETE')
                        <button type="submit" class="delete-btn"><i class="fa fa-trash"></i></button>
                    </form>
                </li>
            @empty
                <li>No tasks available.</li>
            @endforelse
        </ul>
    </div>

    <script>
        $(function () {
            $("#task-list").sortable({
                handle: ".drag-handle",
                update: function () {
                    let order = $("#task-list").sortable("toArray", { attribute: "data-id" });
                    $.post("{{ route('tasks.reorder') }}", { order: order, _token: "{{ csrf_token() }}" });
                }
            });
        });
    </script>
</x-layout>
