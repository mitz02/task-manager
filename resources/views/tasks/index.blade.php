
    <x-layout>
        <x-slot:heading>
            All Tasks
        </x-slot:heading>
    <div class="container">
        <!-- Task Form -->
        <form action="{{ route('tasks.store') }}" method="POST">
            @csrf
            <input type="text" name="name" placeholder="Task Name" required>
            
            <!-- Project Dropdown -->
            <select name="project_id">
                <option value="">Select Project</option>
                @foreach($projects as $project)
                    <option value="{{ $project->id }}">{{ $project->name }}</option>
                @endforeach
            </select>

            <button type="submit"><i class="fa fa-plus"></i> Add Task</button>
        </form>

        <!-- Task List -->
        <ul id="task-list">
            @foreach ($tasks as $task)
                <li data-id="{{ $task->id }}">
                    <i class="fa fa-bars drag-handle"></i> 

                    <div class="task-info">
                        <span class="task-title">{{ $task->name }}</span><br>
                        <span class="project-name">{{ $task->project->name ?? 'Unassigned' }}</span>
                    </div>

                    <form action="{{ route('tasks.destroy', $task) }}" method="POST" style="display:inline;">
                        @csrf @method('DELETE')
                        <button type="submit" class="delete-btn"><i class="fa fa-trash"></i></button>
                    </form>
                </li>
            @endforeach
        </ul>
    </div>

    <script>
        $(function () {
            $("#task-list").sortable({
                handle: ".drag-handle", // Only allow dragging by the handle
                update: function () {
                    let order = $("#task-list").sortable("toArray", { attribute: "data-id" });
                    $.post("{{ route('tasks.reorder') }}", { order: order, _token: "{{ csrf_token() }}" });
                }
            });
        });
    </script>
 </x-layout>
