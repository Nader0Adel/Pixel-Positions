<x-layout>
    <div class="space-y-10">
        <section class="text-center pt-6">
            <h1 class="font-bold text-4xl">Let's Find Yout Next Your Job</h1>
            <form action="">
                <input type="text" name="" placeholder="Web Dev" class="rounded-xl bg-white/10 border-white/10 px-5 py-4 w-full max-w-lg" id="">
            </form>
        </section>
        <section class="pt-10">
            <x-heading-section>Feature Jobs</x-heading-section>
            <div class="grid grid-cols-3 gap-8 mt-6">
                @foreach ($jobs as $job)
                    <x-job-card :$job/>
                @endforeach
            </div>
        </section>
        <section>
            <x-heading-section>Tags</x-heading-section>
            <div class="mt-6 space-x-1">
                @foreach ($tags as $tag )
                    <x-tag :tag="$tag" />
                @endforeach
            </div>
        </section>
        <section>
            <x-heading-section>Recent Jobs</x-heading-section>
            <div class="mt-6 space-y-6">
                @foreach ($jobs as $job)
                    <x-job-card-wide :$job/>
                @endforeach
            </div>
        </section>
    </div>
</x-layout>