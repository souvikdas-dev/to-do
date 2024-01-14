<div class="flex flex-col gap-2">
    @foreach ($todos as $todo)
    <livewire:todo-item :$todo :key="$todo->id" />
    @endforeach
</div>