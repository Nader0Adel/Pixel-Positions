@props(['job'])
<div class="p-4 bg-white/5 rounded-xl flex gap-x-3 border border-transparent hover:border-blue-500 group ">
    <div class="">
        <x-employer-logo/>
    </div>
    <div class="flex-1">
        <a href="" class="self-start text-sm">{{ $job->employer->name }} </a>
        <h3 class="group-hover:text-blue-500">{{ $job->title }} </h3>
        <p>{{ $job->salary }} </p>
    </div>
    <div class="">
        @foreach ($job->tags as $tag)
            <x-tag :tag="$tag"></x-tag>
        @endforeach
    </div>
</div>