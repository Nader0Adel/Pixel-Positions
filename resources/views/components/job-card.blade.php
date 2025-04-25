@props(['job'])
<div class="p-4 bg-white/5 rounded-xl flex flex-col text-center border border-transparent hover:border-blue-400 group">
        <div class="self-start text-sm text-gray-400">{{ $job->employer->name }} </div>
        <div class="py-8 font-bold">
            <h3 class="group-hover:text-blue-500">{{ $job->title }} </h3>
            <p>{{ $job->salary }} </p>
        </div>
        <div class="flex justify-between items-center mt-auto">
            <div>
                @foreach ($job->tags as $tag)
                    <x-tag :$tag >tag</x-tag>                    
                @endforeach    
            </div>
            <x-employer-logo :width="45"/>
        </div>
</div>