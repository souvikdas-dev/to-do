<div class="text-sm font-semibold text-gray-900 dark:text-white">
    <input type="checkbox" name="task-{{$todo->id}}" id="task-{{$todo->id}}" class="mr-2 align-middle rounded-md">
    <span class="rounded-md">
        {{ $todo->task }}
    </span>
</div>